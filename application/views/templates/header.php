<!doctype html>


<html lang="en" class="no-js">
<head>
	<title>Triptip</title>

	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/triptip-assets.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">

</head>
<body>

	<!-- Container -->
	<div id="container">
		<!-- Header
		    ================================================== -->
		<header class="clearfix">

			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
				<div class="container">

					<a class="navbar-brand" href="https://youtu.be/dQw4w9WgXcQ" target="_blank">
						<img src="<?php echo base_url(); ?>assets/images/logo.png" alt="">
					</a>

					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav mr-auto">
							<li>
								<a class="active" href="<?php echo base_url(); ?>">Home <i class="fa fa-caret-down" aria-hidden="true"></i></a>
								<ul class="dropdown">
									<li><span>Demo Pages</span></li>
									<li><a href="<?php echo base_url(); ?>">Homepage 1</a></li>
									<li><a href="<?php echo base_url(); ?>home2">Homepage 2</a></li>
									<li><a href="<?php echo base_url(); ?>home3">Homepage 3</a></li>
									<li><a href="<?php echo base_url(); ?>home4">Homepage 4</a></li>
								</ul>
							</li>
							<li><a href="#">Pages <i class="fa fa-caret-down" aria-hidden="true"></i></a>
								<div class="megadropdown">
									<div class="dropdown-box">
										<span>Explore pages</span>
										<ul class="dropdown-list">
											<li><a href="<?php echo base_url(); ?>exploresidebarmap">Explore map sidebar</a></li>
											<li><a href="<?php echo base_url(); ?>explorefullwidthmap">Explore fullwidth map</a></li>
											<li><a href="<?php echo base_url(); ?>explorecategory">Explore by Category</a></li>
											<li><a href="<?php echo base_url(); ?>explorefullwidthmaplist">Explore list</a></li>
										</ul>
									</div>
									<div class="dropdown-box">
										<span>Listing detail pages</span>
										<ul class="dropdown-list">
											<li><a href="<?php echo base_url(); ?>listingdetaillarge">Listing detail large image</a></li>
											<li><a href="<?php echo base_url(); ?>listingdetailsidebar">Listing detail with sidebar</a></li>
											<li><a href="<?php echo base_url(); ?>listingdetailfullwidth">Listing detail fullwidth</a></li>
										</ul>
									</div>
									<div class="dropdown-box">
										<span>Simple pages</span>
										<ul class="dropdown-list">
											<li><a href="<?php echo base_url(); ?>about">About Us</a></li>
											<li><a href="<?php echo base_url(); ?>blog">Blog</a></li>
											<li><a href="<?php echo base_url(); ?>singlepost">Blog Single Post</a></li>
										</ul>
									</div>
									<div class="dropdown-box">
										<span>Account pages</span>
										<ul class="dropdown-list">
											<li><a href="<?php echo base_url(); ?>addlisting">Add listing</a></li>
											<li><a href="<?php echo base_url(); ?>signpage">Login &amp; Registration</a></li>
											<li><a href="<?php echo base_url(); ?>userpage">User page</a></li>
										</ul>
									</div>
								</div>
							</li>
							<li><a href="<?php echo base_url(); ?>contacts">Contact</a></li>
						</ul>
						<ul class="navbar-nav ml-auto right-list">
							<li><a href="<?php echo base_url(); ?>signpage"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> Sign In</a></li>
							<li><a href="<?php echo base_url(); ?>signpage"><i class="fa fa-user-o" aria-hidden="true"></i> Register</a></li>
						</ul>
						<a href="<?php echo base_url(); ?>addlisting" class="add-list-btn btn-default"><i class="fa fa-plus" aria-hidden="true"></i> Add Listing</a>
					</div>
				</div>
			</nav>
		</header>
		<!-- End Header -->
