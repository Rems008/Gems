<?php

require_once "./App/Db/Dao.php";
require_once "./App/models/CategorieCrud.php";
require_once "./App/models/MatiereCrud.php";
require_once "./App/models/PierreCrud.php";
require_once "./App/models/TailleCrud.php";
require_once "./App/models/BijouxCrud.php";

use Gems\App\models\BijouxCrud;
use Gems\App\models\PierreCrud;
use Gems\App\models\TailleCrud;
use Gems\App\models\MatiereCrud;
use Gems\App\models\CategorieCrud;

// Création d'une instance de la classe CategorieCrud
$categorieCrud = new CategorieCrud();
$matiereCrud = new MatiereCrud();
$pierreCrud = new PierreCrud();
$tailleCrud = new TailleCrud();
$bijouxCrud = new BijouxCrud();

// Récupération de toutes les catégories de la base de données
$tabCat = $categorieCrud->getAllCategorie();
$tabMatiere = $matiereCrud->getAllMatiere();
$tabPierre = $pierreCrud->getAllPierre();
$tabTaille = $tailleCrud->getAllTaille();
// $tabBijoux = $bijouxCrud->getAllBijoux();

// Parcours des catégories et affichage de leurs noms
foreach ($tabCat as $categorie) {
  echo $categorie['nom_categorie'] . '<br>';
}
foreach ($tabMatiere as $matiere) {
  echo $matiere['nom_matiere'] . '<br>';
}
foreach ($tabPierre as $pierre) {
  echo $pierre['nom_pierre'] . '<br>';
}
foreach ($tabTaille as $taille) {
  echo $taille['nombre_taille'] . '<br>';
}
// foreach ($tabBijoux as $bijoux) {
//   echo $bijoux->getNom() . '<br>';
// }
