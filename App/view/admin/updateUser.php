<style>
  .header-admin {
    background-image: url(App/src/img/Image_Gems_Bijoux_Atelier_2.png);
    width: 100vw;
    height: auto;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: 55%;
    background-position-y: 50px;
  }

  .nav-container {
    height: 20px;
  }

  .nav-titre {
    background: var(--color-tertiaire);
  }

  .section-admin {
    display: flex;
    justify-content: center;
    background: rgba(217, 217, 217, 0.85);
    height: auto;
  }

  .div_main {
    margin-top: 160px;
  }

  .form-title {
    font-style: normal;
    font-weight: 400;
    font-size: 32px;
    line-height: 59px;
    text-align: center;
    margin-bottom: 10px;
  }

  .form-admin {
    display: flex;
    justify-content: center;
    flex-direction: column;
    align-content: center;
    text-align: center;
    align-items: center;
  }

  .form-admin label {
    font-size: 14px;
    display: inline-block;
    width: 160px;
    margin-bottom: 10px;
  }

  .form-admin input {
    display: block;
    width: 200px;
    text-align: center;
    border: none;
    border-bottom: 1px solid var(--color-principal);
    margin-bottom: 10px;
    background: inherit;
  }

  .form-admin #id-image {
    border: none;
  }

  .div-selecteur {
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  .div-selecteur label {
    padding: 0;
  }

  .div-selecteur select {
    width: 70%;
    display: flex;
    text-align: center;
    margin-bottom: 10px;
    background: inherit;
    text-transform: capitalize;
  }

  .etoile-form {
    color: var(--color-secondaire);
  }

  .btn-form-createUser {
    width: 143px;
    height: 47px;
    margin: 10px 0 10px;
    font-size: 12px;
    text-align: center;
    align-items: center;
    background: var(--color-secondaire);
    border: var(--btn-border);
    box-shadow: var(--box-shadow-principal);
    border-radius: 5px;
    color: var(--color-tertiaire);
    cursor: pointer;
  }

  .btn-form-createUser:hover {
    color: var(--color-secondaire);
    background: var(--color-tertiaire);
  }

  .error {
    font-size: 16px;
    color: var(--color-secondaire);
    text-align: center;
    margin-bottom: 10px;
  }

  @media (min-width: 900px) {

    .nav-container {
      height: 105px;
    }

    .nav-menu {
      backdrop-filter: none;
    }
  }
</style>
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
    <div class="div_main">
      <h2 class="form-title">Modifier Utilisateur</h2>
      <form class="form-admin" method="post" action="index.php?entite=user&action=update" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $user['id_utilisateur']; ?>">
        <label for="id-prenom"><span class="etoile-form">*</span>Prénom</label>
        <input type="text" id="id-prenom" name="prenom" value="<?= $user['prenom_utilisateur']; ?>">
        <label for="id_nom"><span class="etoile-form">*</span>Nom</label>
        <input type="text" id="id-nom" name="nom" value="<?= $user['nom_utilisateur']; ?>">
        <label for="id-email"><span class="etoile-form">*</span>Email</label>
        <input type="email" id="id-email" name="email" value="<?= $user['email_utilisateur']; ?>">
        <label for="id-mdp"><span class="etoile-form">*</span>Mot de passe</label>
        <input type="password" id="id-mdp" name="mdp" value="<?= $user['mot_de_passe']; ?>">
        <label for="id-adresse"><span class="etoile-form">*</span>Adresse</label>
        <input type="text" id="id-adresse" name="adresse" value="<?= $user['adresse_utilisateur']; ?>">
        <label for="id-code-postal"><span class="etoile-form">*</span>Code postal</label>
        <input type="text" id="id-code-postal" name="code_postal" value="<?= $user['code_postal']; ?>">
        <label for="id-telephone"><span class="etoile-form">*</span>Numéro de téléphone</label>
        <input type="text" id="id-telephone" name="telephone" value="<?= $user['telephone_utilisateur']; ?>">
        <label for="id-role"><span class="etoile-form">*</span>Numéro de téléphone</label>
        <input type="text" id="id-role" name="role" value="<?= $user['role']; ?>">
        <button class="btn-form-createUser">Modifier Utilisateur</button>
      </form>
      <a href="index.php?entite=user&action=list" class="retour">Retour</a>
      </form>
    </div>
  </section>
</header>