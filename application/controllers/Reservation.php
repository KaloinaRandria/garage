<?php

/**
 * @property CI_Input $input
 * @property CI_Session $session
 * @property Slot_model $slot_model
 * @property Service_model $service_model
 */
class Reservation extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('slot_model');
		$this->load->model('service_model');
	}

	function index()
	{
		$data['services'] = $this->service_model->getServices();
		$this->load->view('front_office/pages/reservation', $data);
	}

	function verificationSlot()
	{

		$date = $this->input->post('date');
        $heure = $this->input->post('heure'); // Assume the format is H:i
        $service = $this->input->post('service');

        $dateHeure = new DateTime($date);

        // Split $heure into hours and minutes
        list($hours, $minutes) = explode(':', $heure);

        // Create the DateInterval object
        $interval = new DateInterval('PT' . $hours . 'H' . $minutes . 'M');

        // Add the interval to the date
        $dateHeure->add($interval);

        $data = $this->slot_model->queryDynamic($dateHeure->format('Y-m-d H:i:s'), $service);

        if ($data == -1) {
            echo "false";
        } else {
            var_dump($data);
        }
	}
}
