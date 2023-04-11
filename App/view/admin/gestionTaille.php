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
      <h2 class="form-title">Gestion Taille</h2>
      <table class="table-cat">
        <thead>
          <tr>
            <th>Taille</th>
            <th>Modifier</th>
            <th>Supprimer</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($tabTaille as $taille) : ?>
            <tr>
              <td><?= $taille->getNbr() ?></td>
              <td>
                <form method="post" action="index.php?entite=taille&action=taille&id=<?= $taille->getIdTaille(); ?>">
                  <button class="btn-gestionAdmin btn-modifier">Modifier</button>
                </form>
              </td>
              <td>
                <form method="post" action="index.php?entite=taille&action=delete&id=<?= $taille->getIdTaille(); ?>">
                  <button class="btn-gestionAdmin btn-supprimer">Supprimer</button>
                </form>
              </td>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>
      <form class="form-btncreeCat" method="post" action="index.php?entite=admin&action=createTaille">
        <button class="btn-admin btn-creeCat">Créer Taille</button>
      </form>
      <a href="index.php?entite=admin&action=home" class="retour">Retour</a>
    </div>
  </section>
</header>