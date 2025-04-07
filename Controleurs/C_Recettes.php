<?php
include("./Modeles/DAO/DAO_Recettes");

if (isset($_GET['action']))
    $action = filter_var($_GET['action'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
else
    $action = "Recettes";
  
switch ($action) {

  case 'Recettes':
      $sourceDeDonnees = new DAO_Recettes();
      $listeRecettes = $sourceDeDonnees->getLesRecettes();

      include("./vues/Recettes/V_ListeRecettes.php");
  break;
  case 'Recette':
    $sourceDeDonnees = new DAO_Recettes();
    $listeRecettes = $sourceDeDonnees->recette();

    include("./vues/Recettes/V_Recette.php");
  break;
  
}