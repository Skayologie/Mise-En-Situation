<?php
namespace App\Classes;


use App\interfaces\ReservableInterface;
use DateTime;

class Moto extends Vehicule  implements ReservableInterface
{
    private $cylindree;

    public function reserver(Client $client, DateTime $dateDebut, int $nbJours): Reservation
    {

    }
    public function getType(): string
    {

    }
    public function afficherDetails()
    {

    }
}