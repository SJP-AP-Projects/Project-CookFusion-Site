<?php
include("./Modeles/ConnexionBD.php");

include("./Modele/Adherents/M_Participation.php");
class ParticipationDAO extends Base{
  public function __construct()
  {
    parent::__construct('webdiz_visiteur', "vZYuri8vU5i1PD");
  }
  public function getParticipation($id){
    $stmt = $this->prepare("SELECT * FROM `Participer` WHERE `id` = :id");
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();

    $uneLigneParticipation = $stmt->fetch();

    if ($uneLigneParticipation) {
        return new Participation(
            $uneLigneParticipation["numSession"],
            $uneLigneParticipation["id"],
            $uneLigneParticipation["Commentaire"],
        );
    }

    return null; 
  }
  public function addParticipation($numSession,$id,$commentaire) {
    $stmt = $this->prepare("
        INSERT INTO `Participer` (`numSession`, `id`, `Commentaire`)
        VALUES (:numSession, :id, :commentaire)
    ");

    $stmt->bindParam(':numSession', $numSession, PDO::PARAM_INT);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->bindParam(':commentaire', $commentaire, PDO::PARAM_STR);

    return $stmt->execute();
  }

}