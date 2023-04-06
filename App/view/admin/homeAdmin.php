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
      <h2 class="form-title">Bienvenue "nom admin"</h2>
      <div class="main-gestion">
        <form method="post" action="index.php?entite=admin&action=bijoux">
          <button class="btn-admin">Bijoux</button>
        </form>
        <form method="post" action="index.php?entite=categorie&action=list">
          <button class="btn-admin">Catégorie</button>
        </form>
        <form method="post" action="index.php?entite=matiere&action=list">
          <button class="btn-admin">Matière</button>
        </form>
        <form method="post" action="index.php?entite=pierre&action=list">
          <button class="btn-admin">Pierre</button>
        </form>
        <form method="post" action="index.php?entite=taille&action=list">
          <button class="btn-admin">Taille</button>
        </form>
        <form method="post" action="index.php?entite=user&action=list">
          <button class="btn-admin">Utilisateur</button>
        </form>
      </div>
      <a class="retour" href="index.php">Retour</a>
    </div>
  </section>
  </form>
</header>