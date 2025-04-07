<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  </head>
  <body>
    <!-- menu -->
    <header class="flex items-center justify-between px-4 py-2 mr-8 ml-8">
      <!-- Logo -->
      <div
        class="bg-orange-200 rounded-lg shadow w-[120px] h-[50px] overflow-hidden"
      >
        <img
          src="../logo.png"
          alt="Logo Rivière Gourmande"
          class="w-full h-full object-cover"
        />
      </div>

      <!-- Menu -->

      <nav
        class="flex space-x-10 bg-white py-2 px-6 rounded-lg shadow-md h-[50px]"
      >
        <a href="#" class="text-gray-800 hover:underline">Accueil</a>
        <a href="#" class="text-gray-800 hover:underline">Nos sessions</a>
        <a href="#" class="font-bold underline text-black">Nos recettes</a>
        <a href="#" class="text-gray-800 hover:underline">Mes reservations</a>
      </nav>

      <!-- User -->
      <div
        class="bg-white px-4 py-2 rounded-lg shadow-md font-semibold text-sm h-[50px]"
      >
        User_01
      </div>
    </header>

    <!-- fin menu -->
    <div class="w-[95%] mx-auto border-2 border-solid rounded-sm p-8">
      <div class="grid grid-cols-5 grid-rows-2 gap-4">
        <!-- div presentation recette  -->
        <div
          class="row-span-2 col-start-4 row-start-1 bg-orange-200 p-4 col-span-2 w-5/6 rounded-lg shadow-xl bg-white"
        >
          <div class="">
            <h1 class="text-center text-2xl">NOM RECETTE</h1>
            <button
              class="mx-auto block bg-red-500 rounded-full text-center px-4"
            >
              type
            </button>
          </div>
          <div class="border-solid border-b-1 mb-6 mt-6"></div>
          <div>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non
              risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing
              nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas
              ligula massa, varius a, semper congue, euismod non, mi. Proin
              porttitor, orci nec nonummy molestie, enim est eleifend mi, non
              fermentum diam nisl sit amet erat. Duis semper. Duis arcu massa,
              scelerisque vitae, consequat in, pretium a, enim. Pellentesque
              congue. Ut in risus volutpat libero pharetra tempor. Cras
              vestibulum bibendum augue. Praesent egestas leo in pede. Praesent
              blandit odio eu enim. Pellentesque sed dui ut augue blandit
              sodales. Vestibulum ante ipsum primis in faucibus orci luctus et
              ultrices posuere cubilia Curae; Aliquam nibh. Mauris ac mauris sed
              pede pellentesque fermentum. Maecenas adipiscing ante non diam
              sodales hendrerit.
            </p>
          </div>
        </div>
        <!-- div image de la recette  -->
        <div
          class="col-start-1 row-start-1 bg-white col-span-3 rounded-lg shadow-xl overflow-hidden"
        >
          <img
            src="https://img.freepik.com/photos-gratuite/vue-dessus-ingredients-alimentaires-bol-soupe-aux-legumes-cahier_23-2148834720.jpg?t=st=1744009986~exp=1744013586~hmac=3a4f9b18f03040fbf72a9794989305f067630210fac5a7b43e310a7c63f7afee&w=1380"
            alt="Image recette"
            class="w-full h-full object-cover"
          />
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
