<!DOCTYPE html>
<html>

<?php include 'header.php'; ?>

<body>
	<header>
		<h1>Selamat Datang di Belajar GIT</h1>
		<nav>
			<ul>
				<li><a href="?page=home.php&title=Beranda">Beranda</a></li>
				<li><a href="?page=about.php&title=Tentang Kami">Tentang Kami</a></li>
				<li><a href="?page=contact.php&title=Kontak">Kontak</a></li>
			</ul>
		</nav>
	</header>

	<main>
		<?php include $_GET['page'] ?? 'beranda.php'; ?>
	</main>

	<?php include 'footer.php'; ?>
</body>

</html>