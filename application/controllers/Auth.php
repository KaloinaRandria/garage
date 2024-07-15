<?php

/**
 * @property CI_Input $input
 * @property CI_Session $session
 * @property Client_model $client_model
 */
class Auth extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('client_model');  
	}

	function index()
	{
		$this->load->view('front_office/login/login');
	}

	function checkLogin()
	{
		$numero = $this->input->post('numero');
		$type = $this->input->post('type');
		$status = $this->client_model->checkLogin($numero, $type); 
		if ($status == true) {
			$this->session->set_userdata('numero', $numero);
			$this->session->set_userdata('type', $type);
			redirect('front_office/pages/accueil');
		} else {
			$this->session->set_flashdata('error', 'Immatriculation Invalide ou Type Invalide');
			redirect('front_office/login/login');
		}
	}
}
