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
	<link rel="stylesheet" href="<?php echo base_url('assets/vendor/libs/apex-charts/apex-charts.css') ?>" />
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
					<div class="row">

						<div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
							<div class="card h-100">
								<div class="card-header d-flex align-items-center justify-content-between pb-0">
									<div class="card-title mb-0">
										<h5 class="m-0 me-2">non payer</h5>
										<small class="text-muted">42.82k</small>
									</div>
								</div>
								<div class="card-header d-flex align-items-center justify-content-between pb-0">
									<div class="card-title mb-0">
										<h5 class="m-0 me-2">Payer</h5>
										<small class="text-muted">42.89k</small>
									</div>
								</div>

							</div>
						</div>

						<!-- boucle type voiture -->
						<div class="col-lg-2 col-6 mb-4">
							<div class="card">
								<div class="card-body">
									<div class="card-title d-flex align-items-start justify-content-between">
										<div class="dropdown">
											<button
												class="btn p-0"
												type="button"
												id="cardOpt3"
												data-bs-toggle="dropdown"
												aria-haspopup="true"
												aria-expanded="false"
											>
												<i class="bx bx-dots-vertical-rounded"></i>
											</button>
											<div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
												<a class="dropdown-item" href="">Detail</a>
											</div>
										</div>
									</div>
									<span class="fw-semibold d-block mb-1"><strong>4x4(type)</strong></span>
									<h3 class="card-title mb-2">$12,628</h3>
								</div>
							</div>
						</div>
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
<script src="<?php echo base_url('assets/vendor/libs/apex-charts/apexcharts.js'); ?>"></script>
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
