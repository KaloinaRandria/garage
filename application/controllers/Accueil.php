<?php
	class Accueil extends CI_Controller {

		function __construct() {
			parent::__construct();
		}

		function index() {
			$this->load->view('front_office/pages/acceuil');
		}	
	}
?>
