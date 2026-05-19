<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Connexion — Gestion de Commandes</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-indigo-100 to-blue-50 font-sans antialiased min-h-screen flex items-center justify-center p-4">

  <div class="bg-white rounded-2xl shadow-xl border border-gray-200 w-full max-w-md p-8">
    <!-- Logo / Titre -->
    <div class="text-center mb-8">
      <div class="text-4xl mb-2">📦</div>
      <h1 class="text-2xl font-bold text-gray-900">GES-COMMANDE</h1>
      <p class="text-sm text-gray-500 mt-1">Connectez-vous pour accéder au tableau de bord</p>
    </div>

    <!-- TODO: Remplacer action par le contrôleur PHP d'authentification -->
    <form action="#" method="POST" class="space-y-5">
      <!-- Email -->
      <div>
        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Adresse email</label>
        <input type="email" name="email" id="email" required
               class="w-full px-4 py-2.5 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition"
               placeholder="vous@exemple.fr">
      </div>

      <!-- Mot de passe -->
      <div>
        <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Mot de passe</label>
        <input type="password" name="password" id="password" required
               class="w-full px-4 py-2.5 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition"
               placeholder="••••••••">
      </div>

      <!-- Bouton -->
      <button type="submit"
              class="w-full py-2.5 bg-indigo-600 text-white text-sm font-medium rounded-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition shadow-sm">
        Se connecter
      </button>
    </form>

    <!-- Identifiants de démonstration -->
    <p class="mt-6 text-center text-xs text-gray-400">
      Démo : admin@ges-commande.fr / password
    </p>
  </div>

</body>
</html>
