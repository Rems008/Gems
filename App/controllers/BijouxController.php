<?php

namespace Gems\App\controllers;

use Gems\App\models\BijouxCrud;
use Gems\App\models\PierreCrud;
use Gems\App\models\TailleCrud;
use Gems\App\models\MatiereCrud;
use Gems\App\models\CategorieCrud;
use Gems\App\controllers\AppController;

class BijouxController extends AppController
{
  public function list()
  {
    $model = new BijouxCrud();
    $tabBijoux = $model->getAllBijoux();
    $view = 'bijoux/listBijoux';
    $paramView = [
      'error' => '',
      'tabBijoux' => $tabBijoux,
    ];
    $this->createView($view, $paramView);
  }

  public function listbijoux()
  {
    $model = new bijouxCrud;
    $modelCat = new categorieCrud;

    $categories = $modelCat->getAllCategorie();

    $tabByCat = [];
    foreach ($categories as $category) {
      $bijoux = $model->getBijouxByIdCategorie($category['id_categorie']);
      $tabByCat[$category['nom_categorie']] = $bijoux;
    }

    $view = 'bijoux/listBijoux';
    $paramView = [
      'error' => '',
      'tabByCat' => $tabByCat
    ];
    $this->createView($view, $paramView);
  }

  // public function listByCategorie()
  // {
  //   $model = new bijouxCrud;
  //   $modelCat = new categorieCrud;

  //   $categories = $modelCat->getAllCategorie();

  //   $tabByCat = [];
  //   foreach ($categories as $category) {
  //     $bijoux = $model->getBijouxByIdCategorie($category['id_categorie']);
  //     $tabByCat[$category['nom_categorie']] = $bijoux;
  //   }

  //   $view = 'bijoux/listcategorie';
  //   $paramView = [
  //     'error' => '',
  //     'tabByCat' => $tabByCat
  //   ];
  //   $this->createView($view, $paramView);
  // }

  public function listBijouxByCategorie()
  {
    // Récupérer l'identifiant de la catégorie depuis l'URL
    $categorieId = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

    // Récupérer les bijoux de la catégorie spécifiée
    $model = new bijouxCrud;
    $bijoux = $model->getBijouxByCategorie($categorieId);

    // Passer les bijoux à la vue
    $view = 'bijoux/listBijouxByCategorie';
    $paramView = [
      'bijoux' => $bijoux
    ];
    $this->createView($view, $paramView);
  }


  public function create()
  {
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
      // envoi du formulaire

      // Récupérer toutes les catégories
      $categorieModel = new CategorieCrud();
      $tabCat = $categorieModel->getAllCategorie();

      $matiereModel = new MatiereCrud();
      $tabMatiere = $matiereModel->getAllMatiere();

      $pierreModel = new PierreCrud();
      $tabPierre = $pierreModel->getAllPierre();

      $tailleModel = new TailleCrud();
      $tabTaille = $tailleModel->getAllTaille();
      // Afficher le formulaire de création avec une liste déroulante 
      $view = 'admin/createBijoux';
      $paramView = [
        'error' => '',
        'tabCat' => $tabCat,
        'tabPierre' => $tabPierre,
        'tabMatiere' => $tabMatiere,
        'tabTaille' => $tabTaille,
      ];
      $this->createView($view, $paramView);
    } else {
      $filename = 'App/src/img/' . $_FILES['image']['name'];
      if (move_uploaded_file($_FILES['image']['tmp_name'], $filename)) {
        $model = new BijouxCrud();
        $model->createBijoux();
      }
      header('Location: index.php?entite=bijoux&action=list');
      exit();
    }
  }

  public function see()
  {
    $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

    $model = new BijouxCrud();
    $bijoux = $model->getBijouxById($id);

    $view = 'bijoux/ficheBijoux';
    $paramView = ['bijoux' => $bijoux, 'error' => ''];
    $this->createView($view, $paramView);
  }

  public function update($id, $bijoux)
  {
    $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

    $model = new BijouxCrud();
    $model->updateBijoux($id, $bijoux);

    header('Location: index.php?entite=bijoux&action=list');
    exit();
  }

  public function delete()
  {
    $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

    $model = new BijouxCrud();
    $model = $model->deleteBijoux($id);

    header('Location: index.php?entite=bijoux&action=list');
    exit();
  }
}
