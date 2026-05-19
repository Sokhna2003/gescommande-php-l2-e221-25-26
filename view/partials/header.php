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
<body class="bg-gray-50 font-sans antialiased">

  <!-- Navigation -->
  <nav class="bg-white shadow-sm border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex items-center justify-between h-16">
        <div class="flex items-center space-x-8">
          <a href="../index.html" class="text-xl font-bold text-indigo-600">📦 GES-COMMANDE</a>
          <div class="hidden sm:flex space-x-4">
            <a href="../index.html" class="px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:text-indigo-600 hover:bg-gray-100">Dashboard</a>
            <a href="<?=path("client","liste")?>" class="px-3 py-2 rounded-md text-sm font-medium text-indigo-600 bg-indigo-50">Clients</a>
            <a href="<?=path("produit","liste")?>" class="px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:text-indigo-600 hover:bg-gray-100">Produits</a>
            <a href="<?=path("commande","liste")?>" class="px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:text-indigo-600 hover:bg-gray-100">Commandes</a>
          </div>
        </div>
      </div>
    </div>
  </nav>
