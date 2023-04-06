<style>
  .header-admin {
    background-image: url(App/src/img/Image_Gems_Bijoux_Atelier_2.png);
    height: 150vh;
    width: 100vw;
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
    height: 150vh;
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

  .form-admin label {
    font-size: 14px;
    display: inline-block;
    width: 160px;
    text-align: center;
    padding-left: 30px;
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
    margin: 10px 0 10px 28px;
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
      <h2 class="form-title">Créer Matière</h2>
      <form class="form-admin" method="post" action="index.php?entite=matiere&action=create" enctype="multipart/form-data">
        <label for="id_nom"><span class="etoile-form">*</span>Nom Matière</label>
        <input type="text" id="id-nom" name="nom">
        <button class="btn-form-createUser">Créer Matière</button>
      </form>
      <a href="index.php?entite=matiere&action=list" class="retour">Retour</a>
    </div>
  </section>
</header>