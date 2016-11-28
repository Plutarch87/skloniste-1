<?php
	
	include 'galer.header.php';

	$query = $app['database'];
	$results = $query->indexGallery();

?>
<section class="main">
<h1>Albumi / Galerije</h1>
<hr>
<?php
	if(!empty($_SESSION['message'])):
		echo '<div class="alert alert-success">'.$_SESSION['message'].'</div>';
		unset($_SESSION['message']);
	endif;
?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
				<div id="album">
					<div class="header">
						<h4><strong>&nbsp;</strong></h4>
						<hr>			
					</div>
					<div class="body">
						<br>
						<a data-toggle="modal" href="#galleryModal"><span>&plus;<br>Napravi Album</span></a>
					</div>
					<div class="footer">
						
					</div>
				</div>
			</div>
			<!-- CHECK IF RESULTS EXIST -->
		<?php if (isset($results)): ?>
			<?php foreach ($results as $result): ?>
			<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
				<div class="album">
					<div class="header">
						<h4><strong><?= $result['title']; ?></strong></h4>
						<hr>			
					</div>
					<div class="body">
						<?php if (isset($images)): ?>
								<a href='show.php?id=<?= $result['id']; ?>'><img src='../assets/images/novisat.jpg' alt='Ubacite Slike'	/></a>";
						<?php else: ?>
								<a style='opacity: 0.5;' href='show.php?id=<?= $result['id']; ?>'><span>&plus;<br>Dodajte slike</span></a>
						<?php endif; ?>
					</div>
					<div class="footer">
					<form action="delete.php?id=<?= $result['id']; ?>" method="POST">
						<button type="submit" class="btn btn-danger push-right" onclick="return confirm('Da li ste sigurni?');">Obrisi Galeriju</button>
					</form>
					</div>
				</div>
			</div>
			<?php endforeach; ?>
		<?php endif; ?>

		</div>
	</div>
</section>
<?php include 'galer.footer.php'; ?>