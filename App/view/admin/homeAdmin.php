<style>
  .header-admin {
    background-image: url(App/src/img/Image_Gems_Bijoux_Atelier_2.png);
    width: 100vw;
    height: auto;
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
  }

  .div_main {
    margin-top: 100px;
  }

  .main-gestion {
    justify-content: center;
  }

  .form-title {
    font-style: normal;
    font-weight: 400;
    font-size: 28px;
    text-align: center;
    margin-bottom: 10px;
  }

  .main-gestion form {
    display: inline-block;
  }

  .btn-form-createUser {
    width: 110px;
    height: 35px;
    margin: 10px 0 20px 30px;
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

  .retour {
    display: flex;
    justify-content: center;
    color: var(--color-principal);
    margin: 10px;
  }

  .retour:hover {
    color: var(--color-secondaire);
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

    .div_main {
      margin-top: 160px;
    }

    .main-gestion {
      margin-top: 100px;
      padding: 40px;
    }

    .btn-form-createUser {
      width: 143px;
      height: 47px;
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
      <h2 class="form-title">Bienvenue "nom admin"</h2>
      <div class="main-gestion">
        <form method="post" action="index.php?entite=admin&action=bijoux">
          <button class="btn-form-createUser">Bijoux</button>
        </form>
        <form method="post" action="index.php?entite=categorie&action=list">
          <button class="btn-form-createUser">Catégorie</button>
        </form>
        <form method="post" action="index.php?entite=matiere&action=list">
          <button class="btn-form-createUser">Matière</button>
        </form>
        <form method="post" action="index.php?entite=pierre&action=list">
          <button class="btn-form-createUser">Pierre</button>
        </form>
        <form method="post" action="index.php?entite=taille&action=list">
          <button class="btn-form-createUser">Taille</button>
        </form>
        <form method="post" action="index.php?entite=user&action=list">
          <button class="btn-form-createUser">Utilisateur</button>
        </form>
        <a class="retour" href="index.php">Retour</a>
      </div>
    </div>
  </section>
  </form>
</header>