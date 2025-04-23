<?php
  class Participation{
    private $nomSession;
    private $dateSession;
    private $numSession;
    public function __construct($nomSession,$dateSession,$numSession){
      $this->nomSession = $nomSession;
      $this->dateSession = $dateSession;
      $this->numSession = $numSession;
    }
    public function getNumSession(){
      return $this->nomSession;
    }
    public function getId(){
      return $this->numSession;
    }
    public function getDateSession(){
      return $this->dateSession;
    }
  }
?>