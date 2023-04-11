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
      <h2 class="form-title">Modifier Taille</h2>
      <form class="form-admin" method="post" action="index.php?entite=taille&action=update">
        <input type="hidden" name="id" value="<?= $taille->getIdTaille(); ?>">
        <label for="id_nom"><span class="etoile-form">*</span>Taille</label>
        <input type="text" id="id-nom" name="nom" value="<?= $taille->getNbr(); ?>">
        <button class="btn-admin">Modifier Taille</button>
      </form>
      <a href="index.php?entite=taille&action=list" class="retour">Retour</a>
    </div>
  </section>
</header>