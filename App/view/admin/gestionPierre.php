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
      <h1 class="form-title">Gestion Pierre</h1>
      <table class="table-cat">
        <thead>
          <tr>
            <th>Pierre</th>
            <th>Modifier</th>
            <th>Supprimer</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($tabPierre as $pierre) : ?>
            <tr>
              <td><?= $pierre->getNomPierre() ?></td>
              <td>
                <form method="post" action="index.php?entite=pierre&action=pierre&id=<?= $pierre->getIdPierre(); ?>">
                  <button class="btn-gestionAdmin btn-modifier">Modifier</button>
                </form>
              </td>
              <td>
                <form method="post" action="index.php?entite=pierre&action=delete&id=<?= $pierre->getIdPierre(); ?>">
                  <button class="btn-gestionAdmin btn-supprimer">Supprimer</button>
                </form>
              </td>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>
      <a href="index.php?entite=admin&action=createPierre" class="btn-creeCat">Créer Pierre</a>
      <a href="index.php?entite=admin&action=home" class="retour">Retour</a>
    </div>
  </section>
</header>