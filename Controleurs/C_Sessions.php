<?php
include_once("./Modeles/DAO/DAO_Sessions.php");

if (isset($_GET['action']))
  $action = filter_var($_GET['action'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
else
  $action = "ListeSessions";

switch ($action) {

  case 'ListeSessions':
    $sourceDeDonnees = new SessionDAO();
    $listeSessions = $sourceDeDonnees->getLesSessions();

    include("./Vues/Sessions/V_ListeSessions.php");
    break;
  case 'Session':
    if (isset($_GET['id'])) {
      $id = intval($_GET['id']);
      $sourceDeDonnees = new SessionDAO();

      $data = $sourceDeDonnees->getSessionAvecRecettes($id);
      $UneSession = $data['session'];
      $recettesAssociees = $data['recettes'];

      include("./Vues/Sessions/V_Session.php");
      break;
    }
}
