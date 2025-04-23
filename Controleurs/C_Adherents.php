<?php
include("./Modeles/DAO/DAO_Recettes.php");

if (isset($_GET['action']))
  $action = filter_var($_GET['action'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
else
  $action = "ListeParticipation";

switch ($action) {
  case 'Connexion':
    $sourceDeDonnees = new AdherentDAO();

    $login = $_POST['nomUtilisateur'];
    $mdp = $_POST['mdp'];

    $adherent = $sourceDeDonnees->getConnexion($login, $mdp);

    $_SESSION['utilisateur'] = $adherent;

    include("./vues/V_Accueil.php");
  break;


  case 'compteAdherent':
      $adherent = $_SESSION['utilisateur'];
      include("./vues/Adherents/V_CompteAdherent.php");
      break;

    
}
