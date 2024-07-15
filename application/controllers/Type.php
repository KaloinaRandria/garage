<?php

/**
 * @property CI_Input $input
 * @property CI_Session $session
 * @property Type_model $type_model
 */
class Type extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('type_model');
	}

	function index()
	{
		$data['types'] = $this->type_model->getTypes();
		$this->load->view('front_office/login/login' , $data);
	}
}
