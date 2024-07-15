<?php 
	class Administrateur extends CI_Controller {

		function __construct() {
			parent::__construct();
		}

		function index() {

			$this->load->view('back_office/login/login');
		}

		function checkLogAdmin() {
			
		}
	}
?>
