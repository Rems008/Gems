       <header class="header-base header-listBijoux">
         <section class="header">
           <div class="bandeau">
             <h6 class="bandeau-text">
               LIVRAISON OFFERTE A PARTIR DE 300 € EN FRANCE MÉTROPOLITAINE
             </h6>
           </div>
           <?php include_once 'App/include/nav.php'; ?>
         </section>
       </header>
       <?php foreach ($tabByCat as $cat => $bijoux) : ?>
         <main class="article">
           <section class="categorie">
             <h1 class="categorie-titre">NOS <?= $cat; ?>s</h1>
             <p class="categorie-p">
               Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae quis
               at accusantium ut voluptas temporibus a.
             </p>
           </section>
           <section class="card">
             <?php foreach ($bijoux as $bijou) : ?>Q
             <article class="card-article">
               <input type="hidden" name="id_bijoux" value="<?= $bijou->getIdBijoux(); ?>">
               <a class="card-lien" href="index.php?entite=bijoux&action=bijoux&id=<?= $bijou->getIdBijoux(); ?>">
                 <img class="card-img" src="App/src/img/<?= $bijou->getImageName(); ?>" alt="bijoux_gems_bague_collier_boucle_d_oreille_bracelet" />
               </a>
               <h5 class="card-titre"><?= $bijou->getNomBijoux(); ?></h5>
               <p class="card-p"><?= $bijou->getDescription(); ?>
               </p>
               <h3><?= $bijou->getPrix(); ?> €</h3>
               <form class="form-btn" method="post" action="index.php?entite=bijoux&action=bijoux&id=<?= $bijou->getIdBijoux(); ?>">
                 <button class="btn-voir">VOIR</button>
               </form>
             </article>
           <?php endforeach ?>
           </section>
         </main>
       <?php endforeach ?>