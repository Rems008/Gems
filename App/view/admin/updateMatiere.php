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
      <h2 class="form-title">Modifier Matière</h2>
      <form class="form-admin" method="post" action="index.php?entite=matiere&action=update">
        <input type="hidden" name="id" value="<?= $matiere->getIdMatiere(); ?>">
        <label for="id_nom"><span class="etoile-form">*</span>Matière</label>
        <input type="text" id="id-nom" name="nom" value="<?= $matiere->getNomMatiere(); ?>">
        <button class="btn-admin">Modifier Matière</button>
      </form>
      <a href="index.php?entite=matiere&action=list" class="retour">Retour</a>
    </div>
  </section>
</header>