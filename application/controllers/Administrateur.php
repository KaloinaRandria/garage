<?php

/**
 * @property CI_Input $input
 * @property CI_Session $session
 * @property Administrateur_model $administrateur_model
 */
class Administrateur extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('administrateur_model');
	}

	function index()
	{
		$data['admin'] = $this->administrateur_model->getAdminById(1);
		
		$this->load->view('back_office/login/login', $data);
	}

	function checkLogAdmin()
	{
		$mail = $this->input->post('mail');
		$password = $this->input->post('password');
		$status = $this->administrateur_model->checkLogAdmin($mail, $password);
		if ($status == true) {
			$this->session->set_userdata('mail', $mail);
			redirect('accueiladmin');
		} else {
			$this->session->set_flashdata('error', 'Mail ou Mot de passe Incorrect');
			$this->load->view('back_office/login/login');
		}
	}

	
}
