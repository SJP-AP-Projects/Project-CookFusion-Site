<?php
include_once("./Modeles/DAO/DAO_Recettes.php");
if (isset($_GET['action'])) {
  $action = filter_var($_GET['action'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
} else {
  $action = "accueil";
}
switch ($action) {
  case 'accueil':
    include("./Vues/V_Accueil.php");
    break;
}
