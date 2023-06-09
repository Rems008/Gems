<?php

namespace Gems\App\controllers;

use Gems\App\models\Taille;
use Gems\App\models\TailleCrud;
use Gems\App\controllers\AppController;


class TailleController extends AppController
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
    if (!$this->verifRole()) {
      header('Location: index.php?entite=admin&action=nonAutorise');
      exit();
    }

    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
      $view = 'admin/createTaille';
      $paramView = ['error'];
      $this->createView($view, $paramView);
    } else {
      $model = new TailleCrud();
      $model->createTaille();
      header('Location: index.php?entite=taille&action=list');
      exit();
    }
  }

  public function taille()
  {
    if (!$this->verifRole()) {
      header('Location: index.php?entite=admin&action=nonAutorise');
      exit();
    }

    $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

    $model = new TailleCrud();
    $taille = $model->getTailleById($id);

    $view = 'admin/updateTaille';
    $paramView = ['taille' => $taille, 'error' => ''];
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

    $taille = new Taille();
    $taille->setNbr($nom);

    $model = new TailleCrud();
    $model->updateTailleById($taille, $id);

    header('Location: index.php?entite=taille&action=list');
    exit();
  }

  public function delete()
  {
    if (!$this->verifRole()) {
      header('Location: index.php?entite=admin&action=nonAutorise');
      exit();
    }

    $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
    $model = new TailleCrud();
    $model = $model->deleteTaille($id);
    header('Location: index.php?entite=taille&action=list');
    exit();
  }
}
