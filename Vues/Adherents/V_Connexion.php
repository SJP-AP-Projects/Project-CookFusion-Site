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
      Se Connecter
    </div>

    <form class="space-y-6 mt-6" method="post" action="index.php?controleur=Adherents&action=Connexion">
      <div>
        <label class="block text-center text-gray-700 font-semibold mb-1">Nom</label>
        <input type="text" name='nomUtilisateur' class="w-full border-b-2 border-gray-400 text-center py-2 focus:outline-none" />
      </div>
      <div>
        <label class="block text-center text-gray-700 font-semibold mb-1">Mot De Passe</label>
        <input type="password" name='mdp' class="w-full border-b-2 border-gray-400 text-center py-2 focus:outline-none" />
      </div>
      
      <div class="text-center">
        <button type="submit" class="bg-amber-200 text-black font-semibold px-6 py-2 rounded-full hover:bg-amber-300 transition">
          Se Connecter
        </button>

       
      </div>
    </form>

    <p class="text-center text-sm mt-6">
      <span class="font-semibold">Pas de compte,</span>
      <a href="#" class="text-amber-300 font-semibold hover:underline">Contactez-Nous</a>
    </p>
  </div>
</div>

  </body>
</html>
