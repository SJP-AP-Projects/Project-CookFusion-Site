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

    
    </div>
      <!-- div 2 -->

    <div class="grid grid-cols-5 grid-rows-3 gap-4 ">
      <div class="col-span-5 rounded-lg shadow-xl pl-4 pr-4 pt-4 pb-4">
        <table class="min-w-full border-collapse bg-white">
          <thead>
            <tr>
              <th
                class="px-6 py-3 text-left text-sm font-semibold border-r-2 border-solid"
              ></th>
              <th
                class="px-6 py-3 text-left text-sm font-semibold border-r-2 border-solid"
              ></th>
              <th
                class="px-6 py-3 text-left text-sm font-semibold border-r-2 border-solid"
              ></th>
              <th class="px-6 py-3 text-left text-sm font-semibold"></th>
            </tr>
          </thead>
          <tbody class="divide-y divide-gray-200"> 
            <?php
            foreach ($listeSessions as $uneSession){
              echo "<tr>";
                echo "<td class='px-6 py-4 border-r-2 border-solid border-t-2'><img class='w-25 h-24'
                  
                  src="
                  . $uneSession->getImage()."/></td>";
                echo "<td class='px-6 py-4 border-r-2 border-solid border-t-2'>". $uneSession->getLibelle()."</td>";
                echo "<td class='px-6 py-4 border-r-2 border-solid border-t-2'>". $uneSession->getDescription()."</td>";
                echo "<td class='border-solid border-t-2'>
    <a href=\"index.php?controleur=Recettes&action=Recette&id=" . $uneSession->getId() . "\" 
       class='bg-amber-100 text-black font-bold py-2 px-4 rounded-full'>
      Voir la recette
    </a>
  </td>";
            };
            ?>
          </tbody>
        </table></div>
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
          <p>15h-16h</p>
          <p>16 rue des frères camors</p>
          <p>15 €</p>
        </div>
        <div class="flex justify-center items-center gap-5 mt-4 mb-4">
          <a href="#" class="bg-amber-100 text-black font-semibold py-2 px-4 rounded-full">
            S'inscrire
          </a>
          <div class="flex items-center text-black font-semibold ">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a4 4 0 00-3-3.87M9 20H4v-2a4 4 0 013-3.87M16 7a4 4 0 11-8 0 4 4 0 018 0z" />
            </svg>
            <span>15/20</span>
          </div>
        </div>

      </div>
    </div>
    

    </div>
  </body>
</html>
