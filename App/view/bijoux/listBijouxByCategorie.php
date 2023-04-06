       <header class="header-base header-listBijouxByCategorie">
         <section class="header">
           <div class="bandeau">
             <h6 class="bandeau-text">
               LIVRAISON OFFERTE A PARTIR DE 300 € EN FRANCE MÉTROPOLITAINE
             </h6>
           </div>
           <?php include_once 'App/include/nav.php'; ?>
         </section>
       </header>
       <section class="article">
         <div class="categorie">
           <?php
            $nomCat = reset($bijoux); //  fonction PHP qui permet de pointer sur le premier élément d'un tableau et de renvoyer sa valeur ici le nom de la catégorie.
            ?>
           <h2 class="page-title">NOS <?= $nomCat['nom_categorie']; ?>s</h2>
           <p class="categorie-p">
             Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae quis
             at accusantium ut voluptas temporibus a.
           </p>
         </div>
         <div class="card">
           <?php foreach ($bijoux as $bijou) : ?>
             <article class="card-article">
               <img class="card-img" src="App/src/img/<?= $bijou['image_bijoux']; ?>" alt="bijoux_gems_bague_collier_boucle_d_oreille_bracelet" />
               <h5 class="card-titre"><?= $bijou['nom_bijoux']; ?><?php if (isset($bijoux['nom_bijoux'])) {
                                                                    echo $bijoux['nom_bijoux'];
                                                                  } ?>
               </h5>
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