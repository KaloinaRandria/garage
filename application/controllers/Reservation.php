<?php

/**
 * @property CI_Input $input
 * @property CI_Session $session
 * @property Slot_model $slot_model
 * @property Type_model $type_model
 */
	class Reservation extends CI_Controller {
		function __construct()
		{
			parent::__construct();
			$this->load->model('slot_model');
			$this->load->model('type_model');
		}

		function index() {
			$data['types'] = $this->type_model->getTypes();
			$this->load->view('front_office/pages/reservation' , $data);
		}

		function verificationSlot() {
			
			$date = $this->input->post('date');
			$heure = $this->input->post('heure');
			$type = $this->input->post('type');

			$dateHeure = new DateTime($date);
			$dateHeure->add($heure); 

			

		}		
	}
?>
