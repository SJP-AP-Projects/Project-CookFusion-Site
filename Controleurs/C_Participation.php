<?php
include_once("./Modeles/DAO/DAO_Participation.php");


if (isset($_GET['action']))
  $action = filter_var($_GET['action'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
else
  $action = "ListeParticipations";

switch ($action) {

  case 'ListeParticipations':
    $id = $_GET['id'];
    $participationDAO = new ParticipationDAO();
    $listeParticipations = $participationDAO->getParticipation($id);
    include("./Vues/Adherents/V_Adherent.php");
    break;

  case 'AjouterParticipation':
    $participationDAO = new ParticipationDAO();
    if (!empty($_GET)) {
      $id = $_GET['id'];
      $numSession = $_GET['numSession'];
      $commentaire = 'default value';
      var_dump($id,$numSession,$commentaire);

      $participationDAO->addParticipation($numSession, $id, $commentaire);
    }
    include("./Vues/Adherents/V_AjoutParticipation.php");

    break;

    case 'SuprimerParticipation':
      $participationDAO = new ParticipationDAO();
      if (!empty($_GET)) {
        $id = $_GET['id'];
        $numSession = $_GET['numSession'];
        var_dump($id,$numSession);
  
        $participationDAO->deleteParticipation($numSession, $id);
      }
      include("./Vues/Adherents/V_SuprimerParticipation.php");
  
      break;
}
