<?php

class Session {
  private $id;
  private $libelle;
  private $date;
  private $heureDebut;
  private $heureFin;
  private $prix;
  private $nbPlaceMax;
  private $nbPlacePrise;

  public function __construct($id, $libelle, $date, $heureDebut, $heureFin, $prix, $nbPlaceMax,$nbPlacePrise){
    $this->id = $id;
    $this->libelle = $libelle;
    $this->date = $date;
    $this->heureDebut = $heureDebut;
    $this->heureFin =$heureFin;
    $this->prix =$prix;
    $this->nbPlaceMax =$nbPlaceMax;
    $this->nbPlacePrise =$nbPlacePrise;
  }
  public function getId(){
    return $this->id;
  }
  public function getLibelle(){
    return $this->libelle;
  }
  public function getdate(){
    return $this->date;
  }
  public function getheureDebut(){
    return $this->heureDebut;
  }
  public function getheureFin(){
    return $this->heureFin;
  }
  public function gethprix(){
    return $this->prix;
  }
  public function getnbPlaceMax(){
    return $this->nbPlaceMax;
  }
  public function getnbPlacePrise(){
    return $this->nbPlacePrise;
  }
}