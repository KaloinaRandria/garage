<?php

/**
 * @property CI_Input $input
 * @property CI_Session $session
 * @property Slot_model $slot_model
 * @property Service_model $service_model
 * @property Client_model $client_model
 * @property Reservation_model $reservation_model
 * @property Paiement_model $paiement_model
 */
class Reservation extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('slot_model');
		$this->load->model('service_model');
		$this->load->model('client_model');
        $this->load->model('reservation_model'); 
        $this->load->model('paiement_model'); 
        $this->load->library('DevisPdf'); 


	}

	function index()
	{
		$data['services'] = $this->service_model->getServices();
		$this->load->view('front_office/pages/reservation', $data);
	}

    function devis()
    {
        $data['reservations']=$this->reservation_model->getReservations();
        $this->load->view('back_office/pages/devis', $data);

    }

    function addPaiement($id_resa)
    {
        $date = $this->input->post('date');
        $paiement_data = array(
            'id_reservation' => $id_resa,
            'date_paiement' => $date
        );
        $this->paiement_model->insertPaiement($paiement_data);
        $data['reservations']=$this->reservation_model->getReservations();
        $this->load->view('back_office/pages/devis', $data);
    }

	function verificationSlot()
	{

		$date = $this->input->post('date');
        $heure = $this->input->post('heure'); // Assume the format is H:i
        $id_service = $this->input->post('service');

        $dateHeure = new DateTime($date);
        $dateDebut = $dateHeure->format('Y-m-d H:i:s');
        list($hours, $minutes) = explode(':', $heure);

        $interval = new DateInterval('PT' . $hours . 'H' . $minutes . 'M');

        $dateHeure->add($interval);

        $data = $this->slot_model->queryDynamic($dateDebut, $id_service);
        $dateFinObject = $this->slot_model->searchDateFin($date, $id_service);

        $dateFin = $dateFinObject->format('Y-m-d H:i:s');
        $numero = $this->session->userdata('numero');
        $client = $this->client_model->getClientByNum($numero);

        if($data == -1){
            $this->session->set_flashdata('error','Aucun slot disponible pour la date et l heure demandee');
            redirect('Reservation');
        }
        else 
        {
            // var_dump($data);
            $resa_data = array(
                'date_heure_debut'=>$dateDebut,
                'date_heure_fin'=>$dateFin,
                'id_service'=>$id_service,
                'id_slot'=>$data,
                'id_client'=>$client->id

            );
            // var_dump($resa_data);
            $this->reservation_model->addReservation($resa_data);
            $slot = $this->slot_model->getSlotById($data);
            $service = $this->service_model->getServiceById($id_service);
            $client = $this->client_model->getClientByNum($numero);

            // var_dump($slot);
            // var_dump($service);
            // var_dump($client);


            $pdf = new DevisPdf();
            $pdf->createDevisPdf($client, $slot, $service, $resa_data);



        }
	}


}
