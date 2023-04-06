       <style>
         .header-listBijoux {
           background-image: url(App/src/img/Image_Gems_Bijoux_Atelier_2.png);
           height: 60vh;
           width: 100vw;
           background-size: cover;
           background-repeat: no-repeat;
           background-position: 55%;
           background-position-y: 30px;
         }

         .page-title {
           font-style: normal;
           font-weight: 400;
           font-size: 32px;
           line-height: 59px;
           text-align: center;
         }


         .btn-form-user {
           width: 143px;
           height: 47px;
           margin: 10px 0 10px 0;
           font-size: 12px;
           text-align: center;
           align-items: center;
           background: var(--color-secondaire);
           border: var(--btn-border);
           box-shadow: var(--box-shadow-principal);
           border-radius: 5px;
           color: var(--color-tertiaire);
           cursor: pointer;
         }

         .btn-form-user:hover {
           color: var(--color-secondaire);
           background: var(--color-tertiaire);
         }

         .error {
           font-size: 16px;
           color: var(--color-secondaire);
           text-align: center;
           margin-bottom: 10px;
         }

         @media (min-width: 900px) {
           .header-listBijoux {
             background-image: url(App/src/img/Image_Gems_Bijoux_Atelier_2.png);
             height: 90vh;
             width: 100vw;
             background-size: cover;
             background-repeat: no-repeat;
             background-position: 55%;
             background-position-y: 50px;
           }

           .nav-container {
             height: 105px;
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
       <h2 class="page-title">Nos Bijoux</h2>
       <section class="article">
         <div class="categorie">
           <h2 class="categorie-titre">NOS BAGUES</h2>
           <p class="categorie-p">
             Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae quis
             at accusantium ut voluptas temporibus a.
           </p>
         </div>
         <?php foreach ($tabBijoux as $bijoux) : ?>
           <div class="card">
             <article class="card-article">
               <img class="card-img" src="App/src/img/<?= $bijoux->getImageName(); ?>" alt="" />
               <h5 class="card-titre"><?= $bijoux->getNom(); ?></h5>
               <p class="card-p"><?= $bijoux->getDescription(); ?>
               </p>
               <h3><?= $bijoux->getPrix(); ?></h3>
               <button class="btn-voir">VOIR</button>
             </article>
           </div>
         <?php endforeach ?>
       </section>