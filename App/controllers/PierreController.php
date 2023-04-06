<?php

namespace Gems\App\controllers;

use Gems\App\models\PierreCrud;
use Gems\App\controllers\AppController;


class PierreController extends AppController
{
  public function list()
  {
    $model = new PierreCrud();
    $tabPierre = $model->getAllPierre();
    $view = 'admin/gestionPierre';
    $paramView =
      [
        'error' => '',
        'tabPierre' => $tabPierre,
      ];
    $this->createView($view, $paramView);
  }

  public function create()
  {
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
      $view = 'admin/createPierre';
      $paramView = ['error' => ''];
      $this->createView($view, $paramView);
    } else {
      $model = new PierreCrud();
      $model->createPierre();
      header('Location: index.php?entite=pierre&action=list');
      exit();
    }
  }

  public function pierre()
  {
    $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
    $model = new PierreCrud();
    $pierre = $model->getPierreById($id);

    $view = 'admin/fichePierre';
    $paramView = ['pierre' => $pierre, 'error' => ''];
    $this->createView($view, $paramView);
  }

  public function update($id, $pierre)
  {
    $model = new PierreCrud();
    $model->updatePierre($id, $pierre);
    header('Location: index.php?entite=pierre&action=list');
    exit();
  }

  public function delete()
  {
    $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
    $model = new PierreCrud();
    $model = $model->deletePierre($id);
    header('Location: index.php?entite=pierre&action=list');
    exit();
  }
}
