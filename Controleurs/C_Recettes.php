<?php
include_once("./Modeles/DAO/DAO_Recettes.php");

if (isset($_GET['action']))
  $action = filter_var($_GET['action'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
else
  $action = "ListeRecettes";

switch ($action) {

  case 'ListeRecettes':
    $sourceDeDonnees = new RecettesDAO();
    $listeRecettes = $sourceDeDonnees->getLesRecettes();

    include("./vues/Recettes/V_ListeRecettes.php");
    break;

  case 'Recette':
    if (isset($_GET['id'])) {
      $id = intval($_GET['id']);
      $sourceDeDonnees = new RecettesDAO();

      $UneRecette = $sourceDeDonnees->recette($id);

      // Nouvelle ligne → récupération des sessions liées à cette recette
      $lesSessions = $sourceDeDonnees->findSessionsByRecette($id);
      include("./vues/Recettes/V_Recette.php");
      break;
    }
}
