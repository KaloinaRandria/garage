<!DOCTYPE html>
<html>

<head>
	<meta charset='utf-8' />
	<title>Admin</title>
	<script src="<?php echo base_url('assets/js/index-global.js') ?>"></script>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/headerAdmin.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/footerAdmin.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/back.css'); ?>">
</head>

<body>

<main>
	<div id='calendar'></div>

	<div id="div_form" class="hidden div_form">
		<h1>Ajouter un rendez vous</h1>
		<form action="" method="" id="form_data">
			<div class="form-input">
				<label for="">Date </label>
				<input type="date" id="date" readonly required>
			</div>
			<div class="form-input">
				<label for="">Heure debut :</label>
				<input type="time" id="heure" required>
			</div>
			<div class="form-input">
				<div class="mb-3 row">
					<label for="defaultSelect" class="form-label">Service</label>
					<div class="col-md-10">
						<select id="defaultSelect" class="form-select" name="service">
							<option></option>
							<?php for ($i = 0; $i < count($services); $i++) { ?>
								<option value="<?= $services[$i]['id'] ?>"><?= $services[$i]['intitule'] ?></option>
							<?php } ?>

						</select>
					</div>
				</div>
			</div>
			<div>
				<button type="button" id="save">Ajouter</button>
				<button type="reset" id="annuler">Annuler</button>
			</div>
		</form>
	</div>
</main>

</body>

<!-- POUR LES DONNEES DU CALENDRIER ET LES FONCTION DE L"INPUT -->
<script src="<?php echo base_url('assets/js/calendar.js')?>"></script>
<script src="<?php echo base_url('assets/js/insert.js')?>"></script>

</html>
