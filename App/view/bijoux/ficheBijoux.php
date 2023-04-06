       <style>
         .header-listBijoux {
           width: 100vw;
           height: auto;
           background-size: cover;
           background-repeat: no-repeat;
           background-position: 55%;
           background-position-y: 30px;
         }

         .nav-titre {
           background: var(--color-tertiaire);
         }

         .page-title {
           font-style: normal;
           font-weight: 400;
           font-size: 32px;
           line-height: 59px;
           text-align: center;
           text-transform: uppercase;
         }

         .card {
           display: flex;
           flex-wrap: wrap;
           flex-direction: row;
           justify-content: center;
           margin-top: 130px;

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
           width: 70%;
           /* height: 100px; */
           margin-bottom: 15px;
         }

         .card-titre {
           font-family: var(--font-family-principal);
           color: var(--color-secondaire);
           cursor: default;
           font-size: 16px;
           text-transform: capitalize;
         }

         .card-p {
           padding: 20px;
           font-family: var(--font-family-secondaire);
           font-size: 12px;
           text-align: center;
           cursor: default;
         }

         .form-btn {
           width: 50%;
         }

         .btn-voir {
           width: 50%;
           height: auto;
           margin: 20px 20px 40px;
           padding: 5px;
           align-items: center;
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
         <section class="article">
           <div class="card">
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