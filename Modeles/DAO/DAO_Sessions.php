<?php
include_once("./Modeles/ConnexionBD.php");
include("./Modeles/Sessions/M_Sessions.php");
include("./Modeles/Recettes/M_Recettes.php");

class SessionDAO extends Base
{
    public function __construct()
    {
        parent::__construct('webdiz_visiteur', "vZYuri8vU5i1PD");
    }
    public function getLesSessions()
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
                $uneLigneUneSession['heureFin'],
                $uneLigneUneSession['prix'],
                $uneLigneUneSession['nbPlaceMax'],
                $uneLigneUneSession['nbPlacePrise'],
            );

            $listeSession[] = $unObjetSession;
        }

        return $listeSession;
    }
    public function Session($id)
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
                $uneLigneSession['heureFin'],
                $uneLigneSession['prix'],
                $uneLigneSession['nbPlaceMax'],
                $uneLigneSession['nbPlacePrise'],
            );
        }

        return null; // En cas d'ID invalide
    }
    public function getSessionAvecRecettes($id)
    {
        $stmt = $this->prepare("
        SELECT Recette.numRecette, SessionCours.numSession, Recette.libelleRecette, Recette.description, Recette.image, Recette.numType,
               SessionCours.dateSession, SessionCours.heureDebut, SessionCours.heureFin, SessionCours.prix, SessionCours.nbPlaceMax, SessionCours.nbPlacePrise,
               SessionCours.nomSession
        FROM SessionCours
        INNER JOIN Proposer ON Proposer.numSession = SessionCours.numSession
        INNER JOIN Recette ON Recette.numRecette = Proposer.numRecette
        WHERE SessionCours.numSession = :id
    ");

        $stmt->bindParam(':id', $id, PDO::PARAM_STR);
        $stmt->execute();

        $resultats = $stmt->fetchAll();

        if (!$resultats) {
            return null;
        }

        $recettes = array();
        foreach ($resultats as $ligne) {
            $recettes[] = new Recettes(
                $ligne["numRecette"],
                $ligne["libelleRecette"],
                $ligne["description"],
                $ligne["image"],
                $ligne["numType"]
            );
        }

        $session = new Session(
            $resultats[0]["numSession"],
            $resultats[0]["nomSession"],
            $resultats[0]['dateSession'],
            $resultats[0]['heureDebut'],
            $resultats[0]['heureFin'],
            $resultats[0]['prix'],
            $resultats[0]['nbPlaceMax'],
            $resultats[0]['nbPlacePrise']

        );

        return ['session' => $session, 'recettes' => $recettes];
    }
}
