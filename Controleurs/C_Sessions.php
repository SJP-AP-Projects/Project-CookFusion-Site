<?php
include("./Modeles/DAO/DAO_Sessions.php");

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
          
          $UneSession = $sourceDeDonnees->Session($id);
          $recettesAssociees = $sourceDeDonnees->getSessionAvecRecettes($id); 
  
          include("./Vues/Sessions/V_Session.php");
          break;
      }
  
}
