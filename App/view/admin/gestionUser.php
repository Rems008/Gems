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
      <h2 class="form-title">Gestion Utilisateur</h2>
      <table class="table-cat">
        <thead>
          <tr>
            <th>Utilisateur</th>
            <th>Role</th>
            <th>Modifier</th>
            <th>Supprimer</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($tabUser as $user) : ?>
            <tr>
              <td><?= $user['nom_utilisateur'] ?></td>
              <td><?= $user['role'] ?></td>
              <td>
                <form method="post" action="index.php?entite=admin&action=updateUser&id=<?= $user['id_utilisateur']; ?>">
                  <button class="btn-gestionAdmin btn-modifier">Modifier</button>
                </form>
              </td>
              <td>
                <form method="post" action="index.php?entite=user&action=delete&id=<?= $user['id_utilisateur']; ?>">
                  <button class="btn-gestionAdmin btn-supprimer">Supprimer</button>
                </form>
              </td>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>
      <a href="index.php?entite=admin&action=home" class="retour">Retour</a>
    </div>
  </section>
</header>