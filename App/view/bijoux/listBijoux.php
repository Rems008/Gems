       <style>
         .header-listBijoux {
           background-image: url(App/src/img/Image_Gems_Bijoux_Atelier_2.png);
         }

         .card {
           display: flex;
           flex-wrap: wrap;
           flex-direction: row;
           justify-content: center;
         }

         .categorie-titre {
           text-transform: uppercase;
         }

         .categorie-p {
           margin-bottom: 10px;
         }

         .card-article {
           width: 90%;
           display: flex;
           flex-direction: column;
           text-align: justify;
           align-items: center;
           margin-bottom: 20px;
         }

         img.card-img {
           width: 60%;
           margin-bottom: 15px;
         }

         .card-titre {
           font-family: var(--font-family-principal);
           color: var(--color-secondaire);
           cursor: default;
           font-size: 16px;
           text-transform: uppercase;
         }

         .card-p {
           padding: 20px;
           font-family: var(--font-family-secondaire);
           font-size: 12px;
           text-align: center;
           cursor: default;
         }

         .form-btn {
           width: 100%;
           display: flex;
           justify-content: center;
         }

         .btn-voir {
           width: 40%;
           height: auto;
           margin: 20px 0;
           padding: 5px;
           font-size: 12px;
           letter-spacing: 1px;
           background: var(--color-secondaire);
           border-radius: 5px;
           border: var(--color-secondaire);
           border: 1px solid var(--color-secondaire);
           box-shadow: var(--box-shadow-principal);
           color: var(--color-tertiaire);
           cursor: pointer;
         }

         .btn-voir:hover {
           color: var(--color-secondaire);
           background-color: var(--color-tertiaire);
         }

         .error {
           font-size: 16px;
           color: var(--color-secondaire);
           text-align: center;
           margin-bottom: 10px;
         }

         @media (min-width: 900px) {
           .header-listBijoux {
             background-position-y: 100px;
           }

           .card-article {
             width: 30%;
             display: flex;
             flex-direction: column;
             text-align: justify;
             align-items: center;
             margin-bottom: 20px;
           }

           img.card-img {
             width: 50%;
             margin-bottom: 15px;
           }
         }
       </style>
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