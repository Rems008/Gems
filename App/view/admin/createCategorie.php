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
      <h2 class="form-title">Créer Catégorie</h2>
      <form class="form-admin" method="post" action="index.php?entite=categorie&action=create" enctype="multipart/form-data">
        <label for="id_nom"><span class="etoile-form">*</span>Nom Catégorie</label>
        <input type="text" id="id-nom" name="nom">
        <button class="btn-admin">Créer Catégorie</button>
      </form>
      <a href="index.php?entite=categorie&action=list" class="retour">Retour</a>
    </div>
  </section>
</header>