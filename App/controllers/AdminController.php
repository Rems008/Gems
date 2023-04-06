<?php

namespace Gems\App\controllers;

use Gems\App\controllers\AppController;
use Gems\App\models\BijouxCrud;


class AdminController extends AppController
{
  public function home()
  {
    $view = 'admin/homeAdmin';
    $paramView = ['error'];
    $this->createView($view, $paramView);
  }

  public function bijoux()
  {
    $view = 'admin/gestionBijoux';
    $paramView = ['error'];
    $this->createView($view, $paramView);
  }

  public function listBijouxByCategorie()
  {
    // Récupérer l'identifiant de la catégorie depuis l'URL
    $categorieId = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

    // Récupérer les bijoux de la catégorie spécifiée
    $model = new bijouxCrud;
    $bijoux = $model->getBijouxByCategorie($categorieId);

    // Passer les bijoux à la vue
    $view = 'admin/gestionBijouxByCategorie';
    $paramView = [
      'bijoux' => $bijoux
    ];
    $this->createView($view, $paramView);
  }

  public function categorie()
  {
    $view = 'admin/gestionCategorie';
    $paramView = ['error'];
    $this->createView($view, $paramView);
  }

  public function createCategorie()
  {
    $view = 'admin/createCategorie';
    $paramView = ['error'];
    $this->createView($view, $paramView);
  }

  public function updateCategorie()
  {
    $view = 'admin/updateCategorie';
    $paramView = ['error'];
    $this->createView($view, $paramView);
  }

  public function matiere()
  {
    $view = 'admin/gestionMatiere';
    $paramView = ['error'];
    $this->createView($view, $paramView);
  }

  public function createMatiere()
  {
    $view = 'admin/createMatiere';
    $paramView = ['error'];
    $this->createView($view, $paramView);
  }

  public function pierre()
  {
    $view = 'admin/gestionPierre';
    $paramView = ['error'];
    $this->createView($view, $paramView);
  }

  public function createPierre()
  {
    $view = 'admin/createPierre';
    $paramView = ['error'];
    $this->createView($view, $paramView);
  }

  public function taille()
  {
    $view = 'admin/gestionTaille';
    $paramView = ['error'];
    $this->createView($view, $paramView);
  }

  public function createTaille()
  {
    $view = 'admin/createTaille';
    $paramView = ['error'];
    $this->createView($view, $paramView);
  }

  public function user()
  {
    $view = 'admin/gestionUser';
    $paramView = ['error'];
    $this->createView($view, $paramView);
  }

  public function updateUser()
  {
    $view = 'admin/updateUser';
    $paramView = ['error'];
    $this->createView($view, $paramView);
  }
}
