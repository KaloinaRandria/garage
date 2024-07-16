<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
	lang="en"
	class="light-style layout-menu-fixed"
	dir="ltr"
	data-theme="theme-default"
	data-assets-path="../assets/"
	data-template="vertical-menu-template-free"
>
<head>
	<meta charset="utf-8" />
	<meta
		name="viewport"
		content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
	/>

	<title>Cards basic - UI elements | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>

	<meta name="description" content="" />

	<!-- Favicon -->
	<link rel="icon" type="image/x-icon" href="<?php echo base_url('assets/img/favicon/favicon.ico'); ?>assets/img/favicon/favicon.ico" />

	<!-- Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link
		href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
		rel="stylesheet"
	/>

	<!-- Icons. Uncomment required icon fonts -->
	<link rel="stylesheet" href="<?php echo base_url('assets/vendor/fonts/boxicons.css'); ?>" />

	<!-- Core CSS -->
	<link rel="stylesheet" href="<?php echo base_url('assets/vendor/css/core.css'); ?>" class="template-customizer-core-css" />
	<link rel="stylesheet" href="<?php echo base_url('assets/vendor/css/theme-default.css'); ?>" class="template-customizer-theme-css" />
	<link rel="stylesheet" href="<?php echo base_url('assets/css/demo.css'); ?>" />

	<!-- Vendors CSS -->
	<link rel="stylesheet" href="<?php echo base_url('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css'); ?>" />

	<!-- Page CSS -->
	<!-- Page -->
	<link rel="stylesheet" href="<?php echo base_url('assets/vendor/css/pages/page-auth.css'); ?>" />
	<!-- Helpers -->
	<script src="<?php echo base_url('assets/vendor/js/helpers.js'); ?>"></script>

	<!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
	<!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
	<script src="<?php echo base_url('assets/js/config.js'); ?>"></script>
</head>

<body>
<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar">
	<div class="layout-container">

		<?php $this->load->view('back_office/includes/header') ?>
		<!-- Layout container -->
		<div class="layout-page">
			<!-- Navbar -->


			<!-- Content wrapper -->
			<div class="content-wrapper">
				<!-- Content -->
				<div class="container-xxl flex-grow-1 container-p-y">
					<div class="card mb-5">
						<h5 class="card-header">Table Basic</h5>
						<div class="table-responsive text-nowrap">
							<table class="table">
								<thead>
								<tr>
									<th>id</th>
									<th>Reparation</th>
									<th>Duree</th>
									<th>Prix</th>
									<th></th>
									<th></th>
								</tr>
								</thead>
								<tbody class="table-border-bottom-0">
								<!-- boucle -->
								 <?php foreach($services as $row) { ?>
								<tr>
									<td><strong><?=$row['id']?></strong></td>
									<td><?=$row['intitule']?></td>
									<td><?=$row['duree']?></td>
									<td><?=$row['prix']?></td>
									<td><a href="<?= base_url()?>Service/edit/<?=$row['id']?>"><button class="btn btn-outline-success">Modifier</button></a></td>
									<td><a href="<?= base_url()?>Service/delete/<?=$row['id']?>" onclick="return confirm('Confirmer la suppression')"><button class="btn btn-danger">Supprimer</button></a></td>
								</tr>
								<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
					<div class="row">
						<a href="<?= base_url()?>Service/ajouterService"><button class="btn btn-success">Ajouter</button></a>
					</div>
				</div>

				<!--/ Basic Bootstrap Table -->



				<!-- / Content -->


				<div class="content-backdrop fade"></div>
			</div>
			<!-- Content wrapper -->
			<!-- Footer -->
			<?php $this->load->view('includes/footer'); ?>
			<!-- / Footer -->
		</div>
		<!-- / Layout page -->
	</div>

	<!-- Overlay -->
	<div class="layout-overlay layout-menu-toggle"></div>
</div>
<!-- / Layout wrapper -->



<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="<?php echo base_url('assets/vendor/libs/jquery/jquery.js'); ?>"></script>
<script src="<?php echo base_url('assets/vendor/libs/popper/popper.js'); ?>"></script>
<script src="<?php echo base_url('assets/vendor/js/bootstrap.js') ?>"></script>
<script src="<?php echo base_url('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') ?>"></script>

<script src="<?php echo base_url('assets/vendor/js/menu.js') ?>"></script>
<!-- endbuild -->

<!-- Vendors JS -->

<!-- Main JS -->
<script src="<?php echo base_url('assets/js/main.js') ?>"></script>

<!-- Page JS -->

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
</body>
</html>
