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
      <h2 class="form-title">Gestion Pierre</h2>
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
              <td><?= $pierre['nom_pierre'] ?></td>
              <td>
                <form method="post" action="index.php?entite=pierre&action=update&id=<?= $pierre['id_pierre']; ?>">
                  <button class="btn-gestionAdmin btn-modifier">Modifier</button>
                </form>
              </td>
              <td>
                <form method="post" action="index.php?entite=pierre&action=delete&id=<?= $pierre['id_pierre']; ?>">
                  <button class="btn-gestionAdmin btn-supprimer">Supprimer</button>
                </form>
              </td>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>
      <form class="form-btncreeCat" method="post" action="index.php?entite=admin&action=createPierre">
        <button class="btn-admin btn-creeCat">Créer Pierre</button>
      </form>
      <a href="index.php?entite=admin&action=home" class="retour">Retour</a>
    </div>
  </section>
</header>