<?php 

/**
 * @property CI_Input $input
 * @property CI_Session $session
 * @property Client_model $client_model
 */

class Client extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('client_model');
    }

    // Afficher tous les clients
    function index() {
        $data['clients'] = $this->client_model->getClients();
        $this->load->view('client/index', $data);
    }

    // Afficher le formulaire de création de client
    function create() {
        $this->load->view('client/create');
    }

    // Ajouter un nouveau client
    function add() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $numero = $this->input->post('numero');
            $type = $this->input->post('type');

            if (empty($numero) || empty($type)) {
                show_error('Tous les champs doivent être remplis.');
                return;
            }
            
            if ($this->client_model->insertClient($numero, $type)) {
                redirect('client');
            } else {
                show_error('Erreur lors de l\'insertion du client.');
            }
        }
    }

    // Afficher les détails d'un client
    function show($id) {
        $data['client'] = $this->client_model->getClientById($id);
        $this->load->view('client/show', $data);
    }
}
?>
