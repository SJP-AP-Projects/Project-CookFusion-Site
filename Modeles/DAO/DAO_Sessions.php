<?php
include("./Modeles/ConnexionBD.php");
include("./Modeles/Recettes/M_Session.php");

class SessionDAO extends Base
{
    public function __construct()
    {
        parent::__construct('webdiz_visiteur', "vZYuri8vU5i1PD");
    }
    public function getLesRecettes()
    {


        $resultatRequete = $this->query("SELECT * FROM SessionCours");
        $tableauSession = $resultatRequete->fetchAll();
        $listeSession = array();
        // var_dump($tableauRecettes);
        foreach ($tableauSession as $uneLigneUneSession) {

            $unObjetSession = new Session(
                $uneLigneUneSession["numSession"],
                $uneLigneUneSession["nomSession"],
                $uneLigneUneSession['dateSession'],
                $uneLigneUneSession['heureDebut'],
                $uneLigneUneSession['prix'],
                $uneLigneUneSession['nbPlaceMax'],
                $uneLigneUneSession['nbPlacePrise'],
            );

            $listeSession[] = $unObjetSession;
            
        }

        return $listeSession;
    }
    public function recette($id)
{
    $stmt = $this->prepare("SELECT * FROM `SessionCours` WHERE `numSession` = :id");
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();

    $uneLigneSession = $stmt->fetch();

    if ($uneLigneSession) {
        return new Session(
          $uneLigneSession["numSession"],
          $uneLigneSession["nomSession"],
          $uneLigneSession['dateSession'],
          $uneLigneSession['heureDebut'],
          $uneLigneSession['prix'],
          $uneLigneSession['nbPlaceMax'],
          $uneLigneSession['nbPlacePrise'],
        );
    }

    return null; // En cas d'ID invalide
}

}
