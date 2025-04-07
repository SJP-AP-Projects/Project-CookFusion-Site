<?php

class Type {
  private $id;
  private $libelleType;

  public function _construct($id, $libelleType){
    $this->id = $id;
    $this->libelleType = $libelleType;

  }
  public function getId(){
    return $this->id;
  }
  public function getLibelle(){
    return $this->libelleRecette;
  }
}