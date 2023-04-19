<?php

namespace Gems\App\controllers;

use Gems\App\models\Pierre;
use Gems\App\models\PierreCrud;
use Gems\App\controllers\AppController;


class PierreController extends AppController
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
    if (!$this->verifRole()) {
      header('Location: index.php?entite=admin&action=nonAutorise');
      exit();
    }

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
    if (!$this->verifRole()) {
      header('Location: index.php?entite=admin&action=nonAutorise');
      exit();
    }

    $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
    $model = new PierreCrud();
    $pierre = $model->getPierreById($id);

    $view = 'admin/updatePierre';
    $paramView = ['pierre' => $pierre, 'error' => ''];
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

    $pierre = new Pierre();
    $pierre->setNomPierre($nom);

    $model = new PierreCrud();
    $model->updatePierreById($pierre, $id);

    header('Location: index.php?entite=pierre&action=list');
    exit();
  }

  public function delete()
  {
    if (!$this->verifRole()) {
      header('Location: index.php?entite=admin&action=nonAutorise');
      exit();
    }

    $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
    $model = new PierreCrud();
    $model = $model->deletePierre($id);
    header('Location: index.php?entite=pierre&action=list');
    exit();
  }
}
