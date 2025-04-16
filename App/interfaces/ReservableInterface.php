<?php

namespace App\interfaces;

use App\Classes\Client;
use App\Classes\Reservation;
use DateTime;

interface ReservableInterface
{
    public function reserver(Client $client, DateTime $dateDebut, int $nbJours): Reservation;


}