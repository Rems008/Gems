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
    <div class="div-main-admin">
      <h2 class="form-title">Modifier Utilisateur</h2>
      <form class="form-admin" method="post" action="index.php?entite=user&action=update" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $user->getIdUser(); ?>">
        <label for="id-prenom"><span class="etoile-form">*</span>Prénom</label>
        <input type="text" id="id-prenom" name="prenom" value="<?= $user->getPrenom(); ?>">
        <label for="id_nom"><span class="etoile-form">*</span>Nom</label>
        <input type="text" id="id-nom" name="nom" value="<?= $user->getNomUser(); ?>">
        <label for="id-email"><span class="etoile-form">*</span>Email</label>
        <input type="email" id="id-email" name="email" value="<?= $user->getEmail(); ?>">
        <label for="id-mdp"><span class="etoile-form">*</span>Mot de passe</label>
        <input type="password" id="id-mdp" name="mdp" value="<?= $user->getMdp(); ?>">
        <label for="id-adresse"><span class="etoile-form">*</span>Adresse</label>
        <input type="text" id="id-adresse" name="adresse" value="<?= $user->getAdresse(); ?>">
        <label for="id-code-postal"><span class="etoile-form">*</span>Code postal</label>
        <input type="text" id="id-code-postal" name="code_postal" value="<?= $user->getCodePostal(); ?>">
        <label for="id-telephone"><span class="etoile-form">*</span>Numéro de téléphone</label>
        <input type="text" id="id-telephone" name="telephone" value="<?= $user->getTelephone(); ?>">
        <label for="id-role"><span class="etoile-form">*</span>Numéro de téléphone</label>
        <input type="text" id="id-role" name="role" value="<?= $user->getRole(); ?>">
        <button class="btn-admin">Modifier Utilisateur</button>
      </form>
      <a href="index.php?entite=user&action=list" class="retour">Retour</a>
      </form>
    </div>
  </section>
</header>