<?php
  class Participation{
    private $numSession;
    private $id;
    private $commentaire;
    public function __construct($numSession,$id,$commentaire){
      $this->numSession = $numSession;
      $this->id = $id;
      $this->commentaire = $commentaire;
    }
    public function getNumSession(){
      return $this->numSession;
    }
    public function getId(){
      return $this->id;
    }
    public function getCommentaire(){
      return $this->commentaire;
    }
  }
?>