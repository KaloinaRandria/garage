<?php

/**
 * @property CI_Input $input
 * @property CI_Session $session
 * @property Slot_model $slot_model
 * @property Service_model $service_model
 */
	class Reservation extends CI_Controller {
		function __construct()
		{
			parent::__construct();
			$this->load->model('slot_model');
			$this->load->model('service_model');
	
		}

		function index() {
			$data['services'] = $this->service_model->getServices();
			$this->load->view('front_office/pages/reservation' , $data);
		}

		function verificationSlot() {
			
			$date = $this->input->post('date');
			$heure = $this->input->post('heure');
			$service = $this->input->post('service');

			$dateHeure = new DateTime($date);
			$dateHeure->add($heure); 

			$data = $this->slot_model->checkSlotLibre($dateHeure, $service);

			if ($data == null) {
				echo "false";
			} else {
				echo "True";
			}

		}		
	}
?>
