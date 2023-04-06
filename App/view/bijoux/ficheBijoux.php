     <header class="header-base header-ficheBijoux">
       <section class="header">
         <div class="bandeau">
           <h6 class="bandeau-text">
             LIVRAISON OFFERTE A PARTIR DE 300 € EN FRANCE MÉTROPOLITAINE
           </h6>
         </div>
         <?php include_once 'App/include/nav.php'; ?>
       </section>
       <section class="article">
         <div class="card card-ficheBijoux">
           <!-- <?php var_dump($bijoux) ?> -->
           <?php var_dump($bijoux->getNom()) ?>
           <?php var_dump($bijoux->getPrix()) ?>
           <?php var_dump($bijoux->getDescription()) ?>
           <?php var_dump($bijoux->getImageName()) ?>
           <input type="hidden" name="id_bijoux" value="<?= $bijoux->getId(); ?>">
           <h2 class="page-title"><?= $bijoux->getNom(); ?></h2>
           <img class="card-img" src="App/src/img/<?= $bijoux->getImageName(); ?>" alt="bijoux_gems_bague_collier_boucle_d_oreille_bracelet" />
           <article class="card-article">
             <p class="card-p"><?= $bijoux->getDescription(); ?>
             </p>
             <h3><?= $bijoux->getPrix(); ?> €</h3>
             <form class="form-btn" method="post" action="index.php?entite=bijoux&action=bijoux&id=">
               <button class="btn-voir">Acheter</button>
             </form>
           </article>
         </div>
       </section>
     </header>