<?php 

	/**
 * @property CI_Input $input
 * @property CI_Session $session
 * @property Service_model $service_model
 */

	class Service extends CI_Controller {

		function __construct() {
			parent::__construct();
			$this->load->model('service_model');
		}

		function add() {
			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				$data = array(
					
				);
			}
		}

		function index() {
			$data['services'] = $this->service_model->getServices();
            $this->load->view('service/index', $data);
		}
	}
?>
