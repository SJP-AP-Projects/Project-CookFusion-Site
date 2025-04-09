<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  </head>
  <body>


    <!-- fin menu -->

    <div
      class="flex flex-col justify-center items-center w-[95%] pb-110 mx-auto border-2 border-solid rounded-sm p-8 mt-7"
    >
      <h1 class="text-3xl font-bold text-center mb-4 mt-8">Nos recettes</h1>

      <!-- tableau Recette -->
      <div
        class="overflow-x-auto rounded-xl shadow-lg border-2 border-solid mt-15"
      >
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
            foreach ($listeRecettes as $uneRecette){
              echo "<tr>";
                echo "<td class='px-6 py-4 border-r-2 border-solid border-t-2'><img class='w-25 h-24'
                  
                  src="
                  . $uneRecette->getImage()."/></td>";
                echo "<td class='px-6 py-4 border-r-2 border-solid border-t-2'>". $uneRecette->getLibelle()."</td>";
                echo "<td class='px-6 py-4 border-r-2 border-solid border-t-2'>". $uneRecette->getDescription()."</td>";
                echo "<td class='border-solid border-t-2'>
    <a href=\"index.php?controleur=Recettes&action=Recette&id=" . $uneRecette->getId() . "\" 
       class='bg-amber-100 text-black font-bold py-2 px-4 rounded-full'>
      Voir la recette
    </a>
  </td>";
            };
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </body>
</html>
