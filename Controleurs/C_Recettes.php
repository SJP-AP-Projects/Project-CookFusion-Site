<?php
include("./Modeles/DAO/DAO_Recettes.php");

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
    $sourceDeDonnees = new RecettesDAO();
    $listeRecettes = $sourceDeDonnees->recette();

    include("./vues/Recettes/V_Recette.php");
    break;
  default:
    $sourceDeDonnees = new RecettesDAO();
    $listeRecettes = $sourceDeDonnees->getLesRecettes();

    include("./vues/Recettes/V_ListeRecettes.php");
    break;
}
