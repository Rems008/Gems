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
           <input type="hidden" name="id_bijoux" value="<?= $bijoux->getIdBijoux(); ?>">
           <h2 class="page-title"><?= $bijoux->getNomBijoux(); ?></h2>
           <div class="container">
             <div class="container-left">
               <img class="card-img-fiche" src="App/src/img/<?= $bijoux->getImageName(); ?>" alt="bijoux_gems_bague_collier_boucle_d_oreille_bracelet" />
             </div>
             <article class="card-article container-right">
               <p class="card-p card-p-fiche"><?= $bijoux->getDescription(); ?>
               </p>
               <h3><?= $bijoux->getPrix(); ?> €</h3>
               <form class="form-btn" method="post" action="index.php?entite=bijoux&action=bijoux&id=<?= $bijoux->getIdBijoux(); ?>">
                 <button class="btn-voir">Acheter</button>
               </form>
             </article>
           </div>
         </div>
         <a href="index.php?entite=bijoux&action=listBijouxAdmin" class="retour">Retour</a>
       </section>
     </header>