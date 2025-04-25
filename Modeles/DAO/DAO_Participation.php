<?php
include_once("./Modeles/ConnexionBD.php");
include("./Modeles/Sessions/M_Sessions.php");

include_once("./Modeles/Adherents/M_Participation.php");
class ParticipationDAO extends Base{
  public function __construct()
  {
    parent::__construct('webdiz_visiteur', "vZYuri8vU5i1PD");
  }
  public function getParticipation($id){
    $stmt = $this->prepare("
        SELECT 
            SessionCours.numSession, 
            SessionCours.nomSession, 
            SessionCours.dateSession,
            SessionCours.heureDebut, 
            SessionCours.heureFin,
            SessionCours.prix,
            SessionCours.nbPlaceMax, 
            SessionCours.nbPlacePrise,
            Adherent.nomAdherent,
            Adherent.prenomAdherent
        FROM Participer 
        INNER JOIN SessionCours ON SessionCours.numSession = Participer.numSession 
        INNER JOIN Adherent ON Adherent.idAdherent = Participer.id
        WHERE Participer.id = :id
    ");
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();

    $sessions = [];

    while ($ligne = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $sessions[] = new Session(
            $ligne["numSession"],
            $ligne["nomSession"],
            $ligne["dateSession"],
            $ligne["heureDebut"],
            $ligne["heureFin"],
            $ligne["prix"],
            $ligne["nbPlaceMax"],
            $ligne["nbPlacePrise"]
        );
    }

    return $sessions;
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
  public function deleteParticipation($numSession,$id) {
    $stmt = $this->prepare("
        DELETE FROM `Participer` WHERE `numSession` = :idSession and `id` = :idUser
    ");

    $stmt->bindParam(':idSession', $numSession, PDO::PARAM_INT);
    $stmt->bindParam(':idUser', $id, PDO::PARAM_STR);

    return $stmt->execute();
  }

}