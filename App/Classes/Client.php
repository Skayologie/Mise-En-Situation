<?php
namespace App\Classes;

class Client extends Personne
{
    private $numeroClient = 0;
    private array $reservations ;

    public function getNumeroClient()
    {
        return $this->numeroClient;
    }

    public function setNumeroClient($numeroClient): void
    {
        $this->numeroClient = $numeroClient;
    }

    public function getReservations()
    {
        return $this->reservations;
    }

    public function setReservations($reservations): void
    {
        $this->reservations[] = $reservations;
    }

    public function afficherProfil()//override
    {

    }
    public function ajouterReservation(Reservation $r){
        $this->setReservations($r);
    }
    public function getHistorique(){

    }
}