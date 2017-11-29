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
								<li class="active"><a href="<?php echo site_url("C_captcha")?>">Pemesanan</a></li>
							</ul> 
					    </div>
				  	</div>
				</nav>
			</section> 


			<section class="section-background">
				<div class="container">
					<ol class="breadcrumb">
						<li><a href="<?php echo site_url("Co_database_awal/new_produk")?>">Halaman Utama</a></li>
						<li class="active">&nbsp;Pemesanan</li>
					</ol>
				</div> 
			</section> 


			<section class="contact section-wrapper" id="contact">
				<div class="container">
					<div class="row">
			            <div class="col-md-4 contact-item col-xs-12">
			                <i class="ion-location"></i>
			                <h3>Address</h3>
			                <p class="contact">
			                    Kahuripan Nirwana</br>
			                    A - 27 SIDOARJO
			                </p>
			            </div>
			            <div class="col-md-4 contact-item col-xs-12">
			                <i class="ion-ios-telephone"></i>
			                <h3>Phone</h3>
			                <p class="contact">
			                    Mobile: 085204178922
			                </p>
			            </div>
			            <div class="col-md-4 contact-item col-xs-12">
			                <i class="ion-ios-email"></i>
			                <h3>Email Address</h3>
			                <p class="contact">
			                    <a href="mailto:widyasaputra150@gmail.com">widyasaputra150@gmail.com</a> <br>
			                </p>
			            </div
			        </div> 
			        <form class="row form" method="POST" action="<?php echo base_url('index.php/Co_pesanan/pesanan');?>">
		                <h3>Pemesanan barang</h3>
		                <div class="col-sm-4 col-xs-12 form-group">
		                    <input name="nama_pemesan" class="form-control" type="text" placeholder="First Name">
		                </div> 
		                <div class="col-sm-4 col-xs-12 form-group">
		                    <input name="email_pemesan" class="form-control" type="email" placeholder="Email address">
		                </div> 
		                <div class="col-sm-4 col-xs-12 form-group">
		    			
		    				<SELECT name="id_sepatu" class ="form-control">
		    				<option>-- Pilih Sepatu --</option>
								  

		    				<?php foreach ($data as $d) { ?>

					    	<?php $a = $d[id_sepatu]; ?>
					    	<?php $b = $d[nama_sepatu]; ?>
					    	<?php echo "<option value='$a'>$b</option>" ?>
							<?php } ?>
		    				</select>
		                </div> 
		                <div class="col-sm-4 col-xs-12 form-group">
		                    <input name="jumlah_pesanan" class="form-control" type="text" placeholder="Jumlah">
		                </div> 
		                <div class="col-sm-4 col-xs-12 form-group">
		                    <input name="nomor_pemesan" class="form-control" type="text" placeholder="Nomor telepon">
		                </div> 
		                <div class="row">
		                    <div class="col-md-12 col-xs-12 form-group">
		                        <textarea name="alamat_pemesan" class="message form-control" placeholder="Alamat"></textarea>
		                    </div> 
		                </div>
		                <div class="row">
		                    <div class="col-md-12 col-xs-12 form-group">
		                        <textarea name="catatan" class="message form-control" placeholder="masukan keterangan seperti warna, ukuran dan lain sebagainya"></textarea>
		                    </div> 
		                </div>
		                <div class="row">
		                    <div class="col-sm-4 col-xs-12 form-group" style="margin-left: 2em;">
							<?=$captcha_image?>&nbsp;<a href="#" onclick="parent.window.location.reload(true)">[perbarui gambar]</a>
							</div>
						</div>
						<div class="row">
							 <div class="col-sm-4 col-xs-12 form-group" style="margin-left: 2em;">
		                    <input name="input_captcha" class="form-control" type="text" required="">
							</div>
						</div>
		                    <input name="submit" class="btn btn-sub" type="submit" value="Send Message">
		                
		            </form> 
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
		</body>
</html>