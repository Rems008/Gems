    <header class="header-base header-home">
      <section class="header">
        <div class="bandeau">
          <h6 class="bandeau-text">
            LIVRAISON OFFERTE A PARTIR DE 300 € EN FRANCE MÉTROPOLITAINE
          </h6>
        </div>
        <?php include_once 'App/include/nav.php'; ?>
        <!-- <video class="video">
          <source src="../../App/src/video/Gems_Bijoux_Atelier_Home.mp4" type="video/mp4" />
        </video> -->

      </section>
      <div class="btn-header">
        <form class="form_nos_bijoux" method="post" action="index.php?entite=bijoux&action=listBijoux">
          <button class="btn-nos-bijoux" name="nosBijoux">NOS BIJOUX</button>
        </form>
      </div>
    </header>
    <main>
      <section class="article">
        <div class="categorie">
          <h2 class="categorie-titre">NOS Bagues</h2>
          <p class="categorie-p">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae quis
            at accusantium ut voluptas temporibus a.
          </p>
        </div>
        <div class="card">
          <?php foreach ($bijoux as $bijou) : ?>
            <article class="card-article">
              <a class="card-lien" href="index.php?entite=bijoux&action=bijoux&id=<?= $bijou->getIdBijoux(); ?>">
                <img class="card-img" src="App/src/img/<?= $bijou->getImageName(); ?>" alt="bijoux_gems_bague_collier_boucle_d_oreille_bracelet" />
              </a>
              <h5 class="card-titre"><?= $bijou->getNomBijoux(); ?>
              </h5>
              <p class="card-p"><?= $bijou->getDescription(); ?>
              </p>
              <h3><?= $bijou->getPrix(); ?> €</h3>
              <form class="form-btn" method="post" action="index.php?entite=bijoux&action=bijoux&id=<?= $bijou->getIdBijoux(); ?>">
                <button class="btn-voir">VOIR</button>
              </form>
            </article>
          <?php endforeach ?>
          <!-- <article class="card-article">
            <img class="card-img" src="App/src/img/" alt="" />
            <h5 class="card-titre"></h5>
            <p class="card-p">
            </p>
            <button class="btn-voir">VOIR</button>
          </article>
          <article class="card-article">
            <img class="card-img" src="../../app/src/img/Image_Gems_Bijoux_Atelier_Roma.jpeg" alt="" />
            <h5 class="card-titre">ROMA</h5>
            <p class="card-p">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </p>
            <button class="btn-voir">VOIR</button>
          </article>
          <article class="card-article">
            <img class="card-img" src="../../app/src/img/Image_Gems_Bijoux_Atelier_Roma.jpeg" alt="" />
            <h5 class="card-titre">ROMA</h5>
            <p class="card-p">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </p>
            <button class="btn-voir">VOIR</button>
          </article> -->
        </div>
      </section>
      <article class="banniere-img-un">
        <div class="banniere-img">
          <button class="btn-collection">INDIA</button>
        </div>
      </article>
      <section class="article">
        <div class="categorie">
          <h2 class="categorie-titre">NOS BRACELETS</h2>
          <p class="categorie-p">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae quis
            at accusantium ut voluptas temporibus a.
          </p>
        </div>
        <div class="card">
          <article class="card-article">
            <img class="card-img" src="./public/Img/Image_Gems_Bijoux_Atelier_Roma.jpeg" alt="" />
            <h5 class="card-titre">ROMA</h5>
            <p class="card-p">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </p>
            <button class="btn-voir">VOIR</button>
          </article>
          <article class="card-article">
            <img class="card-img" src="./public/Img/Image_Gems_Bijoux_Atelier_Roma.jpeg" alt="" />
            <h5 class="card-titre">ROMA</h5>
            <p class="card-p">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </p>
            <button class="btn-voir">VOIR</button>
          </article>
          <article class="card-article">
            <img class="card-img" src="./public/Img/Image_Gems_Bijoux_Atelier_Roma.jpeg" alt="" />
            <h5 class="card-titre">ROMA</h5>
            <p class="card-p">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </p>
            <button class="btn-voir">VOIR</button>
          </article>
        </div>
      </section>
      <article class="banniere-img-deux">
        <div class="banniere-img">
          <button class="btn-collection">ANTIQUE</button>
        </div>
      </article>
      <section class="article">
        <div class="categorie">
          <h2 class="categorie-titre">NOS COLLIERS</h2>
          <p class="categorie-p">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae quis
            at accusantium ut voluptas temporibus a.
          </p>
        </div>
        <div class="card">
          <article class="card-article">
            <img class="card-img" src="./public/Img/Image_Gems_Bijoux_Atelier_Roma.jpeg" alt="" />
            <h5 class="card-titre">ROMA</h5>
            <p class="card-p">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </p>
            <button class="btn-voir">VOIR</button>
          </article>
          <article class="card-article">
            <img class="card-img" src="./public/Img/Image_Gems_Bijoux_Atelier_Roma.jpeg" alt="" />
            <h5 class="card-titre">ROMA</h5>
            <p class="card-p">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </p>
            <button class="btn-voir">VOIR</button>
          </article>
          <article class="card-article">
            <img class="card-img" src="./public/Img/Image_Gems_Bijoux_Atelier_Roma.jpeg" alt="" />
            <h5 class="card-titre">ROMA</h5>
            <p class="card-p">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </p>
            <button class="btn-voir">VOIR</button>
          </article>
        </div>
      </section>
      <article class="banniere-img-trois">
        <div class="banniere-img">
          <button class="btn-collection">CELTIQUE</button>
        </div>
      </article>
      <section class="article">
        <div class="categorie">
          <h2 class="categorie-titre">NOS BOUCLES D'OREILLES</h2>
          <p class="categorie-p">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae quis
            at accusantium ut voluptas temporibus a.
          </p>
        </div>
        <div class="card">
          <article class="card-article">
            <img class="card-img" src="./public/Img/Image_Gems_Bijoux_Atelier_Roma.jpeg" alt="" />
            <h5 class="card-titre">ROMA</h5>
            <p class="card-p">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </p>
            <button class="btn-voir">VOIR</button>
          </article>
          <article class="card-article">
            <img class="card-img" src="./public/Img/Image_Gems_Bijoux_Atelier_Roma.jpeg" alt="" />
            <h5 class="card-titre">ROMA</h5>
            <p class="card-p">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </p>
            <button class="btn-voir">VOIR</button>
          </article>
          <article class="card-article">
            <img class="card-img" src="./public/Img/Image_Gems_Bijoux_Atelier_Roma.jpeg" alt="" />
            <h5 class="card-titre">ROMA</h5>
            <p class="card-p">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </p>
            <button class="btn-voir">VOIR</button>
          </article>
        </div>
      </section>
      <article class="banniere-img-quatre">
        <div class="banniere-img">
          <button class="btn-collection">ATELIER</button>
        </div>
      </article>
    </main>