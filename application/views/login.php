<!DOCTYPE html>

<html>
	<head>
		<title>BR COLLECTION</title>

		<link rel="stylesheet" href="<?php echo base_url()."assets/css/bootstrap.css"?>">
		<link rel="stylesheet" href="<?php echo base_url()."assets/css/bootstrap.min.css"?>">
		<link rel="stylesheet" href="<?php echo base_url()."assets/css/ionicons.min.css"?>">
		<link rel="stylesheet" href="<?php echo base_url()."assets/css/owl.carousel.css"?>">
	    <link rel="stylesheet" href="<?php echo base_url()."assets/css/tambahan.css"?>">
	    <link rel="stylesheet" href="<?php echo base_url()."assets/css/section.css"?>">
	    <link rel="stylesheet" href="<?php echo base_url()."assets/css/pemesananbaru.css"?>">

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
						<li><a href="<?php echo site_url("Co_database_awal/all_produk")?>">Produk</a></li>
						<li ><a href="<?php echo site_url("C_captcha")?>">Pemesanan</a></li>
					</ul> 
			    </div>
		  	</div>
		</nav>
	</section> 


	<section class="contact " >
		<div class="container">
	        <form class="row  login" method="POST" action="<?php echo site_url('Co_login/masuk');?>">
                <h3 class="section-title black">Login Admin</h3>
                <div class="row">
                	<div class="col-md-4 col-xs-4">
                    </div> 
                    <div class="col-md-4 col-xs-4 form-group">
                       <input name="username" class="form-control " type="text" placeholder="username/id">
                    </div> 
                </div>
                <div class="row">
                	<div class="col-md-4 col-xs-4">
                    </div>
                    <div class="col-md-4 col-xs-4 form-group">
                       <input name="password" class="form-control " type="password" placeholder="password">
                    </div> 
                </div>
                <input name="submit" class="btn btn-sub" type="submit" value="Login">
            </form> 

         
			<div><?php echo $this-> session->flashdata('pesan');?></div>
		 
		</div>
	</section>

	




<!-- Footer -->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="copy">
						Copyright &copy putrabagus2017
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