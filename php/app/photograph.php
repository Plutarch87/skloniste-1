<?php
// If it's going to need the database, then it's 
// probably smart to require it before we start.

class Photograph {
	
	protected static $table_name="photographs";
	protected static $db_fields=array('id', 'filename', 'type', 'size', 'galleryId');
	public $id;
	public $filename;
	public $type;
	public $size;
	public $galleryId;
	
	private $temp_path;
  	protected $upload_dir="images";
  	public $errors=array();
  
  protected $upload_errors = array(
	// http://www.php.net/manual/en/features.file-upload.errors.php
	UPLOAD_ERR_OK 		=> "No errors.",
	UPLOAD_ERR_INI_SIZE  	=> "Larger than upload_max_filesize.",
	UPLOAD_ERR_FORM_SIZE 	=> "Larger than form MAX_FILE_SIZE.",
	UPLOAD_ERR_PARTIAL 	=> "Partial upload.",
	UPLOAD_ERR_NO_FILE 	=> "No file.",
	UPLOAD_ERR_NO_TMP_DIR 	=> "No temporary directory.",
	UPLOAD_ERR_CANT_WRITE 	=> "Can't write to disk.",
	UPLOAD_ERR_EXTENSION 	=> "File upload stopped by extension."
	);

	// Pass in $_FILE(['uploaded_file']) as an argument
 	 public function attach_file($file, $i) {
		// Perform error checking on the form parameters
		if(!$file || empty($file) || !is_array($file)) {
		
		  // error: nothing uploaded or wrong argument usage
		  $this->errors[] = "No file was uploaded.";
		
		  return false;
		
		} elseif($file['error'][0] != 0) {
		
		  // error: report what PHP says went wrong
		  $this->errors[] = $this->upload_errors[$file['error'][0]];
		
		  return false;
		
		} else {
			// Set object attributes to the form parameters.				
				  $this->temp_path  = $file['tmp_name'][$i];
				  $this->filename   = basename($file['name'][$i]);
				  $this->type       = $file['type'][$i];
				  $this->size       = $file['size'][$i];
				  $this->galleryId  = (int) $i;

				  
			// Don't worry about saving anything to the database yet.
			return true;
		}
	}
  
	public function save() {
			
			// Can't save if there are pre-existing errors
		  if(!empty($this->errors)) { return false; }
		
		  // Can't save without filename and temp location
		  if(empty($this->filename) || empty($this->temp_path)) {
		    $this->errors[] = "The file location was not available.";
		    return false;
		  }
			
			// Determine the target_path
		  $target_path = __DIR__.'/../' .DIRECTORY_SEPARATOR. 'views' .DIRECTORY_SEPARATOR. 'assets'.DIRECTORY_SEPARATOR. $this->upload_dir .DIRECTORY_SEPARATOR. $this->filename;

		  // Make sure a file doesn't already exist in the target location
		  if(file_exists($target_path)) {
		    $this->errors[] = "The file {$this->filename} already exists.";
		    return false;
		  }
		
			// Attempt to move the file 
			if(move_uploaded_file($this->temp_path, $target_path)) {
		  	// Success
				// Save a corresponding entry to the database
				if($this->create()) {
					// We are done with temp_path, the file isn't there anymore
					unset($this->temp_path);
					return true;
				}
			} else {
				// File was not moved.
		    $this->errors[] = "The file upload failed, possibly due to incorrect permissions on the upload folder.";
		    return false;
			}
	}
	
	public function destroy() {
		
		$target_path = __DIR__.'/../'.DIRECTORY_SEPARATOR.'public'.DIRECTORY_SEPARATOR.$this->image_path();

		return unlink($target_path) ? true : false;
	}

	public function image_path() {
	  return $this->upload_dir.DIRECTORY_SEPARATOR.$this->filename;
	}
	
	public function size_as_text() {
		if($this->size < 1024) {
			return "{$this->size} bytes";
		} elseif($this->size < 1048576) {
			$size_kb = round($this->size/1024);
			return "{$size_kb} KB";
		} else {
			$size_mb = round($this->size/1048576, 1);
			return "{$size_mb} MB";
		}
	}

	public function create()
		{
			$db = new SQLite3('../../../skloniste.db');

			$filename = $db->escapeString($this->filename);
			$type = $db->escapeString($this->type);
			$size = $db->escapeString($this->size);
			$galleryId = $this->galleryId;

			$query = "INSERT INTO images (filename, type, size, galleryId) VALUES ('$filename', '$type', '$size', '$galleryId')";

			if ($db->exec($query))
			{
				$stmt = $db->prepare('SELECT filename, type, size, galleryId FROM images WHERE id=:id');	
				
				$result = $stmt->execute();
				
				return $result;
			}
			else
			{
				throw new Exception("Photograph", 1);			
			}
		}
}

?>