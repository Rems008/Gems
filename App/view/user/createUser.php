   <style>
     .header-user {
       background-image: url(App/src/img/Image_Gems_Bijoux_Atelier_2.png);
       height: 130vh;
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
       height: 130vh;
     }

     .form-title {
       font-style: normal;
       font-weight: 400;
       font-size: 32px;
       line-height: 59px;
       text-align: center;
       margin: 160px 0 10px;
     }

     .form-user label {
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
       margin-bottom: 10px;
       background: inherit;
     }

     .etoile-form {
       color: var(--color-secondaire);
     }

     .btn-form-createUser {
       width: 143px;
       height: 47px;
       margin: 10px 0 10px 30px;
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

     .btn-form-createUser:hover {
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
         <form class="form-user" method="post" action="index.php?entite=user&action=create">
           <label for="id-prenom"><span class="etoile-form">*</span>Prénom</label>
           <input type="text" id="id-prenom" name="prenom">
           <label for="id_nom"><span class="etoile-form">*</span>Nom</label>
           <input type="text" id="id-nom" name="nom">
           <label for="id-email"><span class="etoile-form">*</span>Email</label>
           <input type="email" id="id-email" name="email">
           <label for="id-mdp"><span class="etoile-form">*</span>Mot de passe</label>
           <input type="password" id="id-mdp" name="mdp">
           <label for="id-adresse"><span class="etoile-form">*</span>Adresse</label>
           <input type="text" id="id-adresse" name="adresse">
           <label for="id-code-postal"><span class="etoile-form">*</span>Code postal</label>
           <input type="text" id="id-code-postal" name="code_postal">
           <label for="id-telephone"><span class="etoile-form">*</span>Numéro de téléphone</label>
           <input type="text" id="id-telephone" name="telephone">
           <button class="btn-form-createUser">INSCRIPTION</button>
         </form>
       </div>
     </section>
     </form>
   </header>