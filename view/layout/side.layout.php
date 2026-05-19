<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gestion de Commandes — Clients</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .modal { display: none !important; }
    .modal:target { display: flex !important; }
  </style>
</head>
<body class="bg-gray-50 font-sans antialiased flex">

  <!-- Sidebar (Navigation Latérale) -->
  <aside class="fixed inset-y-0 left-0 w-64 bg-white border-r border-gray-200 flex flex-col z-10">
    <div class="h-16 flex items-center px-6 border-b border-gray-100">
      <a href="<?=path("dashboard","dashboard")?>" class="text-xl font-bold text-indigo-600">📦 GES-COMMANDE</a>
    </div>
    
    <nav class="flex-1 px-4 py-6 space-y-2">
      <a href="<?=path("dashboard","dashboard")?>" class="flex items-center px-4 py-2 text-sm font-medium text-gray-600 rounded-lg hover:bg-gray-100 hover:text-indigo-600 transition">
        Dashboard
      </a>
      <a href="<?=path("client","liste")?>" class="flex items-center px-4 py-2 text-sm font-medium text-indigo-600 bg-indigo-50 rounded-lg">
        Clients
      </a>
      <a href="<?=path("produit","liste")?>" class="flex items-center px-4 py-2 text-sm font-medium text-gray-600 rounded-lg hover:bg-gray-100 hover:text-indigo-600 transition">
        Produits
      </a>
      <a href="<?=path("commande","liste")?>" class="flex items-center px-4 py-2 text-sm font-medium text-gray-600 rounded-lg hover:bg-gray-100 hover:text-indigo-600 transition">
        Commandes
      </a>
    </nav>
  </aside>

  <!-- Zone de contenu principal (décalée à droite) -->
  <main class="flex-1 ml-64 min-h-screen">
    
    <!-- En -->
      
        <?= $content ?>

  </main>

</body>
</html>
