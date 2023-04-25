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
      <h1 class="form-title">Modifier Catégorie</h1>
      <form class="form-admin" method="post" action="index.php?entite=categorie&action=update">
        <input type="hidden" name="id" value="<?= $cat->getIdCategorie(); ?>">
        <label for="id-nom"><span class="etoile-form">*</span>Nom Catégorie</label>
        <input type="text" id="id-nom" name="nom" value="<?= $cat->getNomCategorie(); ?>">
        <button class="btn-admin">Modifier Catégorie</button>
      </form>
      <a href="index.php?entite=categorie&action=list" class="retour">Retour</a>
    </div>
  </section>
</header>