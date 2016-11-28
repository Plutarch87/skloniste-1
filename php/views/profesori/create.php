<?php
require 'prof.header.php';
?>
<section class="main">
	<div class="container">
		<h1 style="font-family: Impact; text-align: center;">Nov Unos - Profesora/ice</h1>
		<hr>
		<div class="row col-md-6" style="margin-left: auto; margin-right: auto; width: 100%;">			
			<form method="POST" action="store.php" class="form-horizontal" role="form" enctype="multipart/form-data">
			<div class="form-group">
				<label for="name" class="control-label col-sm-2">Ime:</label>
			    	<div class="col-sm-10">
			      	<input required type="text" name="name" class="form-control" id="name" placeholder="Ime">
				</div>
			</div>
		  	<div class="form-group">
				<label for="surname" class="control-label col-sm-2">Prezime:</label>
			    	<div class="col-sm-10"> 
			      	<input type="text" name="surname" class="form-control" id="surname" placeholder="Prezime">
			    	</div>
		    	</div>
			<div class="form-group">
			    	<label for="instrument" class="control-label col-sm-2">Instrument:</label>
			    	<div class="col-sm-10"> 
			      	<input type="text" name="instrument" class="form-control" id="instrument" placeholder="Instrument">
			    	</div>
			</div>
			<div class="form-group">
			    	<label for="bio" class="control-label col-sm-2">Biografija:</label>
			    	<div class="col-sm-10"> 
			      	<textarea required type="textarea" name="bio" class="form-control" id="bio" placeholder="Biografija"></textarea>
			    	</div>
		    	</div>
		    	<div class="form-group">
		    		<label for="img" class="control-label col-sm-2">Fotografija:</label>
		    		<div class="col-sm-10">
		    			<input type="file" name="img[]" id="img">
		    			<input type="hidden" name="size">
		    		</div>
		    	</div>
			<div class="form-group"> 
				<div class="col-sm-offset-2 col-sm-10">
			      	<button type="submit" name="submit" class="btn btn-warning">Unesi</button>
			    	</div>
			</div>
			</form>
		</div>		
	</div>
</section>
<?php require '../admin.footer.php'; ?>