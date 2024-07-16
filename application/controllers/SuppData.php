<?php
/**
 * @property CI_Input $input
 * @property CI_Session $session
 * @property SuppData_model $suppData_model
 * @property Administrateur_model $administrateur_model
 */
class SuppData extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('suppData_model');
		$this->load->model('administrateur_model');
	}

	function supprimerDatabase() {
		$this->suppData_model->deleteAll();
		$data['admin'] = $this->administrateur_model->getAdminById(1);
		$this->load->view('back_office/login/login',$data);
	}

}
