<?php
include("./Modeles/ConnexionBD.php");
include("./Modeles/Recettes/M_Recettes.php");
include("./Modeles/Sessions/M_Sessions.php");
include("./Modeles/Recettes/M_TypeRecettes.php");
class RecettesDAO extends Base
{
    public function __construct()
    {
        parent::__construct('webdiz_visiteur', "vZYuri8vU5i1PD");
    }
    public function getLesRecettes()
    {


        $resultatRequete = $this->query("SELECT * FROM Recette");
        $tableauRecettes = $resultatRequete->fetchAll();
        $listeRecettes = array();
        // var_dump($tableauRecettes);
        foreach ($tableauRecettes as $uneLigneUneRecettes) {

            $unObjetCompetence = new Recettes(
                $uneLigneUneRecettes["numRecette"],
                $uneLigneUneRecettes["libelleRecette"],
                $uneLigneUneRecettes['description'],
                $uneLigneUneRecettes['image'],
                $uneLigneUneRecettes['numType']
            );

            $listeRecettes[] = $unObjetCompetence;
        }

        return $listeRecettes;
    }
    public function recette($id)
    {
        $stmt = $this->prepare("SELECT * FROM `Recette` WHERE `numRecette` = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        $uneLigneRecette = $stmt->fetch();

        if ($uneLigneRecette) {
            return new Recettes(
                $uneLigneRecette["numRecette"],
                $uneLigneRecette["libelleRecette"],
                $uneLigneRecette["description"],
                $uneLigneRecette["image"],
                $uneLigneRecette["numType"]
            );
        }

        return null; // En cas d'ID invalide
    }

    public function findSessionsByRecette($numRecette)
    {
        $sql = "
    SELECT s.numSession, s.nomSession, s.dateSession, s.heureDebut, s.heureFin, s.prix, s.nbPlaceMax, s.nbPlacePrise
    FROM SessionCours s
    INNER JOIN Proposer p ON s.numSession = p.numSession
    WHERE p.numRecette = :numRecette
    ";

        $stmt = $this->prepare($sql);
        $stmt->bindParam(':numRecette', $numRecette, PDO::PARAM_INT);
        $stmt->execute();

        $sessionsData = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $sessions = [];

        foreach ($sessionsData as $sessionData) {
            $sessions[] = new Session(
                $sessionData['numSession'],
                $sessionData['nomSession'],
                $sessionData['dateSession'],
                $sessionData['heureDebut'],
                $sessionData['heureFin'],
                $sessionData['prix'],
                $sessionData['nbPlaceMax'],
                $sessionData['nbPlacePrise']
            );
        }

        return $sessions;
    }
}
