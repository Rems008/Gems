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
         <section class="article">
           <div class="categorie">
             <h2 class="categorie-titre">NOS <?= $cat; ?>s</h2>
             <p class="categorie-p">
               Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae quis
               at accusantium ut voluptas temporibus a.
             </p>
           </div>
           <div class="card">
             <?php foreach ($bijoux as $bijou) : ?>
               <article class="card-article">
                 <input type="hidden" name="id_bijoux" value="<?= $bijou['id_bijoux']; ?>">

                 <img class="card-img" src="App/src/img/<?= $bijou['image_bijoux']; ?>" alt="bijoux_gems_bague_collier_boucle_d_oreille_bracelet" />
                 <h5 class="card-titre"><?= $bijou['nom_bijoux']; ?></h5>
                 <p class="card-p"><?= $bijou['description']; ?>
                 </p>
                 <h3><?= $bijou['prix_bijoux']; ?> €</h3>
                 <form class="form-btn" method="post" action="index.php?entite=bijoux&action=see&id=<?= $bijou['id_bijoux']; ?>">
                   <button class="btn-voir">VOIR</button>
                 </form>
               </article>
             <?php endforeach ?>
           </div>
         </section>
       <?php endforeach ?>