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
						<li class="active"><a href="<?php echo site_url("Co_database/sepatu")?>">Sepatu</a></li>
						<li><a href="<?php echo site_url("Co_database/admin")?>">Admin</a></li>
						<li><a href="<?php echo site_url("Co_database/pemesanan")?>">Pemesanan</a></li>
						<li><a href="<?php echo site_url("co_login/keluar")?>">Logout</a></li>
					</ul> 
			    </div>
		  	</div>
		</nav>
	</section> 
		<div class=" container-table table-responsive">
		<form style="float: right" method="POST" action="<?php echo site_url("Co_database/search_keyword")?>">
			<input style="border-color: black" type="text" name="keyword" value="masukan nama sepatu">
			<input type="submit" name="search" value="cari">
		</form>

			<div class="header-table">
				<div class="header-wrapper">
				
					<table border="1" width=50% class="table1" >
			<tr>
				<th>ID sepatu</th>
				<th>Nama sepatu</th>
				<th>Jumlah sepatu</th>
				<th>Harga</th>
				
				<th>Produk baru</th>
				<th>Action</th>
			</tr>
			
				<?php foreach ($data as $d) { ?>
			
					<tr>
						<td><?php echo $d->id_sepatu; ?></td>
						<td><?php echo $d->nama_sepatu; ?></td>
						<td><?php echo $d->jumlah_sepatu; ?></td>
						<td><?php echo $d->harga; ?></td>
						
						<td>
						<?php if($d->produk_baru == 1){ 
								echo "baru";}
						 else {echo "lama";}
						 ?>
						</td>
						<td>
							<a href="<?php echo base_url()."index.php/Co_database/do_edit/".$d->id_sepatu ?>">edit</a> ||
							<a href="<?php echo base_url()."index.php/Co_database/do_delete/".$d->id_sepatu ?>">delete</a>	
						</td>
					</tr>
				<?php } ?>

		</table>
				</div>
			</div>

		</div> 
		<div class="col-md-3 col-md-offset-5">
				<a href="<?php echo site_url("Co_database/formadd")?>">tambahkan data</a>
		</div>
		<div style="float: right;margin-right: 6em;">
			<?php
        		echo $this->pagination->create_links();
    		?>
		</div>
		
	</section>
</body>
</html>

<!--<th>Gambar</th>
<td><?php //echo $d->gambar; ?></td>-->