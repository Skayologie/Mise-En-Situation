<?php


use App\Classes\Agence;
use App\Classes\Camion;
use App\Classes\Client;
use App\Classes\Moto;
use App\Classes\Reservation;
use App\Classes\Voiture;


$Paris = new Agence("Agence Vic","Paris");
$Casablanca = new Agence("CasaMaison","Casablanca");

$Mercedes = new Voiture(100,"Loajefaf221215","Mercedes","2024","1000505",true);
$CamioRander = new Camion(101,"aefzeffz5e454","Caron","2015","202125",true);
$R6H = new Moto(102,"zefzleflkl5e454","R6","2025","160000",true);

$Paris->ajouterVehicule($Mercedes);
$Paris->ajouterVehicule($CamioRander);
$Paris->ajouterVehicule($R6H);

$Casablanca->ajouterVehicule($Mercedes);
$Casablanca->ajouterVehicule($CamioRander);
$Casablanca->ajouterVehicule($R6H);

$clientSaid = new Client("Said","Narji","SaidNarji@gmail.com");
$clientMohammed = new Client("Mohammed","Dahbi","Mohamemddahbi@gmail.com");

$reservationSaid = new Reservation($clientSaid,$Mercedes,"2025-12-12",15,"reussies");
$reservationMohammed = new Reservation($clientMohammed,$CamioRander,"2025-12-12",15,"refusees");

$clientSaid->ajouterReservation($reservationSaid);
$clientMohammed->ajouterReservation($reservationMohammed);

echo "This is all vehicules you have : ".count($Paris->getVehicules());



