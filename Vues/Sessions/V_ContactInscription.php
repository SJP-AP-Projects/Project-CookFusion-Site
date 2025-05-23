<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  </head>
  <body>
  <div class="min-h-screen flex items-center justify-center bg-white">
  <div class="w-full max-w-sm border border-black rounded-xl p-6 relative">

    <div class="absolute -top-3 left-4 bg-white px-2 text-sm font-semibold">
      Nous contacter
    </div>

    <form class="space-y-6 mt-6">
      <div>
        <label class="block text-center text-gray-700 font-semibold mb-1">Mail</label>
        <input type="text" class="w-full border-b-2 border-gray-400 text-center py-2 focus:outline-none" />
      </div>
      <div>
        <label class="block text-center text-gray-700 font-semibold mb-1">Nom</label>
        <input type="text" class="w-full border-b-2 border-gray-400 text-center py-2 focus:outline-none" />
      </div>
      <div>
        <label class="block text-center text-gray-700 font-semibold mb-1">Commentaire</label>
        <textarea class="w-full border-b-2 border-gray-400 text-center py-2 focus:outline-none"> </textarea>
      </div>

      <div class="text-center">
        <button type="submit"
          class="bg-amber-200 text-black font-semibold px-6 py-2 rounded-full hover:bg-amber-300 transition">
          Nous contacter
        </button>
      </div>
    </form>

    <p class="text-center text-sm mt-6">
      <span class="font-semibold">déjà un compte,</span>
      <a href="#" class="text-amber-300 font-semibold hover:underline">Connectez-Vous</a>
    </p>
  </div>
</div>

  </body>
</html>
