<header class="header-base header-admin">
  <section class="header">
    <div class="bandeau">
      <h6 class="bandeau-text">
        LIVRAISON OFFERTE A PARTIR DE 300 € EN FRANCE MÉTROPOLITAINE
      </h6>
    </div>
    <?php include_once 'App/include/nav.php'; ?>
  </section>
  <section class="section-admin">
    <div class="div-main-admin div-gestion-admin">
      <h2 class="form-title">Gestion Catégorie</h2>
      <table class="table-cat">
        <thead>
          <tr>
            <th>Catégorie</th>
            <th>Modifier</th>
            <th>Supprimer</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($tabCat as $cat) : ?>
            <tr>
              <td><?= $cat->getNomCategorie() ?></td>
              <td>
                <form method="post" action="index.php?entite=categorie&action=categorie&id=<?= $cat->getIdCategorie(); ?>">
                  <button class="btn-gestionAdmin btn-modifier">Modifier</button>
                </form>
              </td>
              <td>
                <form method="post" action="index.php?entite=categorie&action=delete&id=<?= $cat->getIdCategorie(); ?>">
                  <button class="btn-gestionAdmin btn-supprimer">Supprimer</button>
                </form>
              </td>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>
      <a href="index.php?entite=admin&action=createCategorie" class="btn-admin btn-creeCat">Créer catégorie</a>
      <a class="retour" href="index.php?entite=admin&action=home">Retour</a>
    </div>
  </section>
</header>