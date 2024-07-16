<?php
/**
 * @property CI_Input $input
 * @property CI_Session $session
 * @property Dashboard_model $Dashboard_model
 */
class Dashboard extends CI_Controller
{
	public function index()
	{
		$this->load->model('Dashboard_model');

		$date = date('Y-m-d'); // Vous pouvez remplacer cela par la date souhaitée
		$data['total_paye'] = $this->Dashboard_model->getChiffreInDay($date);
		$data['total_non_paye'] = $this->Dashboard_model->getChiffreNonPayeInDay($date);

		$this->load->view('back_office/pages/dashboard', $data);
	}
}
