

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
				<!-- content -->

				<form action="<?=base_url()?>Service/edit/<?=$id?>" method="post">
					<div class="col-5 mt-5 m-auto">
						<!-- HTML5 Inputs -->
						<div class="card mb-4">
							<h5 class="card-header">Service</h5>
							<div class="card-body">
								<div class="mb-3 row">
									<label for="reparation" class="form-label">Reparation</label>
									<div class="col-md-10">
										<input class="form-control" type="text" id="reparation" name="intitule" value="<?= $service->intitule ?>"/>
									</div>
								</div>
								<div class="mb-3 row">
									<label for="duree" class="form-label">Duree</label>
									<div class="col-md-10">
										<input class="form-control" type="time" id="duree" name="duree" value="<?= $service->duree?>"/>
									</div>
								</div>
								<div class="mb-3 row">
									<label for="prix" class="form-label">Prix</label>
									<div class="col-md-10">
										<input class="form-control" type="number" id="prix" name="prix" min="0" value="<?= $service->prix ?>"/>
									</div>
								</div>
								<div class="mb-3 row">
									<div class="col-3 m-auto">
										<a href=""><button class="btn btn-outline-primary">Valider</button></a>
									</div>
									
								</div>
								<div class="mb-3">
									

									<?php if($this->session->flashdata('error')) { ?>
										<div class="alert alert-danger mt-3" role="alert">
											Erreur de l'insertion de Service !
										</div>
									<?php } ?>
								</div>è
							</div>
						</div>
					</div>
				</form>
				<div class="col-4 m-auto">
						<a href="<?=base_url()?>Service/listeService"><button class="btn btn-outline-secondary">Nos Services</button></a>
				</div>

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

