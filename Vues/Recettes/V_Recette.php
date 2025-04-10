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
    <div class="w-[95%] mx-auto border-2 border-solid rounded-sm p-8 mt-7">
      <div class="grid grid-cols-5 grid-rows-2 gap-4">
        <!-- div presentation recette  -->
        <div
          class="row-span-2 col-start-4 row-start-1 bg-orange-200 p-4 col-span-2 w-5/6 rounded-lg shadow-xl bg-white"
        >
          <div class="">

            <h1 class="text-center text-2xl"><?php echo $UneRecette->getLibelle();?></h1>
            <button
              class="mx-auto block bg-red-500 rounded-full text-center px-4"
            >
              type
            </button>
          </div>
          <div class="border-solid border-b-1 mb-6 mt-6"></div>
          <div>
            <p>
            <?php echo $UneRecette->getDescription();?>
             
            </p>
          </div>
        </div>
        <!-- div image de la recette  -->
        <div
          class="col-start-1 row-start-1 bg-white col-span-3 rounded-lg shadow-xl overflow-hidden"
        >
        <?php 
        
   if ($UneRecette !== null && method_exists($UneRecette, 'getImage')) {
       echo '<img src="' . $UneRecette->getImage() . '" />';
   } else {
       echo 'Image non disponible';
   }
   ?>
        </div>
        <!-- div Voir les cours associés à cette recette  -->
        <div
          class="row-start-2 bg-white col-span-3 pl-5 pr-5 rounded-lg shadow-xl"
        >
          <div>
            <h1 class="text-2xl">Voir les cours associés à cette recette :</h1>
          </div>
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
                <tr>
                  <td class="px-6 py-4 border-r-2 border-solid border-t-2">
                    img
                  </td>
                  <td class="px-6 py-4 border-r-2 border-solid border-t-2">
                    libelleType
                  </td>
                  <td class="px-6 py-4 border-r-2 border-solid border-t-2">
                    nom de la recette
                  </td>
                  <td class="border-solid border-t-2">
                    <button
                      class="bg-amber-100 text-black font-bold py-2 px-4 rounded-full"
                    >
                      Voir la recette
                    </button>
                  </td>
                </tr>
                <tr>
                  <td class="px-6 py-4 border-r-2 border-solid">img</td>
                  <td class="px-6 py-4 border-r-2 border-solid">libelleType</td>
                  <td class="px-6 py-4 border-r-2 border-solid">
                    nom de la recette
                  </td>
                  <td>
                    <button
                      class="bg-amber-100 text-black font-bold py-2 px-4 rounded-full"
                    >
                      Voir la recette
                    </button>
                  </td>
                </tr>
                <tr>
                  <td class="px-6 py-4 border-r-2 border-solid">img</td>
                  <td class="px-6 py-4 border-r-2 border-solid">libelleType</td>
                  <td class="px-6 py-4 border-r-2 border-solid">
                    nom de la recette
                  </td>
                  <td>
                    <button
                      class="bg-amber-100 text-black font-bold py-2 px-4 rounded-full"
                    >
                      Voir la recette
                    </button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <!-- tableau Recette -->
    </div>
  </body>
</html>
