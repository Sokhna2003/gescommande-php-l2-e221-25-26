 
  <!-- En-tête -->
  <header class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-8 flex flex-col sm:flex-row sm:items-center sm:justify-between">
    <div>
      <h2 class="text-2xl sm:text-3xl font-bold text-gray-900">Clients</h2>
      <p class="mt-1 text-sm text-gray-500">Gérez votre carnet d'adresses clients.</p>
    </div>
    <a href="<?=path("client","ajout")?>" class="mt-4 sm:mt-0 inline-flex items-center px-4 py-2 bg-indigo-600 text-white text-sm font-medium rounded-lg hover:bg-indigo-700 transition shadow-sm">
      + Ajouter un client
    </a>
  </header>

  <!-- Tableau -->
  <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-6 mb-12">
    <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
      <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Prenom</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nom</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Email</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Téléphone</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Adresse</th>
              <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">Actions</th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
            <?php foreach ($clients as $client): ?>
            <tr class="hover:bg-gray-50">
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700"><?=$client["prenom"]?></td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700"><?=$client["nom"]?></td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600"><?=$client["email"]?></td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600"><?=$client["telephone"]?></td>
              <td class="px-6 py-4 text-sm text-gray-600 max-w-xs truncate"><?=$client["adresse"]?></td>
              <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium space-x-2">
                <a href="<?=path("client","ajout")."&id=".$client["id_client"]?>" class="inline-flex items-center px-3 py-1.5 bg-indigo-50 text-indigo-700 rounded-md hover:bg-indigo-100 text-xs font-medium">Modifier</a>
                <a href="#modal-1" class="inline-flex items-center px-3 py-1.5 bg-red-50 text-red-700 rounded-md hover:bg-red-100 text-xs font-medium">Supprimer</a>
              </td>
            </tr>
            <?php endforeach ?>

          </tbody>
        </table>
      </div>
      <div class="p-4 text-sm text-gray-500 text-center border-t border-gray-100"><?=$total_client?> clients</div>
    </div>
  </section>

  <!-- Modales de suppression (CSS :target) -->
  <!-- <div id="modal-1" class="modal fixed inset-0 z-50 bg-black/40 flex items-center justify-center p-4">
    <div class="bg-white rounded-xl shadow-xl max-w-md w-full p-6">
      <h3 class="text-lg font-bold text-gray-900">Confirmer la suppression</h3>
      <p class="mt-2 text-sm text-gray-600">Êtes-vous sûr de vouloir supprimer "Dupont" ? Cette action est irréversible.</p>
      <div class="mt-6 flex justify-end space-x-3">
        <a href="#" class="px-4 py-2 text-sm font-medium text-gray-700 bg-gray-100 rounded-lg hover:bg-gray-200 transition">Annuler</a>
        <a href="" class="px-4 py-2 text-sm font-medium text-white bg-red-600 rounded-lg hover:bg-red-700 transition">Supprimer</a>
      </div>
    </div>
  </div> -->
