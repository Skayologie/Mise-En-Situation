<?php
namespace App\Classes;

use App\Traits\LoggerTrait;

class Reservation
{
    use LoggerTrait;

    public $vehicule;
    public $client;
    public $dateDebut;
    public $nbJours;
    public $statut;

    public function __construct($client, $vehicule, $dateDebut, $nbJours, $statut)
    {
        $this->client = $client;
        $this->vehicule = $vehicule;
        $this->dateDebut = $dateDebut;
        $this->nbJours = $nbJours;
        $this->statut = $statut;
    }

    public function getVehicule()
    {
        return $this->vehicule;
    }

    public function setVehicule($vehicule): void
    {
        $this->vehicule = $vehicule;
    }

    public function getClient()
    {
        return $this->client;
    }

    public function setClient($client): void
    {
        $this->client = $client;
    }

    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    public function setDateDebut($dateDebut): void
    {
        $this->dateDebut = $dateDebut;
    }

    public function getNbJours()
    {
        return $this->nbJours;
    }

    public function setNbJours($nbJours): void
    {
        $this->nbJours = $nbJours;
    }

    public function getStatut()
    {
        return $this->statut;
    }

    public function setStatut($statut): void
    {
        $this->statut = $statut;
    }

    public function calculerMontant(){

    }
    public function confirmer(){

    }
    public function annuler(){

    }

}