<?php

namespace Gems\App\controllers;

use Gems\App\models\MatiereCrud;
use Gems\App\controllers\AppController;

class MatiereController extends AppController
{
  public function list()
  {
    $model = new MatiereCrud();
    $tabMatiere = $model->getAllMatiere();
    $view = 'admin/gestionMatiere';
    $paramView = [
      'error' => '',
      'tabMatiere' => $tabMatiere,
    ];
    $this->createView($view, $paramView);
  }

  public function create()
  {
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
      $view = 'admin/createMatiere';
      $paramView = ['error' => ''];
      $this->createView($view, $paramView);
    } else {
      $model = new MatiereCrud();
      $model->createMatiere();
      $tabMatiere = $model->getAllMatiere();
      $view = 'admin/gestionMatiere';
      $paramView = [
        'error' => '',
        'tabMatiere' => $tabMatiere,
      ];
      $this->createView($view, $paramView);
      exit();
    }
  }

  public function matiere()
  {
    $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
    $model = new MatiereCrud();
    $matiere = $model->getMatiereById($id);

    $view = 'admin/ficheMatiere';
    $paramView = ['matiere' => $matiere, 'error' => ''];
    $this->createView($view, $paramView);
  }

  public function update($id, $matiere)
  {
    $model = new MatiereCrud();
    $model->updateMatiere($id, $matiere);
    header('Location: index.php?entite=matiere&action=list');
    exit();
  }

  public function delete()
  {
    $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
    $model = new MatiereCrud();
    $model = $model->deleteMatiere($id);
    header('Location: index.php?entite=matiere&action=list');
    exit();
  }
}
