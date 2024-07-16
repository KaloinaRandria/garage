<?php

/**
 * @property CI_Input $input
 * @property CI_Session $session
 * @property Service_model $service_model
 */

class Service extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('service_model');
	}

	function add()
	{
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$intitule = $this->input->post('intitule');
			$duree = $this->input->post('duree');
			$prix = $this->input->post('prix');

			$data = array (
				'intitule' => $intitule,
				'duree' => $duree,
				'prix' => $prix,
			);

			$status = $this->service_model->insertService($data);
			if($status == true) {
				$this->session->set_flashdata('success', 'Nouveau Service Ajoute');
				redirect();
			} else {
				$this->session->set_flashdata('error', 'Error');
				$this->load->view('back_office/pages/acceuil');
			}
		} else {
			$this->load->view('back_office/pages/acceuil');
		}
	}

	function edit($id) {
		$data['services'] = $this->service_model->getServiceById($id);
		$data['id'] = $id;
		if($_SERVER['REQUEST_METHOD'] == 'POST') {
			$intitule = $this->input->post('intitule');
			$duree = $this->input->post('duree');
			$prix = $this->input->post('prix');

			$data = array (
				'intitule' => $intitule,
				'duree' => $duree,
				'prix' => $prix,
			);

			$status = $this->service_model->updateService($data,$id);
			if($status == true) {
				$this->session->set_flashdata('success', 'Service Modifie');
				redirect(base_url('service/edit/'.$id));
			} else {
				$this->session->set_flashdata('error', 'Error');
				$this->load->view('back_office/pages/acceuil');
			}
		}	
	}
	function ajouterService() {
		$this->load->view('back_office/pages/formulaire_service');
	}

	function listeService() {
		$this->load->view('back_office/pages/acceuil');
	}

	function index()
	{
		$data['services'] = $this->service_model->getServices();
		$this->load->view('back_office/pages/acceuil');
	}
}
