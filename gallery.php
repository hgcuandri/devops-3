<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>My Portofolio</title>
	<!-- CSS Manual -->
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
</head>
<body>
	<!-- Header -->
	<header>
		<div class="logo">
			<a href="beranda.php"><img src="./images/binus.png" alt="logo" width="110px" height="30px"></a>
		</div>
		<div class="title">My Portofolio</div>
	</header>

	<!-- Navigasi -->
	<div class="navbar">
		<ul>
			<li><a href="beranda.php">beranda</a></li>
			<li><a href="gallery.php">Gallery</a></li>
			<li><a href="portopolio.php">Portofolio</a></li>
			<li><a href="hubungi.php">Hubungi</a></li>
		</ul>		
	</div>

	<div style="display: flex;">
		<!-- Main Content -->
	    <div class="main">
	    	<div>
			<!-- galeri -->
				<div class="container-galeri" id = "galeri">
					<br>
					<center><h1>Gallery projects</h1></center>
					<br>
					<div class="text">
						<p>Berikut adalah galeri project saya, galeri project tersebut merupakan aplikasi web yang sudah saya buat sebelumnya, saya mencantumkan galeri project ini sebagai bentuk dokumentasi. Segala bentuk file project atau dokumentasi akan saya berikan hanya dengan perlu isi form pada navigasi 'hubungi' dan tunggu beberapa saat saja akan diberikan melalui email anda.</p>
						<br>
						<p>Here is my project gallery, the project gallery is a web application that I made before, I include this project gallery as a form of documentation. I will provide all forms of project files or documentation, all you need to do is fill in the form on the 'contact' navigation and wait a few moments, it will be sent via your email.</p>
					</div>
				</div>
					<!-- projects -->
				<div class="container-projects" id = "projects">
					<h1>Projects</h1>
					<hr class="split">
					<div class="cards">

						<a>
						<div class="card">
							<img src="../images/gambar1.jpeg" alt="">
							<center><p>Ini adalah project saya membuat slideshow gambar sederhana menggunakan bootstrap.</p></center>
						</div>
						</a>

						<a>
						<div class="card">
							<img src="../images/gambar2.jpeg" alt="">
							<center><p>Ini adalah project saya membuat website profile sederhana.</p></center>
						</div>
						</a>

						<a>
						<div class="card">
							<img src="../images/gambar6.jpeg" alt="">
							<center><p>ini adalah project saya membuat form login sederhana.</p></center>
						</div>
						</a>

						<a>
						<div class="card">
							<img src="../images/gambar4.jpeg" alt="">
							<center><p>Ini adalah project saya membuat website myportofolio yang ditentukan oleh LSP BSI.</p></center>
						</div>
						</a>

						<a>
						<div class="card">
							<img src="../images/gambar5.jpeg" alt="">
							<center><p>ini adalah project saya membuat login dan register sederhana.</p></center>
						</div>
						</a>

						<a>
						<div class="card">
							<img src="../images/gambar3.jpeg" alt="">
							<center><p>ini adalah project saya membuat website myportofolio sederhana.</p></center>
						</div>
						</a>

						<a>
						<div class="card">
							<img src="../images/gambar7.jpeg" alt="">
							<center><p>ini adalah project saya membuat company profile sederhana.</p></center>
						</div>
						</a>

					</div>
				</div>
	    	</div>
	    	<div class="row">
	    	</div>
	    </div>
	</div>

	<!-- Footer -->
	<footer><small>Kamu Siapa</small></footer>
	<!-- Bootstrap CSS -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>