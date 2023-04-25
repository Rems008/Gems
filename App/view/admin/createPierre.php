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
      <h1 class="form-title">Créer Pierre</h1>
      <form class="form-admin" method="post" action="index.php?entite=pierre&action=create" enctype="multipart/form-data">
        <label for="id-nom"><span class="etoile-form">*</span>Nom Pierre</label>
        <input type="text" id="id-nom" name="nom">
        <button class="btn-admin">Créer Pierre</button>
      </form>
      <a href="index.php?entite=pierre&action=list" class="retour">Retour</a>
    </div>
  </section>
</header>