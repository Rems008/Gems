    <header class="header-base header-home">
      <section class="header">
        <div class="bandeau">
          <h6 class="bandeau-text">
            LIVRAISON OFFERTE A PARTIR DE 300 € EN FRANCE MÉTROPOLITAINE
          </h6>
        </div>
        <?php include_once 'App/include/nav.php'; ?>
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
          <!-- <?php foreach ($bijoux as $bijou) : ?>
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
      <h3>445 €</h3>
            <a class="btn-voir" href="index.php?entite=bijoux&action=bijoux&id=25">VOIR</a>              </form>
            </article>
          <?php endforeach ?> -->
          <article class="card-article">
            <img class="card-img" src="App/src/img/Image_Gems_Bijoux_Atelier_Roma_3.jpg" alt="bijoux_gems_bague_collier_boucle_d_oreille_bracelet" />
            <h5 class="card-titre">BAGUE ROMA</h5>
            <p class="card-p">
              La bague Roma est la création ultime de GEMS, c'est le bijou favori de notre atelier!
            </p>
            <h3>599 €</h3>
            <a class="btn-voir" href="index.php?entite=bijoux&action=bijoux&id=23">VOIR</a>
          </article>
          </article>
          <article class="card-article">
            <img class="card-img" src="app/src/img/Image_Gems_Bijoux_Atelier_Roma.jpg" alt="bijoux_gems_bague_collier_boucle_d_oreille_bracelet" />
            <h5 class="card-titre">BAGUE NAPOLI</h5>
            <p class="card-p">
              La bague Napoli est la création ultime de GEMS, c'est le bijou favori de notre atelier!
            </p>
            <h3>445 €</h3>
            <a class="btn-voir" href="index.php?entite=bijoux&action=bijoux&id=25">VOIR</a>
          </article>
          </article>
          <article class="card-article">
            <img class="card-img" src="App/src/img/Image_Gems_Bijoux_Atelier_Roma_2.jpg" alt="bijoux_gems_bague_collier_boucle_d_oreille_bracelet" />
            <h5 class="card-titre">BAGUE FIRENZE</h5>
            <p class="card-p">
              La bague Firenze est la création ultime de GEMS, c'est le bijou favori de notre atelier!
            </p>
            <h3>379 €</h3>
            <a class="btn-voir" href="index.php?entite=bijoux&action=bijoux&id=26">VOIR</a>
          </article>
        </div>
      </section>
      <article class="banniere-img-un">
        <div class="banniere-img">
          <button class="btn-collection">ROMA</button>
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
            <img class="card-img" src="App/src/img/Image_Gems_Bijoux_Atelier_bracelet.jpg" alt="bijoux_gems_bague_collier_boucle_d_oreille_bracelet" />
            <h5 class="card-titre">BRACELETS ROMA</h5>
            <p class="card-p">
              Le bracelet Roma est la création ultime de GEMS, c'est le bijou favori de notre atelier
            </p>
            <h3>350 €</h3>
            <a class="btn-voir" href="index.php?entite=bijoux&action=bijoux&id=29">VOIR</a>
          </article>
          <article class="card-article">
            <img class="card-img" src="App/src/img/Image_Gems_Bijoux_Atelier_bracelet_4.jpg" alt="bijoux_gems_bague_collier_boucle_d_oreille_bracelet" />
            <h5 class="card-titre">BRACELETS NAPOLI</h5>
            <p class="card-p">
              Le bracelet Napoli est la création ultime de GEMS, c'est le bijou favori de notre atelier!
            </p>
            <h3>680 €</h3>
            <a class="btn-voir" href="index.php?entite=bijoux&action=bijoux&id=36">VOIR</a>
          </article>
          <article class="card-article">
            <img class="card-img" src="App/src/img/Image_Gems_Bijoux_Atelier_bracelet_Firenze.jpg" alt="bijoux_gems_bague_collier_boucle_d_oreille_bracelet" />
            <h5 class="card-titre">BRACELETS FIRENZE</h5>
            <p class="card-p">
              Le bracelet Firenze est la création ultime de GEMS, c'est le bijou favori de notre atelier!
            </p>
            <h3>678 €</h3>
            <a class="btn-voir" href="index.php?entite=bijoux&action=bijoux&id=37">VOIR</a>
          </article>
        </div>
      </section>
      <article class="banniere-img-deux">
        <div class="banniere-img">
          <button class="btn-collection">NAPOLI</button>
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
            <img class="card-img" src="App/src/img/Image_Gems_Bijoux_Atelier_collier.jpg" alt="bijoux_gems_bague_collier_boucle_d_oreille_bracelet" />
            <h5 class="card-titre">COLLIER ROMA</h5>
            <p class="card-p">
              Le collier Roma est la création ultime de GEMS, c'est le bijou favori de notre atelier!
            </p>
            <h3>766 €</h3>
            <a class="btn-voir" href="index.php?entite=bijoux&action=bijoux&id=28">VOIR</a>
          </article>
          <article class="card-article">
            <img class="card-img" src="App/src/img/Image_Gems_Bijoux_Atelier_collier_3.jpg" alt="bijoux_gems_bague_collier_boucle_d_oreille_bracelet" />
            <h5 class="card-titre">COLLIER NAPOLI</h5>
            <p class="card-p">
              Le collier Napoli est la création ultime de GEMS, c'est le bijou favori de notre atelier!
            </p>
            <h3>960 €</h3>
            <a class="btn-voir" href="index.php?entite=bijoux&action=bijoux&id=30">VOIR</a>
          </article>
          <article class="card-article">
            <img class="card-img" src="App/src/img/Image_Gems_Bijoux_Atelier_collier_2.jpg" alt="bijoux_gems_bague_collier_boucle_d_oreille_bracelet" />
            <h5 class="card-titre">COLLIER FIRENZE</h5>
            <p class="card-p">
              Le collier Firenze est la création ultime de GEMS, c'est le bijou favori de notre atelier!
            </p>
            <h3>789 €</h3>
            <a class="btn-voir" href="index.php?entite=bijoux&action=bijoux&id=32">VOIR</a>
          </article>
        </div>
      </section>
      <article class="banniere-img-trois">
        <div class="banniere-img">
          <button class="btn-collection">FIRENZE</button>
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
            <img class="card-img" src="App/src/img/Image_Gems_Bijoux_Atelier_boucle-doreille_1.jpg" alt="bijoux_gems_bague_collier_boucle_d_oreille_bracelet" />
            <h5 class="card-titre">BOUCLE D'OREILLE ROMA</h5>
            <p class="card-p">
              Les boucles d'oreilles Roma est la création ultime de GEMS, c'est le bijou favori de notre atelier!
            </p>
            <h3>1290 €</h3>
            <a class="btn-voir" href="index.php?entite=bijoux&action=bijoux&id=33">VOIR</a>
          </article>
          <article class="card-article">
            <img class="card-img" src="App/src/img/Image_Gems_Bijoux_Atelier_boucle-doreille_2.jpg" alt="bijoux_gems_bague_collier_boucle_d_oreille_bracelet" />
            <h5 class="card-titre">BOUCLE D'OREILLE NAPOLI</h5>
            <p class="card-p">
              Les boucles d'oreilles Napoli est la création ultime de GEMS, c'est le bijou favori de notre atelier!
            </p>
            <h3>985 €</h3>
            <a class="btn-voir" href="index.php?entite=bijoux&action=bijoux&id=34">VOIR</a>
          </article>
          <article class="card-article">
            <img class="card-img" src="App/src/img/Image_Gems_Bijoux_Atelier_boucle-doreille_3.jpg" alt="bijoux_gems_bague_collier_boucle_d_oreille_bracelet" />
            <h5 class="card-titre">BOUCLE D'OREILLE FIRENZE</h5>
            <p class="card-p">
              Les boucles d'oreilles Firenze est la création ultime de GEMS, c'est le bijou favori de notre atelier!
            </p>
            <h3>895 €</h3>
            <a class="btn-voir" href="index.php?entite=bijoux&action=bijoux&id=35">VOIR</a>
          </article>
        </div>
      </section>
      <article class="banniere-img-quatre">
        <div class="banniere-img">
          <button class="btn-collection">ATELIER</button>
        </div>
      </article>
    </main>