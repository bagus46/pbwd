<!DOCTYPE html>
<html >
	<head>
		<title>BR COLLECTION</title>

		<link rel="stylesheet" href="<?php echo base_url()."assets/css/bootstrap.css"?>">
		<link rel="stylesheet" href="<?php echo base_url()."assets/css/bootstrap.min.css"?>">
		<link rel="stylesheet" href="<?php echo base_url()."assets/css/ionicons.min.css"?>">
		<link rel="stylesheet" href="<?php echo base_url()."assets/css/owl.carousel.css"?>">
	    <link rel="stylesheet" href="<?php echo base_url()."assets/css/tambahan.css"?>">
	    <link rel="stylesheet" href="<?php echo base_url()."assets/css/section.css"?>">
	    <link rel="stylesheet" href="<?php echo base_url()."assets/css/produkbaru.css"?>">

	    					
	    					
	    					
	    					

	    <link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/css/twd-base.css"?>" />	

		
	</head>

<body>


	<section class="portfolio-header" id="header">
		
		<nav class="navbar navbar-default _navbar-fixed-top">
			<div class="container">
			
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">BR</a>
				</div> 
		    
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li ><a href="<?php echo site_url("Co_database_awal/new_produk")?>">Halaman Utama</a></li>
						<li  ><a href="<?php echo site_url("profil")?>">Profil</a></li>
						<li class="active"><a href="<?php echo site_url("Co_database_awal/all_produk")?>">Produk</a></li>
						<li ><a href="<?php echo site_url("C_captcha")?>">Pemesanan</a></li>
					</ul> 
			    </div>
		  	</div>
		</nav>
	</section> 



	<section class="section-background">
		<div class="container">
			<ol class="breadcrumb">
				<li><a href="<?php echo site_url("Co_database_awal/new_produk")?>">Halaman Utama</a></li>
				<li class="active">&nbsp;Produk</li>
			</ol>
		</div> 
	</section> 



	<!-- Portfolio -->
	<section class="portfolio" id="portfolio">
		<div class="container section-wrapper">
			<h2 class="section-title black">
				Semua Produk
			</h2> 
			<div class="underline purple"></div>
			<div class="row" id="gallery">

				<?php foreach ($data as $d) { ?>


						<div class="col-sm-4" >
							<div class="portfolio-item" >
								<div class="portfolio-img thumbnail" style="width: 370px;height: 278px;">
								
<?php echo "<img src='http://localhost/pbwd/".$d->gambar."' class="."port-item".">"; ?>
									<a href="<?php echo "http://localhost/pbwd/".$d->gambar; ?>">
								<div class="portfolio-img-hover" >
								</div>
								</a>
								</div> 
								<div class="portfolio-item-details">
									<div class="portfolio-item-name">
										<?php echo $d->nama_sepatu; ?> <br><small><?php echo $d->harga; ?></small>
									</div>
										
								</div> 
							</div> 
						</div> 
				
				<?php } ?>

				</div>
				<div class="container col-md-3 col-md-offset-5">
					<?php
        		echo $this->pagination->create_links();
    			?>
				</div>
				 
		</div> 
	</section> 


	<footer>
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="copy">
						Copyright &copy; putrabagus2017
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

	<script type="text/javascript" src="<?php echo base_url()."assets/js/jquery.js"?>"></script>
		<script type="text/javascript" src="<?php echo base_url()."assets/js/jquery.lightbox-0.5.min.js"?>"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/css/jquery.lightbox-0.5.css"?>" media="screen" />

		<script type="text/javascript">
		$(function() {
			$('#gallery a').lightBox();
		});
		</script>

</body>
</html>

