<?php

/**
 * @property CI_Input $input
 * @property CI_Session $session
 * @property User_model $user_model
 */
class User extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		$this->load->library('session');
		$this->load->helper('form');
	}

	function add()
	{
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {


			$username = $this->input->post('username');
			$email = $this->input->post('email');
			$mobile = $this->input->post('mobile');
			$address = $this->input->post('address');

			$data = array(
				'username' => $username,
				'email' => $email,
				'mobile' => $mobile,
				'address' => $address,
			);

			$status = $this->user_model->insertUser($data);
			if ($status == true) {
				$this->session->set_flashdata('success', 'Successfully Added');
				redirect(base_url('user/add'));
			} else {
				$this->session->set_flashdata('error', 'Error');
				$this->load->view('user/add_user');
			}
		} else {
			$this->load->view('user/add_user');
		}
	}

	function edit($id)
	{
		$data['user'] = $this->user_model->getUser($id);
		$data['id'] = $id;
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {


			$username = $this->input->post('username');
			$email = $this->input->post('email');
			$mobile = $this->input->post('mobile');
			$address = $this->input->post('address');

			$data = array(
				'username' => $username,
				'email' => $email,
				'mobile' => $mobile,
				'address' => $address,
			);

			$status = $this->user_model->updateUser($data, $id);
			if ($status == true) {
				$this->session->set_flashdata('success', 'Successfully Updated');
				redirect(base_url('user/edit/' . $id));
			} else {
				$this->session->set_flashdata('error', 'Error');
				$this->load->view('user/edit_user');
			}
		}
		$this->load->view('user/edit_user', $data);
	}

	function delete($id)
	{
		if (is_numeric($id)) {
			$status = $this->user_model->deleteUser($id);
			if ($status == true) {
				$this->session->set_flashdata('deleted', 'Successfully Deleted');
				redirect(base_url('user/index'));
			} else {
				$this->session->set_flashdata('error', 'Error');
				$this->load->view('user/index');
			}
		}
	}

	function index()
	{
		$data['users'] = $this->user_model->getUsers();
		$this->load->view('user/index', $data);
	}
}
