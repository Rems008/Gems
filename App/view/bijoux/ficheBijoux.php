     <header class="header-base header-ficheBijoux">
       <section class="header">
         <div class="bandeau">
           <h6 class="bandeau-text">
             LIVRAISON OFFERTE A PARTIR DE 300 € EN FRANCE MÉTROPOLITAINE
           </h6>
         </div>
         <?php include_once 'App/include/nav.php'; ?>
       </section>
       <main class="article">
         <section class="card card-ficheBijoux">
           <input type="hidden" name="id_bijoux" value="<?= $bijoux->getIdBijoux(); ?>">
           <h1 class="page-title"><?= $bijoux->getNomBijoux(); ?></h1>
           <div class="container">
             <div class="container-left">
               <img class="card-img-fiche" src="app/src/img/<?= $bijoux->getImageName(); ?>" alt="bijoux_gems_bague_collier_boucle_d_oreille_bracelet" />
             </div>
             <article class="card-article container-right">
               <p class="card-p card-p-fiche"><?= $bijoux->getDescription(); ?>
               </p>
               <h3><?= $bijoux->getPrix(); ?> €</h3>
               <form class="form-btn" method="post" action="index.php?entite=bijoux&action=bijoux&id=<?= $bijoux->getIdBijoux(); ?>">
                 <button class="btn-voir">Ajouter au panier</button>
               </form>
             </article>
           </div>
         </section>
         <a href="index.php?entite=bijoux&action=listBijoux" class="retour">Retour</a>
       </main>
     </header>