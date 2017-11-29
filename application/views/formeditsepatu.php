<!DOCTYPE html>
<html>
<head>
	<title>Data Barang</title> 


		<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css')?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/css/ionicons.min.css')?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/css/owl.carousel.css')?>">
	    <link rel="stylesheet" href="<?php echo base_url('assets/css/tambahan.css')?>">
	    <link rel="stylesheet" href="<?php echo base_url('assets/css/section.css')?>">
	    <link rel="stylesheet" href="<?php echo base_url('assets/css/pemesananbaru.css')?>">

</head>
<body >

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
						<li><a href="<?php echo site_url("Co_database/sepatu")?>">Sepatu</a></li>
						<li><a href="<?php echo site_url("Co_database/admin")?>">Admin</a></li>
						<li><a href="<?php echo site_url("Co_database/pemesanan")?>">Pemesanan</a></li>
						<li><a href="<?php echo site_url("co_login/keluar")?>">Logout</a></li>
					</ul> 
			    </div>
		  	</div>
		</nav>
	</section> 
<div class="container">
				
	<form method="POST" action="<?php echo base_url("index.php/Co_database/do_update/$id_sepatu");?>" enctype="multipart/form-data">
	<?php
		$penyimpanan = $gambar;
	?>
		<table class=" row form form-group col-md-offset-4 table-responsive" style="margin-top: 5em;border-radius: 20px;">
			<tr>
				<td>
					<label>Id Sepatu </label>
				</td>
				<td>
					<input type="text" name="id_sepatu" class="form-control" value="<?php echo  $id_sepatu; ?>" readonly>
				</td>
			</tr>
			<tr>
				<td>
					<label>Nama Sepatu</label>
				</td>
				<td>
					<input type="text" name="nama_sepatu" class="form-control" value="<?php echo  $nama_sepatu; ?>" >
				</td>
			</tr>
			<tr>
				<td>
					<label>Jumlah Sepatu</label>
				</td>
				<td>
					<input type="text" name="jumlah_sepatu" class="form-control" value="<?php echo  $jumlah_sepatu; ?>" >
				</td>
			</tr>
			<tr>
				<td>
					<label>Harga</label>
				</td>
				<td>
					<input type="text" name="harga" class="form-control" value="<?php echo  $harga; ?>" >
				</td>
			</tr>
			<tr>
				<td>
					<label>Produk baru</label>
				</td>
				<td>
					<SELECT name="produk_baru" class ="form-control">
		    				<option value=1>YA</option>
		    				<option value=0>TIDAK</option>
					
		    		</select>
				</td>
			</tr>
			<tr>
				<td>
					<label>upload gambar</label>
				</td>
				<td>
					<?php echo "<img src='http://localhost/pbwd/".$gambar."' class="."port-item".">"; ?> </br>
					<input type="text" name="gambarlama" class="form-control" value="<?php echo  $gambar; ?>" readonly>
				</td>
				<td>
					<input type="file" name="gambar" >
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" name="btnSubmit" value="simpan">
				</td>
			</tr>
		</table>
	</form>

</div>


</body>
</html>