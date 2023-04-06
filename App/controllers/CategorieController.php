<?php

namespace Gems\App\controllers;

use Gems\App\models\CategorieCrud;
use Gems\App\controllers\AppController;


class CategorieController extends AppController
{
  public function list()
  {
    $model = new CategorieCrud();
    $tabCat = $model->getAllCategorie();
    $view = 'admin/gestionCategorie';
    $paramView = [
      'error' => '',
      'tabCat' => $tabCat,
    ];
    $this->createView($view, $paramView);
  }

  public function create()
  {
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
      $view = 'admin/createCategorie';
      $paramView = ['error'];
      $this->createView($view, $paramView);
    } else {
      $model = new CategorieCrud();
      $model->createCategorie();
      $tabCat = $model->getAllCategorie();
      $view = 'admin/gestionCategorie';
      $paramView = [
        'error' => '',
        'tabCat' => $tabCat,
      ];
      $this->createView($view, $paramView);
      exit();
    }
  }

  public function categorie()
  {
    $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
    $model = new CategorieCrud();
    $cat = $model->getCategorieById($id);

    $view = 'admin/ficheCategorie';
    $paramView = ['categorie' => $cat, 'error' => ''];
    $this->createView($view, $paramView);
  }

  public function update($id, $cat)
  {
    $model = new CategorieCrud();
    $model->updateCategorie($id, $cat);
    $tabCat = $model->getAllCategorie();
    $view = 'admin/listCategorie';
    $paramView = [
      'error' => '',
      'tabCat' => $tabCat,
    ];
    $this->createView($view, $paramView);
    // header('Location: index.php?entite=categorie&action=list');
    exit();
  }

  public function delete()
  {
    $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
    $model = new CategorieCrud();
    $categorie = $model->getCategorieById($id);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $model->deleteCategorie($id);
      header('Location: index.php?entite=categorie&action=list');
      exit();
    }

    if (!$categorie) {
      header('Location: index.php?entite=categorie&action=list');
      exit();
    }
  }


  // public function delete()
  // {
  //   $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
  //   $model = new CategorieCrud();
  //   $model = $model->deleteCategorie($id);

  //   header('Location: index.php?entite=categorie&action=list');
  //   exit();
  // }
}
