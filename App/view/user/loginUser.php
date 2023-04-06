   <style>
     .header-user {
       background-image: url(App/src/img/Image_Gems_Bijoux_Atelier_2.png);
       height: 110vh;
       width: 100vw;
       background-size: cover;
       background-repeat: no-repeat;
       background-position: 55%;
       background-position-y: 50px;
     }

     .nav-container {
       height: 20px;
     }

     .nav-titre {
       background: var(--color-tertiaire);
     }

     .section-user {
       display: flex;
       justify-content: center;
       background: rgba(217, 217, 217, 0.85);
       height: 110vh;
     }

     .form-title {
       font-style: normal;
       font-weight: 400;
       font-size: 32px;
       line-height: 59px;
       text-align: center;
       margin: 160px 0 10px;
     }

     .form-user label,
     .lien {
       font-size: 14px;
       display: inline-block;
       width: 160px;
       text-align: center;
       padding-left: 30px;
       margin-bottom: 10px;
     }

     .form-user input {
       display: block;
       width: 200px;
       text-align: center;
       border: none;
       border-bottom: 1px solid var(--color-principal);
       margin-bottom: 20px;
       background: inherit;
     }

     .etoile-form {
       color: var(--color-secondaire);
     }

     .lien a {
       text-decoration: none;
       font-family: 'Siemreap';
       font-style: normal;
       font-weight: 400;
       font-size: 14px;
       line-height: 46px;
       text-align: center;
       align-items: center;
       color: var(--color-principal);
       cursor: pointer;
     }

     .lien a:hover {
       color: var(--color-secondaire);
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

       .nav-container {
         height: 105px;
       }

       .nav-menu {
         backdrop-filter: none;
       }
     }
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
       <div>
         <h2 class="form-title">Mon Compte</h2>
         <form class="form-user" method="post" action="index.php?entite=user&action=verif">
           <label for="id-email"><span class="etoile-form">*</span>Email</label>
           <div class="error"><?php if ($error) : ?>
               <?= $error ?>
             <?php endif ?></div>
           <input type="email" id="id-email" name="email" autofocus>
           <label for="id-mdp"><span class="etoile-form">*</span>Mot de passe</label>
           <input type="password" id="id-mdp" name="mdp">
           <div class="lien">
             <a href="#">
               Mot de passe oublié ?
             </a>
             <a href="index.php?entite=user&action=create">
               INSCRIPTION
             </a>
             <button class="btn-form-user">CONNEXION</button>
           </div>
         </form>
       </div>
     </section>
     </form>
   </header>