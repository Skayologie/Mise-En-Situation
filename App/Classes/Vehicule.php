<?php
namespace App\Classes;


abstract class Vehicule
{
    private $id ;
    private $immatriculation ;
    private $marque ;
    private $modele ;
    private $prixJour ;
    private $disponible ;

    public function __construct($id, $immatriculation, $marque, $modele, $prixJour, $disponible)
    {
        $this->id = $id;
        $this->immatriculation = $immatriculation;
        $this->marque = $marque;
        $this->modele = $modele;
        $this->prixJour = $prixJour;
        $this->disponible = $disponible;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getImmatriculation()
    {
        return $this->immatriculation;
    }

    public function getMarque()
    {
        return $this->marque;
    }

    public function getModele()
    {
        return $this->modele;
    }

    public function getPrixJour()
    {
        return $this->prixJour;
    }

    public function getDisponible()
    {
        return $this->disponible;
    }

    public abstract function afficherDetails();
    public abstract function getType(): string;
    public function calculerPrix(int $jours):float
    {

    }
    public function estDisponible(): bool{

    }
}