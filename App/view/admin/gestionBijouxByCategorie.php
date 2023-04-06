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
  }

  .div_main {
    margin-top: 100px;
  }

  .form-title {
    font-style: normal;
    font-weight: 400;
    font-size: 32px;
    line-height: 59px;
    text-align: center;
    margin-bottom: 10px;
    text-transform: capitalize;
  }

  .table-cat {
    width: 100%;
    border: 2px solid var(--color-secondaire);
  }

  .table-cat th,
  .table-cat td {
    padding: 10px;
    text-align: center;
    text-transform: capitalize;
  }

  .table-cat tr {
    font-size: 12px;
  }

  .img-admin img {
    width: 40px;
    height: 40px;
  }

  .btn-admin {
    width: 70px;
    height: 30px;
    font-size: 10px;
    text-align: center;
    background: var(--color-secondaire);
    border: var(--btn-border);
    box-shadow: var(--box-shadow-principal);
    border-radius: 5px;
    color: var(--color-tertiaire);
    text-transform: capitalize;
    cursor: pointer;
  }

  .btn-admin:hover {
    color: var(--color-secondaire);
    background: var(--color-tertiaire);
  }

  .form-btncreeCat {
    display: flex;
    justify-content: right;
  }

  .btn-modifier {
    background: #001f98;
    border: #001f98;
  }

  .btn-supprimer {
    background: red;
    border: red;
  }

  .btn-creeCat {
    width: 90px;
    margin: 20px;
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
      width: 80%;
      margin-top: 160px;
    }

    .table-cat tr {
      font-size: 14px;
    }

    .img-admin img {
      width: 60px;
      height: 60px;
    }

    .btn-admin {
      width: 100px;
      height: 50px;
      font-size: 16px;
    }

    .btn-creeCat {
      width: 140px;

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
      <?php
      $nomCat = reset($bijoux);
      ?>
      <h2 class="form-title">Gestion <?= $nomCat['nom_categorie']; ?>s</h2>
      <table class="table-cat">
        <thead>
          <tr>
            <th></th>
            <th>Bijoux</th>
            <th>Modifier</th>
            <th>Supprimer</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($bijoux as $bijou) : ?>
            <tr>
              <td class="img-admin"><img src="App/src/img/<?= $bijou['image_bijoux'] ?>" alt="bijoux_gems_bague_collier_boucle_d_oreille_bracelet"> </td>
              <td><?= $bijou['nom_bijoux'] ?></td>
              <td>
                <form method="post" action="index.php?entite=bijoux&action=update&id=<?= $bijou['id_bijoux']; ?>">
                  <button class="btn-admin btn-modifier">Modifier</button>
                </form>
              </td>
              <td>
                <form method="post" action="index.php?entite=bijoux&action=delete&id=<?= $bijou['id_bijoux']; ?>">
                  <button class="btn-admin btn-supprimer">Supprimer</button>
                </form>
              </td>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>
      <form class="form-btncreeCat" method="post" action="index.php?entite=bijoux&action=create">
        <button class="btn-admin btn-creeCat">Créer <?= $nomCat['nom_categorie']; ?>s</button>
      </form>
      <a class="retour" href="index.php?entite=admin&action=bijoux">Retour</a>
    </div>
  </section>
</header>