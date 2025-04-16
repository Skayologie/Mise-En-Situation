<?php

namespace App\Classes;



use App\interfaces\ReservableInterface;

class Voiture extends Vehicule implements ReservableInterface
{
    private $nbPortes;
    private $transmission;

    public function reserver(Client $client, $dateDebut, int $nbJours): Reservation
    {

    }
    public function getType(): string
    {

    }
    public function afficherDetails()
    {

    }
}