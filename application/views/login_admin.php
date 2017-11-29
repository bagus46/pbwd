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
						<li><a href="<?php echo site_url("Co_database/sepatu")?>">Sepatu</a></li>
						<li class="active"><a href="<?php echo site_url("Co_database/admin")?>">Admin</a></li>
						<li><a href="<?php echo site_url("Co_database/pemesanan")?>">Pemesanan</a></li>
						<li><a href="<?php echo site_url("co_login/keluar")?>">Logout</a></li>
					</ul> 
			    </div>
		  	</div>
		</nav>
	</section> 

		<div class="container container-table table-responsive">
			<div class="header-table">
				<div >
					<table border="1" width=50% class="table1" >
			<tr>
				<th>ID Admin</th>
				<th>Nama Admin</th>
				<th>Username</th>
				<th>Password</th>
				<th>Action</th>
			</tr>
			
				<?php foreach ($data as $d) { ?>
			
					<tr>
						<td><?php echo $d->id_admin; ?></td>
						<td><?php echo $d->nama_admin; ?></td>
						<td><?php echo $d->username; ?></td>
						<td><?php echo $d->password; ?></td>
						<td>
							<a href="<?php echo base_url()."index.php/Co_database/do_edit_admin/".$d->id_admin ?>">edit</a> ||
							<a href="<?php echo base_url()."index.php/Co_database/do_delete_admin/".$d->id_admin ?>">delete</a>	
						</td>
					</tr>
				<?php } ?>
		</table>

				</div>
			</div>

		</div> 
		<div class="col-md-3 col-md-offset-5">
				<a href="<?php echo site_url("Co_database/formaddadmin")?>">tambahkan data</a>
		</div>
		<div style="float: right;margin-right: 6em;">
			<?php
        		echo $this->pagination->create_links();
    		?>
		</div>
		
	</section>
</body>
</html>