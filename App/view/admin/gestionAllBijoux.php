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
                <td class="img-admin"><img src="App/src/img/<?= $bijou['image_bijoux'] ?>" alt="bijoux_gems_bague_collier_boucle_d_oreille_bracelet"></td>
                <td><?= $cat; ?></td>
                <td><?= $bijou['nom_bijoux'] ?></td>
                <td>
                  <form method="post" action="index.php?entite=bijoux&action=update&id=<?= $bijou['id_bijoux']; ?>">
                    <button class="btn-gestionAdmin btn-modifier">Modifier</button>
                  </form>
                </td>
                <td>
                  <form method="post" action="index.php?entite=bijoux&action=delete&id=<?= $bijou['id_bijoux']; ?>">
                    <button class="btn-gestionAdmin btn-supprimer">Supprimer</button>
                  </form>
                </td>
              </tr>
            <?php endforeach ?>
          <?php endforeach ?>
        </tbody>
      </table>
      <form class="form-btncreeCat" method="post" action="index.php?entite=bijoux&action=create">
        <button class="btn-admin btn-creeCat">Créer Bijoux</button>
      </form>
      <a class="retour" href="index.php?entite=admin&action=bijoux">Retour</a>
    </div>
  </section>
</header>