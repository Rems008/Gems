<header class="header-base header-user">
  <section class="header">
    <div class="bandeau">
      <h6 class="bandeau-text">
        LIVRAISON OFFERTE A PARTIR DE 300 € EN FRANCE MÉTROPOLITAINE
      </h6>
    </div>
    <?php include_once 'App/include/nav.php'; ?>
  </section>
  <section class="section-user">
    <div class="div-section-user">
      <h2 class="form-title">Mon Compte</h2>
      <form class="form-user form-createUser" method="post" action="index.php?entite=user&action=create">
        <label for="id-prenom"><span class="etoile-form">*</span>Prénom</label>
        <input type="text" id="id-prenom" name="prenom">
        <label for="id_nom"><span class="etoile-form">*</span>Nom</label>
        <input type="text" id="id-nom" name="nom">
        <label for="id-email"><span class="etoile-form">*</span>Email</label>
        <input type="email" id="id-email" name="email">
        <label for="id-mdp"><span class="etoile-form">*</span>Mot de passe</label>
        <input type="password" id="id-mdp" name="mdp">
        <label for="id-adresse"><span class="etoile-form">*</span>Adresse</label>
        <input type="text" id="id-adresse" name="adresse">
        <label for="id-code-postal"><span class="etoile-form">*</span>Code postal</label>
        <input type="text" id="id-code-postal" name="code_postal">
        <label for="id-telephone"><span class="etoile-form">*</span>Numéro de téléphone</label>
        <input type="text" id="id-telephone" name="telephone">
        <button class="btn-form btn-createUser">INSCRIPTION</button>
      </form>
    </div>
  </section>
  </form>
</header>