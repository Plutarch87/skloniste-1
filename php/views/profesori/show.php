<?php
require 'prof.header.php';
$id = $_GET['id'];
$query = $app['database'];
$user = $query->show('profesori', $id);
?>
<section class="main">
	<div class="container">
		<h1 style="font-family: Impact"><?= $user[0]['name']. ' ' .$user[0]['surname']; ?></h1>
		<hr>		
		<div class="row">
			<ul>
				<img width="250" height="250" src="../assets/images/<?= $user[0]['img']; ?>" alt="<?= $user[0]['name']; ?>1">
				<li>Instrument: <?= $user[0]['instrument']; ?></li>
				<li>Biografija: <?= $user[0]['bio']; ?></li>
			</ul>
			<p>					
				<a href="edit.php?id=<?= $_POST['id'] = $id; ?>" class="btn btn-info">Izmeni</a>
				<a href="index" class="btn btn-default">Nazad</a>
				&nbsp;
				<form method="POST" action="delete.php?id=<?= $_POST['id'] = $id; ?>">
					<input type="hidden" method="DELETE">
					<button type="submit" class="btn btn-danger" onclick="return confirm('Da li ste sigurni?')">Izbrisi</button>
				</form>
			</p>
		</div>
	</div>

</section>
<?php require '../admin.footer.php'; ?>