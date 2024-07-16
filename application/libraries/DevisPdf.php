<?php
require('fpdf.php');

class DevisPdf extends FPDF
{    
    // Constructeur
    function __construct()
    {
        parent::__construct();
    }

    // En-tête
    function Header()
    {
        
        $this->SetFont('helvetica', '', 13);
        $this->Cell(100);
        $this->Cell(100, 10, 'Devis de reservation', 0, 0, 'C');
        $this->Ln(20);
        $this->Cell(45);
    }

    function Footer()
    {
        $this->SetY(-11);
        $this->SetFont('helvetica', '', 11);
        $this->Cell(100);
       
    }

    // function Paragraphe($client, $slot, $service, $resa_data)
    // {
    //     $this->SetFont('helvetica', '', 12);
    //     $this->Cell(0, 10, '', 0, 1);
    //     $this->Cell(0, 10, 'Numero: ' . $client->numero, 0, 1);
    //     $this->Cell(0, 10, 'Type: ' . $client->id_type, 0, 1);

    //     $this->Ln(10);

    //     $this->SetFont('helvetica', '', 12);
    //     $this->Cell(0, 10, 'Details de la reservation', 0, 1);
    //     $this->Cell(0, 10, 'Date debut: ' . $resa_data['date_heure_debut'], 0, 1);
    //     $this->Cell(0, 10, 'Date fin: ' . $resa_data['date_heure_fin'], 0, 1);

    //     $this->Ln(10);
    //     $this->SetFont('helvetica', '', 12);
    //     $this->Cell(0, 10, 'Service', 0, 1);
    //     $this->Cell(0, 10, 'Intitule: ' . $service->intitule, 0, 1);
    //     $this->Cell(0, 10, 'Duree: ' . $service->duree, 0, 1);
    //     $this->Cell(0, 10, 'Prix: ' . $service->prix, 0, 1);

    //     $this->Ln(10);

    //     $this->SetFont('helvetica', '', 12);
    //     $this->Cell(0, 10, 'Slot: ' . $slot->intitule, 0, 1);

    //     $this->Ln(10);
    // }

    function Paragraphe($client, $slot, $resa_data)
    {
        $this->SetFont('helvetica', '', 12);
        $this->Cell(0, 10, '', 0, 1);
        $this->Cell(0, 10, 'Numero: ' . $client->numero, 0, 1);
        $this->Cell(0, 10, 'Type: ' . $client->id_type, 0, 1);

        $this->Ln(10);

        $this->SetFont('helvetica', '', 12);
        $this->Cell(0, 10, 'Details de la reservation', 0, 1);
        $this->Cell(0, 10, 'Date debut: ' . $resa_data['date_heure_debut'], 0, 1);
        $this->Cell(0, 10, 'Date fin: ' . $resa_data['date_heure_fin'], 0, 1);

        $this->Ln(10);
        $this->SetFont('helvetica', '', 12);
        $this->Cell(0, 10, 'Service', 0, 1);
        $this->Cell(0, 10, 'Intitule: ' . $resa_data['intitule_service'], 0, 1);
        $this->Cell(0, 10, 'Prix: ' . $resa_data['prix'], 0, 1);

        $this->Ln(10);

        $this->SetFont('helvetica', '', 12);
        $this->Cell(0, 10, 'Slot: ' . $slot->intitule, 0, 1);

        $this->Ln(10);
    }

    // function createDevisPdf($client, $slot, $service, $resa_data)
    // {
    //     $this->AddPage();
    //     $this->Paragraphe($client, $slot, $service, $resa_data);
    //     $this->Output('I', 'devis_reservation.pdf'); 
    // }

    function createDevisPdf($client, $slot,$resa_data)
    {
        $this->AddPage();
        $this->Paragraphe($client, $slot,$resa_data);
        $this->Output('I', 'devis_reservation.pdf'); 
    }
}
