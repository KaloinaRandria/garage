<?php
/**
 * @property CI_Input $input
 * @property CI_Session $session
 * @property SuppData_model $suppData_model
 */
class SuppData extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('suppData_model');
	}

	function supprimerDatabase() {
		$this->suppData_model->deleteAll();
		$this->load->view('back_office/pages/dashboard');
	}

}
