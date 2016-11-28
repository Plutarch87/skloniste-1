<?php 

class QueryBuilder
{
	protected $pdo;

	public function __construct($pdo)
	{
		$this->pdo = $pdo;
	}

	public function selectAllProf($table)
	{
		$db = new SQLite3('../../../skloniste.db');

		$stmt = $db->query('SELECT * FROM '.$table);

		while($result = $stmt->fetchArray(SQLITE3_ASSOC)):
			$r[] = $result;
		endwhile;
		if(isset($r)){
			return $r;
		}
	}

	public function storeProf($table, $name, $surname, $instrument, $bio, $img)
	{
		$db = new SQLite3('../../../skloniste.db');
		$name = $db->escapeString(utf8_encode($name));
		$surname = $db->escapeString(utf8_encode($surname));
		$instrument = $db->escapeString(utf8_encode($instrument));
		$bio = $db->escapeString(utf8_encode($bio));
		$img = $db->escapeString($img);

		$query = "INSERT INTO ".$table." (name, surname, instrument, bio, img) VALUES ('$name', '$surname', '$instrument', '$bio', '$img')";

		if ($db->exec($query))
		{
			$stmt = $db->prepare('SELECT name, surname, instrument, bio, img FROM '.$table.' WHERE id=:id');	
			
			$result = $stmt->execute();
			
			return $result;
		}
		else
		{
			throw new Exception("QueryBuilder", 1);			
		}
	}

	public function show($table, $id)
	{
		$db = new SQLite3('../../../skloniste.db');

		$stmt = $db->query("SELECT * FROM '$table' WHERE id ='$id'");

		while($result = $stmt->fetchArray(SQLITE3_ASSOC)):
			$r[] = $result;
		endwhile;

		return isset($r) ? $r : null;
	}
	
	public function showImagesAPI($table, $id)
	{
		$db = new SQLite3('../../skloniste.db');

		$stmt = $db->query("SELECT * FROM '$table' WHERE galleryId ='$id'");

		while($result = $stmt->fetchArray(SQLITE3_ASSOC)):
			$r[] = $result;
		endwhile;

		return isset($r) ? json_encode($r) : null;
	}

	public function updateProf($arr)
	{
		$db = new SQLite3('../../../skloniste.db');
		$id = $arr['id'];
		foreach($arr as $k => $v):
			$v = $db->escapeString($v);
			$query = "UPDATE profesori SET '$k'='$v' WHERE id='$id'";

			if ($db->exec($query))
			{
				$stmt = $db->prepare("SELECT '$k' FROM profesori WHERE id='$id'");			
				
				$result = $stmt->execute();
				
			}
			else
			{
				throw new Exception("QueryBuilder", 1);			
			}
		endforeach;
				return $result;

	}

	public function destroy($table, $id)
	{
		$db = new SQLite3('../../../skloniste.db');

		$query = "DELETE FROM '$table' WHERE id='$id'";

		if ($db->exec($query))
		{
			$stmt = $db->prepare("SELECT * FROM '$table' WHERE id=:id");			
			
			$result = $stmt->execute();
			
			return $result;
		}
		else
		{
			throw new Exception("QueryBuilder", 1);			
		}
	}

	public function check($email, $password)
	{
		$db = new SQLite3('../../skloniste.db');

		$stmt = $db->query('SELECT * FROM users where id = 1;');

		$results = $stmt->fetchArray();

		return $results;
		
	}

	// Common Database Methods
	public static function find_all($table, $id="")
	{
		$db = new SQLite3('../../../skloniste.db');

		$stmt = $db->query("SELECT * FROM '$table' WHERE galleryId='$id'");

		while($result = $stmt->fetchArray(SQLITE3_ASSOC)):
			$r[] = $result;
		arsort($r);
		endwhile;
		
		return isset($r) ? $r : null;
  	}

	public function getAll($table)
	{
		$db = new SQLite3('../../skloniste.db');

		$stmt = $db->query('SELECT * FROM '.$table);

		while($result = $stmt->fetchArray(SQLITE3_ASSOC)):
			$r[] = $result;
		endwhile;

		return isset($r) ? json_encode($r) : null;
	}

	public function indexGallery()
	{
		$db = new SQLite3('../../../skloniste.db');

		$stmt = $db->query('SELECT * FROM galleries');

		while($result = $stmt->fetchArray(SQLITE3_ASSOC)):
			$r[] = $result;
		endwhile;
		
		return isset($r) ? $r : null;
			
	}

	public function storeGallery($title)
	{
		$db = new SQLite3('../../../skloniste.db');

		$query = "INSERT INTO galleries (title) VALUES ('$title');";

		if ($db->exec($query))
		{
			$stmt = $db->prepare('SELECT title FROM galleries WHERE id=:id');	
			
			$result = $stmt->execute();
			
			return $result;
		}
		else
		{
			throw new Exception("QueryBuilder", 1);			
		}
	}

}