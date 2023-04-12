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
      <h2 class="form-title">Modifier un Bijou</h2>
      <form class="form-admin" method="post" action="index.php?entite=bijoux&action=create" enctype="multipart/form-data">
        <label for="id_nom"><span class="etoile-form">*</span>Nom</label>
        <input type="text" id="id-nom" name="nom">
        <label for="id-description"><span class="etoile-form">*</span>Description</label>
        <input type="text" id="id-description" name="description">
        <label for="id-prix"><span class="etoile-form">*</span>Prix</label>
        <input type="string" id="id-prix" name="prix">
        <label for="id-image"><span class="etoile-form">*</span>Image</label>
        <input type="file" id="id-image" name="image">
        <div class="div-selecteur">
          <?php var_dump($tabMatiere) ?> <label for="id-categorie"><span class="etoile-form">*</span>Catégorie</label>
          <select id="id-categorie" name="cat">
            <?php foreach ($tabCat as $cat) : ?>
              <option value="<?= $cat->getIdCategorie() ?>"><?= $cat->getNomCategorie() ?></option>
            <?php endforeach ?>
          </select>
          <label for="id-matiere"><span class="etoile-form">*</span>Matière</label>
          <select id="id-matiere" name="matiere">
            <?php foreach ($tabMatiere as $matiere) : ?>
              <option value="<?= $matiere->getIdMatiere() ?>"><?= $matiere->getNomMatiere() ?></option>
            <?php endforeach ?>
          </select>
          <label for="id-pierre"><span class="etoile-form">*</span>Pierre</label>
          <select id="id-pierre" name="pierre">
            <?php foreach ($tabPierre as $pierre) : ?>
              <option value="<?= $pierre->getIdPierre(); ?>"><?= $pierre->getNomPierre() ?></option>
            <?php endforeach ?>
          </select>
          <label for="id-taille"><span class="etoile-form">*</span>Taille</label>
          <select id="id-taille" name="taille">
            <?php foreach ($tabTaille as $taille) : ?>
              <option value="<?= $taille->getIdTaille() ?>"><?= $taille->getNbr() ?></option>
            <?php endforeach ?>
          </select>
        </div>
        <button class="btn-admin">créer bijou</button>
      </form>
      <a href="index.php?entite=admin&action=bijoux" class="retour">Retour</a>
    </div>
  </section>
</header>