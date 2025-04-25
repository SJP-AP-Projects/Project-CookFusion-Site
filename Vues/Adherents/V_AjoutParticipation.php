<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Confirmation</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body >
    <div class=" text-center">
        <h1 class="text-2xl font-semibold mb-6 text-gray-800">Session ajoutée avec succès</h1>
        <?php
          $utilisateur = $_SESSION['utilisateur'];

        echo'
        <a href="index.php?controleur=Participation&action=ListeParticipations&id='. $utilisateur->getId() .'" class="bg-amber-100 text-black font-bold py-2 px-4 rounded-full hover:bg-amber-200 transition duration-200">
        Voir mes réservations
        </a>';
        ?>
    </div>
</body>
</html>
