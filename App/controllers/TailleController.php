<?php

namespace Gems\App\controllers;

use Gems\App\models\TailleCrud;
use Gems\App\controllers\AppController;


class TailleController extends AppController
{
  public function list()
  {
    $model = new TailleCrud();
    $tabTaille = $model->getAllTaille();
    $view = 'admin/gestionTaille';
    $paramView =
      [
        'error' => '',
        'tabTaille' => $tabTaille,
      ];
    $this->createView($view, $paramView);
  }

  public function create()
  {
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
      $view = 'admin/createTaille';
      $paramView = ['error' => ''];
      $this->createView($view, $paramView);
    } else {
      $model = new TailleCrud();
      $model->createTaille();
      $tabTaille = $model->getAllTaille();
      $view = 'admin/gestionTaille';
      $paramView = [
        'error' => '',
        'tabTaille' => $tabTaille
      ];
      $this->createView($view, $paramView);
      exit();
    }
  }

  public function taille()
  {
    $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
    $model = new TailleCrud();
    $taille = $model->getTailleById($id);

    $view = 'admin/ficheTaille';
    $paramView = ['taille' => $taille, 'error' => ''];
    $this->createView($view, $paramView);
  }

  public function update($id, $taille)
  {
    $model = new TailleCrud();
    $model->updateTaille($id, $taille);
    header('Location: index.php?entite=admin&action=list');
    exit();
  }

  public function delete()
  {
    $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
    $model = new TailleCrud();
    $model = $model->deleteTaille($id);
    header('Location: index.php?entite=taille&action=list');
    exit();
  }
}
