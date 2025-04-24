<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Une session</title>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>


  <div class="w-[95%] mx-auto border-2 border-solid rounded-sm p-8 mt-7 ">
    <!-- div 1 -->

    <div>
      <?php
      foreach ($recettesAssociees as $recette) {
        var_dump($recette->getLibelle());
      }
      ?>

    </div>
    <!-- div 2 -->
    <h1 class="text-3xl font-bold text-center mb-4 mt-8"><?php echo $UneSession->getLibelle(); ?></h1>

    <div class="grid grid-cols-5 grid-rows-3 gap-4 ">
      <div class="col-span-5 rounded-lg shadow-xl pl-4 pr-4 pt-4 pb-4">
        <table class="min-w-full border-collapse bg-white">
          <thead>
            <tr>
              <th class="px-6 py-3 text-left text-sm font-semibold border-r-2 border-solid">Image</th>
              <th class="px-6 py-3 text-left text-sm font-semibold border-r-2 border-solid">Nom de la recette</th>
              <th class="px-6 py-3 text-left text-sm font-semibold border-r-2 border-solid">Description</th>
              <th class="px-6 py-3 text-left text-sm font-semibold">Action</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-gray-200">
            <?php foreach ($recettesAssociees as $recette): ?>
              <tr>
                <td class="px-6 py-4 border-r-2 border-solid border-t-2">
                  <img class="w-25 h-24 object-cover"
                    src="<?= htmlspecialchars($recette->getImage()) ?>"
                    alt="Image recette">
                </td>
                <td class="px-6 py-4 border-r-2 border-solid border-t-2">
                  <?= htmlspecialchars($recette->getLibelle()) ?>
                </td>
                <td class="px-6 py-4 border-r-2 border-solid border-t-2">
                  <?= htmlspecialchars($recette->getDescription()) ?>
                </td>
                <td class="border-solid border-t-2">
                  <a href="index.php?controleur=Recettes&action=Recette&id=<?= $recette->getId() ?>"
                    class="bg-amber-100 text-black font-bold py-2 px-4 rounded-full">
                    Voir la recette
                  </a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>

        </table>
      </div>
      <div class="col-span-3 row-start-2 rounded-lg shadow-xl  pr-4 pl-4 pt-4">
        <p>
          À votre arrivée, vous êtes accueilli(e) chaleureusement par le chef qui vous présente le menu du jour et les produits que vous allez cuisiner. Après une brève introduction, place à la pratique : vous réalisez chaque étape de la recette en suivant les conseils du chef, dans une ambiance conviviale.
          Le cours se termine par un moment de dégustation tous ensemble. Vous repartez avec les recettes, des astuces plein la tête, et parfois même un petit cadeau gourmand !
        </p>
      </div>
      <!-- div 3 -->
      <div class="col-span-2 col-start-4 row-start-2  rounded-lg shadow-xl">
        <div class="pt-4 pl-2">
          <h1 class="text-2xl">Horaire :</h1>
        </div>
        <div class="text-center">
          <p><?php echo $UneSession->getheureDebut(); ?> - <?php echo $UneSession->getheureFin(); ?> </p>
          <p>16 rue des frères camors</p>
          <p><?php echo $UneSession->getprix(); ?> €</p>
        </div>
        <div class="flex justify-center items-center gap-5 mt-4 mb-4">
          <?php 
            if($_SESSION['Connected'] == false){
              echo '
              <a href="" class="pointer-events-none cursor-not-allowed bg-amber-100 text-black font-semibold py-2 px-4 rounded-full">
                S\'inscrire
              </a>
            ';
            }elseif($_SESSION['Connected'] == true){
              $utilisateur = $_SESSION['utilisateur'];
              echo '
                <a href="index.php?controleur=Participation&action=AjouterParticipation&id='.$utilisateur->getId().'&numSession='.$UneSession->getId().'" class="bg-amber-100 text-black font-semibold py-2 px-4 rounded-full">
                  S\'inscrire
                </a>
              ';
            }
          ?>
          
          <div class="flex items-center text-black font-semibold ">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a4 4 0 00-3-3.87M9 20H4v-2a4 4 0 013-3.87M16 7a4 4 0 11-8 0 4 4 0 018 0z" />
            </svg>
            <span><?php echo $UneSession->getnbPlacePrise(); ?>/<?php echo $UneSession->getnbPlaceMax(); ?> </span>
          </div>
        </div>

      </div>
    </div>


  </div>
</body>

</html>