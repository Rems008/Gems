<?php

namespace Gems\App\controllers;

use Gems\App\models\Bijoux;
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
    $view = 'home';
    $paramView = [
      'error' => '',
      'tabBijoux' => $tabBijoux,
    ];
    $this->createView($view, $paramView);
  }

  public function listBijoux()
  {
    $model = new bijouxCrud;
    $modelCat = new categorieCrud;

    $categories = $modelCat->getAllCategorie();

    $tabByCat = [];
    foreach ($categories as $category) {
      $bijoux = $model->getBijouxByIdCategorie($category->getIdCategorie());
      $tabByCat[$category->getNomCategorie()] = $bijoux;
    }

    $view = 'bijoux/listBijoux';
    $paramView = [
      'error' => '',
      'tabByCat' => $tabByCat
    ];
    $this->createView($view, $paramView);
  }

  public function listBijouxAdmin()
  {
    $model = new bijouxCrud;
    $modelCat = new categorieCrud;

    $categories = $modelCat->getAllCategorie();

    $tabByCat = [];
    foreach ($categories as $category) {
      $bijoux = $model->getBijouxByIdCategorie($category->getIdCategorie());
      $tabByCat[$category->getNomCategorie()] = $bijoux;
    }

    $view = 'admin/gestionAllBijoux';
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
  //     $bijoux = $model->getBijouxByIdCategorie($category->getIdCategorie());
  //     $tabByCat[$category->getNomCategorie()] = $bijoux;
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
    $bijoux = $model->getBijouxByIdCategorie($categorieId);

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
      header('Location: index.php?entite=bijoux&action=listBijouxAdmin');
      exit();
    }
  }

  public function bijoux()
  {
    $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

    $model = new BijouxCrud();
    $bijoux = $model->getBijouxById($id);

    $view = 'bijoux/ficheBijoux';
    $paramView = ['bijoux' => $bijoux, 'error' => ''];
    $this->createView($view, $paramView);
  }

  public function update()
  {
    $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
    $nom = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_SPECIAL_CHARS);
    // $description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_SPECIAL_CHARS);
    // $prix = filter_input(INPUT_POST, 'prix', FILTER_SANITIZE_SPECIAL_CHARS);
    // $filename = $_FILES['image']['name'];
    // $cat = filter_input(INPUT_POST, 'cat', FILTER_SANITIZE_SPECIAL_CHARS);
    // $matiere = filter_input(INPUT_POST, 'matiere', FILTER_SANITIZE_SPECIAL_CHARS);
    // $pierre = filter_input(INPUT_POST, 'pierre', FILTER_SANITIZE_SPECIAL_CHARS);
    // $taille = filter_input(INPUT_POST, 'taille', FILTER_SANITIZE_SPECIAL_CHARS);



    $bijoux = new Bijoux();
    $bijoux->setNomBijoux($nom);


    $model = new BijouxCrud();
    $model->updateBijouxById($bijoux, $id);

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
