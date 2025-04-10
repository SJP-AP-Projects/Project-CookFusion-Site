<?php
include("./Modeles/ConnexionBD.php");
include("./Modeles/Recettes/M_Recettes.php");
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

}
