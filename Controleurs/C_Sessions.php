<?php
include("./Modeles/DAO/DAO_Session.php");

if (isset($_GET['action']))
  $action = filter_var($_GET['action'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
else
  $action = "ListeSessions";

switch ($action) {

  case 'ListeSessions':
    $sourceDeDonnees = new SessionDAO();
    $listeSessions = $sourceDeDonnees->getLesRecettes();
    
    include("./vues/Sessions/V_ListeSessions.php");
    break;
  case 'Session':
    if (isset($_GET['id'])) {
      $id = intval($_GET['id']);
      $sourceDeDonnees = new SessionDAO();
      $UneSession = $sourceDeDonnees->recette($id);
      include("./vues/Sessions/V_Session.php");
      break;
    }
}
