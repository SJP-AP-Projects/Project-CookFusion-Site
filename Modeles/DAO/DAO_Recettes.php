<?php
include("./Modeles/ConnexionBD.php");
include("./Modeles/Recettes/M_Recettes.php");
include("./Modeles/Recettes/M_TypeRecettes.php");
class RecettesDAO extends Base
{
    public function __construct()
    {
        parent::__construct('webdiz_visiteur', 'vZYuri8vU5i1PD');
    }
    public function getLesRecettes()
    {


        $resultatRequete = $this->query("SELECT * FROM Recette");
        $tableauRecettes = $resultatRequete->fetchAll();
        $listeRecettes = array();
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
        $resultatRequete = $this->query("SELECT * FROM `Recette` WHERE `numRecette` = :id");
        $resultatRequete->bindParam(':id', $id, PDO::PARAM_INT);
        $resultatRequete->execute();

        $tableauRecettes = $resultatRequete->fetchAll();
        $listeRecettes = array();

        foreach ($tableauRecettes as $uneLigneRecette) {
            $uneRecette = new Recettes(
                $uneLigneRecette["numRecette"],
                $uneLigneRecette["libelleRecette"],
                $uneLigneRecette["description"],
                $uneLigneRecette["image"],
                $uneLigneRecette["numType"]
            );

            $listeRecettes[] = $uneRecette;
        }

        return $listeRecettes;
    }
}
