<!DOCTYPE html>
<html>
	<head>
		<title>BR COLLECTION</title>
		<link rel="stylesheet" href="<?php echo base_url()."assets/css/bootstrap.css"?>">
		<link rel="stylesheet" href="<?php echo base_url()."assets/css/bootstrap.min.css"?>">
		<link rel="stylesheet" href="<?php echo base_url()."assets/css/ionicons.min.css"?>">
		<link rel="stylesheet" href="<?php echo base_url()."assets/css/owl.carousel.css"?>">
	    <link rel="stylesheet" href="<?php echo base_url()."assets/css/tambahan.css"?>">
	    <link rel="stylesheet" href="<?php echo base_url()."assets/css/homeawal.css"?>">
	    <link rel="stylesheet" href="<?php echo base_url()."assets/css/produkbaru.css"?>">
	</head>

<body>

<!-- Home -->
	<section class="header" id="header">
		
		<nav class="navbar navbar-default">
			<div class="container">
				<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="home.php">BR</a>
				</div>
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li class="active"><a href="<?php echo site_url("Co_database_awal/new_produk")?>">Halaman Utama</a></li>
						<li ><a href="<?php echo site_url("profil")?>">Profil</a></li>
						<li><a href="<?php echo site_url("Co_database_awal/all_produk")?>">Produk</a></li>
						<li><a href="<?php echo site_url("C_captcha")?>">Pemesanan</a></li>
					</ul>
			    </div>
		  	</div>
		</nav>
		<div class="container">
			<div class="header-table">
				<div class="header-wrapper">
					<h1 class="header-title">
						BR COLLECTION
					</h1>
					<p class="header-subtitle">
						Pilihan Terbaik Keluarga Anda
					</p>
				</div>
			</div>
		</div>
	</section>


<!-- Portfolio -->

			<section class="section-wrapper add container">
			<h2 style="text-align: center;">
				Produk Terbaru
			</h2> 
			<div class="underline purple"></div>
				<div class="owl-carousel add-owl">
						<?php for($i=0; $i<6; $i++) { ?>
						<div class="thumbnail">
<?php echo "<img src='http://localhost/pbwd/".$data[$i]['gambar']."' class="."add-item".">"; ?>
						</div> 
						<?php } ?>
				</div> 
			</div> 
	</section> 

<!-- Footer -->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="copy">
						Copyright <a href="<?php echo site_url('login')?>">&copy</a> putrabagus2017
					</div>
				</div>
			</div> 		
		</div>
	</footer>

	<script src="<?php echo base_url()."assets/js/jquery-1.11.2.min.js"?>"></script>
    <script src="<?php echo base_url()."assets/js/bootstrap.min.js"?>"></script>
    <script src="<?php echo base_url()."assets/js/owl.carousel.min.js"?>"></script>
    <script src="<?php echo base_url()."assets/js/contact.js"?>"></script>
	<script src="<?php echo base_url()."assets/js/script.js"?>"></script>
</body>
</html>