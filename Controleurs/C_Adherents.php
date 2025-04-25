<?php
include_once("./Modeles/DAO/DAO_Adherents.php");

if (isset($_GET['action']))
  $action = filter_var($_GET['action'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
else
  $action = "ListeParticipation";

switch ($action) {
  case 'Connexion':
    $sourceDeDonnees = new AdherentDAO();

    $login = $_POST['nomUtilisateur'];
    $mdp = $_POST['mdp'];
    var_dump($login, $mdp); // Pour vérifier les valeurs envoyées
    $adherent = $sourceDeDonnees->getConnexion($login, $mdp);

    if ($adherent !== null) {
        // Connexion réussie, mettre à jour la session
        $_SESSION['Connected'] = true;
        $_SESSION['utilisateur'] = $adherent; // Stocke l'objet Adherent dans la session

        // Debug : vérifier la session
        var_dump($_SESSION['Connected']);
        var_dump($_SESSION['utilisateur']); // Pour voir l'objet stocké dans la session
    } else {
        echo 'Identifiants incorrects.';
    }

    // Inclure la vue de connexion ou rediriger selon le cas
    include("./vues/Adherents/V_Connexion.php");
    break;

  case 'FormConnexion':
    include("./vues/Adherents/V_Connexion.php");
  break;


  case 'compteAdherent':
      $adherent = $_SESSION['utilisateur'];
      include("./vues/Adherents/V_CompteAdherent.php");
      break;

    
}
