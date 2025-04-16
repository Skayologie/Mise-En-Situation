<?php
namespace App\Classes;

use App\Traits\LoggerTrait;

class Agence
{
    use LoggerTrait;
    private string $nom;
    private string $ville;
    private array $vehicules ;
    private array $clients ;

    public function __construct(string $nom, string $ville)
    {
        $this->nom = $nom;
        $this->ville = $ville;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    public function getVille(): string
    {
        return $this->ville;
    }

    public function setVille(string $ville): void
    {
        $this->ville = $ville;
    }

    public function getVehicules(): array
    {
        return $this->vehicules;
    }

    public function setVehicules($vehicules): void
    {
        $this->vehicules[] = $vehicules;
    }

    public function getClients(): array
    {
        return $this->clients;
    }

    public function setClients(array $clients): void
    {
        $this->clients = $clients;
    }

    public function ajouterVehicule(Vehicule $v){
        $this->setVehicules((array)$v);
    }
    public function rechercherVehiculeDisponible(string $type)
    {

    }
    public function enregistrerClient(Client $c)
    {

    }
    public function faireReservation(Client $client, Vehicule $v, DateTime $dateDebut, int $nbJours): Reservation{

    }

}