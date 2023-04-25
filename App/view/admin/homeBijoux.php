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
      <h1 class="form-title">Gestion Bijoux</h1>
      <div class="main-gestion">
        <a href="index.php?entite=bijoux&action=create">
          <button class="btn-admin">Créer un Bijou</button>
        </a>
        <form method="post" action="index.php?entite=admin&action=listBijouxByCategorie&id=1">
          <button class="btn-admin">Bagues</button>
        </form>
        <form method="post" action="index.php?entite=admin&action=listBijouxByCategorie&id=2">
          <button class="btn-admin">Bracelets</button>
        </form>
        <form method="post" action="index.php?entite=admin&action=listBijouxByCategorie&id=3">
          <button class="btn-admin">Colliers</button>
        </form>
        <form method="post" action="index.php?entite=admin&action=listBijouxByCategorie&id=4">
          <button class="btn-admin">Boucles d'oreilles</button>
        </form>
        <form method="post" action="index.php?entite=bijoux&action=listBijouxAdmin">
          <button class="btn-admin">Tous les Bijoux</button>
        </form>
      </div>
      <a class="retour" href="index.php?entite=admin&action=home">Retour</a>
    </div>
  </section>
</header>