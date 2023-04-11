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
      <?php
      $nomCat = reset($bijoux);
      ?>
      <h2 class="form-title">Gestion <?= $nomCat->getNomCategorie(); ?>s</h2>
      <table class="table-cat">
        <thead>
          <tr>
            <th></th>
            <th>Bijoux</th>
            <th>Modifier</th>
            <th>Supprimer</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($bijoux as $bijou) : ?>
            <tr>
              <td class="img-admin"><img src="App/src/img/<?= $bijou->getImageName() ?>" alt="bijoux_gems_bague_collier_boucle_d_oreille_bracelet"> </td>
              <td><?= $bijou->getNomBijoux() ?></td>
              <td>
                <form method="post" action="index.php?entite=admin&action=updateBijoux&id=<?= $bijou->getIdBijoux(); ?>">
                  <button class="btn-gestionAdmin btn-modifier">Modifier</button>
                </form>
              </td>
              <td>
                <form method="post" action="index.php?entite=bijoux&action=delete&id=<?= $bijou->getIdBijoux(); ?>">
                  <button class="btn-gestionAdmin btn-supprimer">Supprimer</button>
                </form>
              </td>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>
      <form class="form-btncreeCat" method="post" action="index.php?entite=admin&action=createBijoux">
        <button class="btn-admin btn-creeCat">Créer <?= $nomCat->getNomCategorie(); ?>s</button>
      </form>
      <a class="retour" href="index.php?entite=admin&action=bijoux">Retour</a>
    </div>
  </section>
</header>