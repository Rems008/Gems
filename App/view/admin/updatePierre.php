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
      <h2 class="form-title">Modifier Pierre</h2>
      <form class="form-admin" method="post" action="index.php?entite=pierre&action=update">
        <input type="hidden" name="id" value="<?= $pierre->getIdPierre(); ?>">
        <label for="id-nom"><span class="etoile-form">*</span>Nom Pierre</label>
        <input type="text" id="id-nom" name="nom" value="<?= $pierre->getNomPierre(); ?>">
        <button class="btn-admin">Modifier Pierre</button>
      </form>
      <a href="index.php?entite=pierre&action=list" class="retour">Retour</a>
    </div>
  </section>
</header>