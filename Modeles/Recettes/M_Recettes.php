<?php

class Recettes {
  private $id;
  private $libelleRecette;
  private $description;
  private $image;
  private $numType;

  public function _construct($id, $libelleRecette, $description, $image, $numType){
    $this->id = $id;
    $this->libelleRecette = $libelleRecette;
    $this->description = $description;
    $this->image = $image;
    $this->numType =$numType;
  }
  public function getId(){
    return $this->id;
  }
  public function getLibelle(){
    return $this->libelleRecette;
  }
  public function getDescription(){
    return $this->description;
  }
  public function getImage(){
    return $this->image;
  }
  public function getNumType(){
    return $this->description;
  }
}