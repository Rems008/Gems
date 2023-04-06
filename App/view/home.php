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
        <?php
        if (isset($_SESSION['nom'])) {
          // connecté
          echo '<span>Bonjour : ' . $_SESSION['nom'] . ' ' . $_SESSION['prenom'] . '</span><br>';
          echo '<span>Déconnexion : <a href="index.php?entite=user&action=logout" class="btn btn-primary btn-sm">Déconnexion</a></span><br>';
        }
        ?>
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
          <h2 class="categorie-titre">NOS Bijoux</h2>
          <p class="categorie-p">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae quis
            at accusantium ut voluptas temporibus a.
          </p>
        </div>
        <div class="card">
          <article class="card-article">
            <img class="card-img" src="App/src/img/<?= $bijou['image_bijoux']; ?>" alt="" />
            <h5 class="card-titre"><?= $bijou['nom_bijoux']; ?></h5>
            <p class="card-p"><?= $bijou['description']; ?>
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
          </article>
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