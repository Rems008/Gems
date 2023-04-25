   </style>
   <header class="header-base header-user">
     <section class="header">
       <div class="bandeau">
         <h6 class="bandeau-text">
           LIVRAISON OFFERTE A PARTIR DE 300 € EN FRANCE MÉTROPOLITAINE
         </h6>
       </div>
       <?php include_once 'App/include/nav.php'; ?>
     </section>
     <section class="section-user">
       <div class="div-section-user">
         <h1 class="form-title">Mon Compte GEMS</h1>
         <form class="form-user" method="post" action="index.php?entite=user&action=verif">
           <label for="id-email"><span class="etoile-form">*</span>Email</label>
           <div class="error"><?php if ($error) : ?>
               <?= $error ?>
             <?php endif ?></div>
           <input type="email" id="id-email" name="email" autofocus>
           <label for="id-mdp"><span class="etoile-form">*</span>Mot de passe</label>
           <div class="icon-mdp">
             <input type="password" id="id-mdp" name="mdp">
           </div>
           <div class="lien-loginUser">
             <a href="#">
               Mot de passe oublié ?
             </a>
             <a href="index.php?entite=user&action=create">
               INSCRIPTION
             </a>
             <button class="btn-form btn-loginUser">CONNEXION</button>
           </div>
         </form>
       </div>
     </section>
   </header>