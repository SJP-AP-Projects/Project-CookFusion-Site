<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

</head>

<body>
  <!-- menu -->
  <header class="flex items-center justify-between px-4 py-2 mr-8 ml-8">
    <!-- Logo -->
    <div class="bg-orange-200 rounded-lg shadow w-[120px] h-[50px] overflow-hidden">
      <img src="./Vues/logo.png" alt="Logo Rivière Gourmande" class="w-full h-full object-cover" />
    </div>

    <!-- Menu -->

    <nav class="flex space-x-10 bg-white py-2 px-6 rounded-lg shadow-md h-[50px]">
      <a href="index.php?controleur=General&action=accueil" class="text-gray-800 hover:underline">Accueil</a>
      <a href="index.php?controleur=Sessions&action=ListeSessions" class="text-gray-800 hover:underline">Nos sessions</a>
      <a href="index.php?controleur=Recettes&action=ListeRecettes" class="text-gray-800 hover:underline">Nos recettes</a>
      <a href="#" class="text-gray-800 hover:underline">Mes reservations</a>
    </nav>

    <!-- User -->
    <div class="bg-white px-4 py-2 rounded-lg shadow-md font-semibold text-sm h-[50px]">
      User_01
    </div>
  </header>

  <?php
  if (isset($_GET['controleur'])) {
    $controleur = filter_var($_GET['controleur'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  } else {
    $controleur = "General";
  }

  switch ($controleur) {
    case 'General':
      include("./Controleurs/C_GestionGeneral.php");
      break;
    case 'Recettes':
      include("./Controleurs/C_Recettes.php");
      break;
    case 'Sessions':
        include("./Controleurs/C_Sessions.php");
        break;
    default:
      // Fallback si le contrôleur n'est pas reconnu
      include("./Controleurs/C_GestionGeneral.php");
      break;
  }
  ?>

</body>

</html>