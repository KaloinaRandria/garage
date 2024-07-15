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
	}

	function index()
	{
		$data['type'] = $this->type_model->getTypes();
	}
}
