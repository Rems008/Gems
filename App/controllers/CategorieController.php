<?php

namespace Gems\App\controllers;

use Gems\App\models\Categorie;
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
      header('Location: index.php?entite=categorie&action=list');
      exit();
    }
  }

  public function categorie()
  {
    $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

    $model = new CategorieCrud();
    $cat = $model->getCategorieById($id);

    $view = 'admin/updateCategorie';
    $paramView = ['cat' => $cat, 'error' => ''];
    $this->createView($view, $paramView);
  }

  public function update()
  {
    $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
    $nom = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_SPECIAL_CHARS);

    $cat = new Categorie();
    $cat->setNomCategorie($nom);

    $model = new CategorieCrud();
    $model->updateCategorieById($cat, $id);

    header('Location: index.php?entite=categorie&action=list');
    exit();
  }


  public function delete()
  {
    $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

    $model = new CategorieCrud();
    $model = $model->deleteCategorie($id);

    header('Location: index.php?entite=categorie&action=list');
    exit();
  }
}
