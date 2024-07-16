<!DOCTYPE html>
<html>

<head>
	<meta charset='utf-8' />
	<title>Admin</title>
	<script src="<?php echo base_url('assets/js/index-global.js') ?>"></script>
	<link rel="stylesheet" href="./assets/css/headerAdmin.css">
	<link rel="stylesheet" href="./assets/css/footerAdmin.css">
	<link rel="stylesheet" href="./assets/css/back.css">
</head>

<body>
<header>
	<nav>
		<ul>
			<li><a href="">Logout</a></li>
		</ul>
	</nav>
</header>
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
				<label for="">Name clients :</label>
				<select name="name_clients" id="">
					<option value="">Rabe</option>
					<option value="">Rakoto</option>
					<option value="">Rasoa</option>
				</select>
			</div>
			<div>
				<button type="button" id="save">Ajouter</button>
				<button type="reset" id="annuler">Annuler</button>
			</div>
		</form>
	</div>
</main>
<footer>
	&copy 2024 - Antonio ETU002476 - Hugues ETU002477 - Diva ETU002642
</footer>
</body>

<!-- POUR LES DONNEES DU CALENDRIER ET LES FONCTION DE L"INPUT -->
<script src="<?php echo base_url('assets/js/calendar.js')?>"></script>

</html>
