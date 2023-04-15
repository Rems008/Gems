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
            <th>Nom</th>
            <th>Email</th>
            <th>Role</th>
            <th>Modifier</th>
            <th>Supprimer</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($tabUser as $user) : ?>
            <tr>
              <td class="user-nom"><?= $user->getNomUser() ?></td>
              <td class="user-email"><?= $user->getEmail(); ?></td>
              <td class="user-role"><?= $user->getRole() ?></td>
              <td>
                <form class="gestion-user" method="post" action="index.php?entite=user&action=user&id=<?= $user->getIdUser(); ?>">
                  <button class="btn-gestionAdmin btn-modifier">Modifier</button>
                </form>
              </td>
              <td>
                <form class="gestion-user" method="post" action="index.php?entite=user&action=delete&id=<?= $user->getIdUser(); ?>">
                  <button class="btn-gestionAdmin btn-supprimer">Supprimer</button>
                </form>
              </td>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>
      <a href="index.php?entite=user&action=create" class="btn-creeCat">créer utilisateur</a>
      <a href="index.php?entite=admin&action=home" class="retour">Retour</a>
    </div>
  </section>
</header>