<?php

namespace Gems\App\controllers;

use Gems\App\models\Categorie;
use Gems\App\models\CategorieCrud;
use Gems\App\controllers\AppController;


class CategorieController extends AppController
{
  private function verifRole()
  {
    // Vérification de l'authentification et du rôle
    if (
      !isset($_SESSION['role']) || $_SESSION['role'] !== 'admin'
    ) {
      return false;
    }
    return true;
  }

  public function list()
  {
    if (!$this->verifRole()) {
      header('Location: index.php?entite=admin&action=nonAutorise');
      exit();
    }

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
    if (!$this->verifRole()) {
      header('Location: index.php?entite=admin&action=nonAutorise');
      exit();
    }

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
    if (!$this->verifRole()) {
      header('Location: index.php?entite=admin&action=nonAutorise');
      exit();
    }

    $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

    $model = new CategorieCrud();
    $cat = $model->getCategorieById($id);

    $view = 'admin/updateCategorie';
    $paramView = ['cat' => $cat, 'error' => ''];
    $this->createView($view, $paramView);
  }

  public function update()
  {
    if (!$this->verifRole()) {
      header('Location: index.php?entite=admin&action=nonAutorise');
      exit();
    }

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
    if (!$this->verifRole()) {
      header('Location: index.php?entite=admin&action=nonAutorise');
      exit();
    }

    $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

    $model = new CategorieCrud();
    $model = $model->deleteCategorie($id);

    header('Location: index.php?entite=categorie&action=list');
    exit();
  }
}
