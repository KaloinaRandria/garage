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
				redirect('Service');
			} else {
				$this->session->set_flashdata('error', 'Error');
				$this->load->view('back_office/pages/acceuil');
			}
		} else {
			$this->load->view('back_office/pages/acceuil');
		}
	}

	function edit($id) {
		$data['service'] = $this->service_model->getServiceById($id);
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
				$data['services']=$this->service_model->getServices();
				$this->load->view('back_office/pages/acceuil',$data);
			} else {
				$this->session->set_flashdata('error', 'Error');
				$this->load->view('back_office/pages/acceuil');
			}
		}
		$this->load->view('back_office/pages/formulaire_service_update',$data);	
	}

	function delete($id) {
		if(is_numeric($id)) {
			$status = $this->service_model->deleteService($id);
			if ($status == true) {
				$this->session->set_flashdata('deleted', 'Service Supprimer');
				$data['services'] = $this->service_model->getServices();
				$this->load->view('back_office/pages/acceuil',$data);

			} else {
				$this->session->set_flashdata('error', 'Erreur de la suppression du service');
                $this->load->view('back_office/pages/acceuil');
			}
		}
	}
	function ajouterService() {
		$this->load->view('back_office/pages/formulaire_service');
	}

	function listeService() {
		$data['services']=$this->service_model->getServices();
		// redirect('AccueilAdmin');
		$this->load->view('back_office/pages/acceuil',$data);
	}

	function index()
	{
		$data['services'] = $this->service_model->getServices();
		// redirect('AccueilAdmin');
		$this->load->view('back_office/pages/acceuil',$data);

	}

	function goToFormEdit($id_service){
		$this->load->view('back_office/pages/formulaire_service_update/'.$id_service);

	}
}
