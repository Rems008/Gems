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
      <h2 class="form-title">Gestion Matière</h2>
      <table class="table-cat">
        <thead>
          <tr>
            <th>Matière</th>
            <th>Modifier</th>
            <th>Supprimer</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($tabMatiere as $matiere) : ?>
            <tr>
              <td><?= $matiere->getNomMatiere() ?></td>
              <td>
                <form method="post" action="index.php?entite=matiere&action=update&id=<?= $matiere->getIdMatiere(); ?>">
                  <button class="btn-gestionAdmin btn-modifier">Modifier</button>
                </form>
              </td>
              <td>
                <form method="post" action="index.php?entite=matiere&action=delete&id=<?= $matiere->getIdMatiere(); ?>">
                  <button class="btn-gestionAdmin btn-supprimer">Supprimer</button>
                </form>
              </td>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>
      <form class="form-btncreeCat" method="post" action="index.php?entite=admin&action=createMatiere">
        <button class="btn-admin btn-creeCat">Créer Matière</button>
      </form>
      <a href="index.php?entite=admin&action=home" class="retour">Retour</a>
    </div>
  </section>
</header>