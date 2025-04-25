<?php
class Adherents{
  private $id;
  private $nom;
  private $prenom;
  private $login;
  private $mdp;
  private $mail;
  private $role;
  public function __construct($id,$nom,$prenom,$login,$mdp,$mail,$role){
    $this->id=$id;
    $this->nom=$nom;
    $this->prenom=$prenom;
    $this->login=$login;
    $this->mdp=$mdp;
    $this->mail=$mail;
    $this->role=$role;
  }
  public function getId(){
    return $this->id;
  }
  public function getNom(){
    return $this->nom;
  }
  public function getPrenom(){
    return $this->prenom;
  }
  public function getLogin(){
    return $this->login;
  }
  public function getMdp(){
    return $this->mdp;
  }
  public function getMail(){
    return $this->mail;
  }
  public function getRole(){
    return $this->role;
  }
}
?>