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

    <div
      class="flex flex-col justify-center items-center w-[95%]  pb-110 mx-auto border-2 border-solid rounded-sm p-8 mt-7"
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
            <tr>
              <td class="px-6 py-4 border-r-2 border-solid border-t-2">img</td>
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
  </body>
</html>
