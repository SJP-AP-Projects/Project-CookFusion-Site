<?php
include("./Modeles/ConnexionBD.php");
include("./Modele/Adherents/M_Adherents.php");
include("./Modele/Adherents/M_Participation.php");
class AdherentDAO extends Base{
  public function __construct()
  {
    parent::__construct('webdiz_visiteur', "vZYuri8vU5i1PD");
  }
  public function getAdherentById($id){
    $stmt = $this->prepare("SELECT * FROM `Adherent` WHERE `idAdherent` = :id");
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();

    $uneLigneAdherents = $stmt->fetch();

    if ($uneLigneAdherents) {
        return new Adherents(
            $uneLigneAdherents["idAdherent"],
            $uneLigneAdherents["nomAdherent"],
            $uneLigneAdherents["prenomAdherent"],
            $uneLigneAdherents["loginAdherent"],
            $uneLigneAdherents["mdpAdherent"],
            $uneLigneAdherents["mailAdherent"],
            $uneLigneAdherents["roleAdherent"]
        );
    }

    return null; 

  }
  public function ModificationAdherentById($id, $nom, $prenom, $login, $mdp, $mail) {
    $stmt = $this->prepare("
        UPDATE `Adherent` 
        SET 
            `nomAdherent` = :nom,
            `prenomAdherent` = :prenom,
            `loginAdherent` = :login,
            `mdpAdherent` = :mdp,
            `mailAdherent` = :mail
        WHERE `idAdherent` = :id
    ");

    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->bindParam(':nom', $nom, PDO::PARAM_STR);
    $stmt->bindParam(':prenom', $prenom, PDO::PARAM_STR);
    $stmt->bindParam(':login', $login, PDO::PARAM_STR);
    $stmt->bindParam(':mdp', $mdp, PDO::PARAM_STR);
    $stmt->bindParam(':mail', $mail, PDO::PARAM_STR);


    return $stmt->execute(); 
  }

  public function getConnexion($login, $mdp) {
    $stmt = $this->prepare("
        SELECT * FROM `Adherent`
        WHERE `loginAdherent` = :login AND `mdpAdherent` = :mdp
    ");

    $stmt->bindParam(':login', $login, PDO::PARAM_STR);
    $stmt->bindParam(':mdp', $mdp, PDO::PARAM_STR);

    $stmt->execute();
    $ligne = $stmt->fetch();

    if ($ligne) {
        return new Adherents(
            $ligne["idAdherent"],
            $ligne["nomAdherent"],
            $ligne["prenomAdherent"],
            $ligne["loginAdherent"],
            $ligne["mdpAdherent"],
            $ligne["mailAdherent"],
            $ligne["roleAdherent"]
        );
    }

    return null;
}

}