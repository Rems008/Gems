<nav>
  <div class="nav-container">
    <div class="nav-titre">
      <div class="nav-icon-left">
        <a href="#" class="icon-burger">
          <span class="burger material-symbols-outlined"> menu </span>
        </a>
        <?php
        if ($_SESSION['role'] === 'visiteur') : ?>
          <a href="index.php?entite=user&action=login" class="icon">
            <span class="material-symbols-outlined">
              person_off
            </span>
          </a>
        <?php else : ?>
          <a href="index.php?entite=user&action=logout" class="icon">
            <span class="material-symbols-outlined"> person </span>
          </a>
        <?php endif; ?>
      </div>
      <div class="nav-container-titre">
        <h1 class="titre">GEMS</h1>
      </div>
      <div class="nav-icon-right">
        <!-- <a href="#" class="icon">
          <span class="material-symbols-outlined"> search </span>
        </a> -->
        <a href="#" class="icon">
          <span class="material-symbols-outlined"> local_mall </span>
        </a>
      </div>
    </div>
    <!-- <form class="recherche" action="#" method="#">
              <input
                class="recherche-loupe"
                type="text"
                placeholder="Recherche"
              />
              <div class="recherche-icon-cross">
                <img
                  src="./public/icon/Image_Gems_Bijoux_Atelier_Clear_Button.png"
                  alt="icon cross"
                />
              </div>
            </form> -->
    <div class="nav-menu">
      <a href="index.php" aria-current="page">Accueil</a>
      <a href="index.php?entite=bijoux&action=listBijouxByCategorie&id=1">Bagues</a>
      <a href="index.php?entite=bijoux&action=listBijouxByCategorie&id=2">Bracelets</a>
      <a href="index.php?entite=bijoux&action=listBijouxByCategorie&id=3">Colliers</a>
      <a href="index.php?entite=bijoux&action=listBijouxByCategorie&id=4">Boucles d'oreilles</a>
      <span class="ligne"></span>
      <a href="#">Nos conseils</a>
      <span class="ligne"></span>
      <a href="#">Notre histoire</a>
      <span class="ligne"></span>
      <a href="#">Nous contacter</a>
      <?php if ($_SESSION['role'] === 'admin') : ?>
        <a href="index.php?entite=admin&action=home">Admin</a>
      <?php elseif ($_SESSION['role'] === 'client') : ?>
        <a href="index.php?entite=user&action=account">Mon Compte</a>
      <?php endif; ?>
    </div>
  </div>
</nav>
<?php if ($_SESSION['role'] === 'client' | $_SESSION['role'] === 'admin') : ?>
  <h6 class="nav-connect">Bonjour : <?= $_SESSION['prenom_utilisateur']; ?></h6>
<?php endif; ?>