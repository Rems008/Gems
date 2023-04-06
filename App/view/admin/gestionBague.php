<style>
  .header-admin {
    background-image: url(App/src/img/Image_Gems_Bijoux_Atelier_2.png);

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

  }

  .div_main {
    margin-top: 100px;
  }

  .form-title {
    font-style: normal;
    font-weight: 400;
    font-size: 32px;
    text-align: center;
    margin-bottom: 10px;
  }

  .main-gestion {
    margin-top: 100px;
    padding: 40px;
  }

  .main-gestion form {
    display: inline-block;
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

    .div_main {
      margin-top: 160px;
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
      <h2 class="form-title">Gestion Bagues</h2>
      <div class="main-gestion">
        <?php if ($error) : ?><!-- si erreur : test d'une variable d'erreur -->
          <div class="error"><?= $error ?></div>
        <?php endif ?>
        <section class="article">
          <?php foreach ($tabBijoux as $bijoux) : ?>
            <div class="card">
              <article class="card-article">
                <h4 class="categorie-titre"><?= $bijoux->getIdCategorie(); ?></h4>
                <img class="card-img" src="App/src/img/<?= $bijoux->getImageName(); ?>" alt="" />
                <h5 class="card-titre"><?= $bijoux->getNom(); ?></h5>
                <h5 class="card-titre"><?= $bijoux->getIdMatiere(); ?></h5>
                <h5 class="card-titre"><?= $bijoux->getIdPierre(); ?></h5>
                <!-- <h5 class="card-titre"><?= $bijoux->getIdTaille(); ?></h5> -->
                <p class="card-p"><?= $bijoux->getDescription(); ?>
                </p>
                <h5><?= $bijoux->getPrix(); ?></h5>
                <form method="post" action="index.php?entite=admin&action=voir&id=<?= $bijoux->getId(); ?>">
                  <button class="btn-modifier=<?= $bijoux->getId(); ?>">Modifier</button>
                </form>
                <form method="post" action="index.php?entite=admin&action=delete&id=<?= $bijoux->getId(); ?>">
                  <button class="btn-supprimer">Supprimer</button>
                </form>
              </article>
            </div>
          <?php endforeach ?>
        </section>




        <form method="post" action="index.php?entite=bijoux&action=create">
          <button class="btn-form-createUser">Enregistrer un Bijou</button>
        </form>
        <form method="post" action="index.php?entite=admin&action=bagues">
          <button class="btn-form-createUser">Bagues</button>
        </form>
        <form method="post" action="index.php?entite=admin&action=bracelets">
          <button class="btn-form-createUser">Bracelets</button>
        </form>
        <form method="post" action="index.php?entite=admin&action=colliers">
          <button class="btn-form-createUser">Colliers</button>
        </form>
        <form method="post" action="index.php?entite=admin&action=boucles">
          <button class="btn-form-createUser">Boucles d'oreilles</button>
        </form>
        <form method="post" action="index.php?entite=admin&action=allBijoux">
          <button class="btn-form-createUser">Tous</button>
        </form>
      </div>
    </div>
  </section>
  </form>
</header>