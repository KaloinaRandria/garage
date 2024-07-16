<?php
/**
 * @property CI_Input $input
 * @property CI_Session $session
 * @property Service_model $service_model
 */
	class AccueilAdmin  extends CI_Controller {

		function __construct() {
			parent::__construct();
			$this->load->model('service_model');
		}

		function index() {
			$data['services'] = $this->service_model->getServices();
			$this->load->view('back_office/pages/acceuil', $data);
		}
	}
?>
