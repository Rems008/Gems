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
      <h2 class="form-title">Gestion Bijoux</h2>
      <table class="table-cat">
        <thead>
          <tr>
            <th></th>
            <th>Catégorie</th>
            <th>Bijoux</th>
            <th>Modifier</th>
            <th>Supprimer</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($tabByCat as $cat => $bijoux) : ?>
            <?php foreach ($bijoux as $bijou) : ?>
              <tr>
                <td class="img-admin"><a href=" index.php?entite=bijoux&action=bijoux&id=<?= $bijou->getIdBijoux(); ?>"><img src="App/src/img/<?= $bijou->getImageName() ?>" alt="bijoux_gems_bague_collier_boucle_d_oreille_bracelet"> </a></td>
                <td><?= $cat; ?></td>
                <td><?= $bijou->getNomBijoux() ?></td>
                <td>
                  <form method="post" action="index.php?entite=bijoux&action=bijouxUpdate&id=<?= $bijou->getIdBijoux(); ?>">
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
          <?php endforeach ?>
        </tbody>
      </table>
      <a class="btn-creeCat" href="index.php?entite=bijoux&action=create">Créer Bijoux</a>
      <a class="retour" href="index.php?entite=admin&action=bijoux">Retour</a>
    </div>
  </section>
</header>