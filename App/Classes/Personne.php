<?php
namespace App\Classes;

abstract class Personne
{
    private $nom;
    private $prenom;
    private $email;

    public function __construct($nom, $prenom, $email)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
    }


    public function getNom()
    {
        return $this->nom;
    }


    public function setNom($nom): void
    {
        $this->nom = $nom;
    }


    public function getPrenom()
    {
        return $this->prenom;
    }


    public function setPrenom($prenom): void
    {
        $this->prenom = $prenom;
    }


    public function getEmail()
    {
        return $this->email;
    }


    public function setEmail($email): void
    {
        $this->email = $email;
    }


    public abstract function afficherProfil();
}