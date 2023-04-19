<?php

namespace Gems\App\controllers;

use Gems\App\models\MatiereCrud;
use Gems\App\controllers\AppController;
use Gems\App\models\Matiere;

class MatiereController extends AppController
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
    if (!$this->verifRole()) {
      header('Location: index.php?entite=admin&action=nonAutorise');
      exit();
    }

    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
      $view = 'admin/createMatiere';
      $paramView = ['error'];
      $this->createView($view, $paramView);
    } else {
      $model = new MatiereCrud();
      $model->createMatiere();
      header('Location: index.php?entite=matiere&action=list');
      exit();
    }
  }

  public function matiere()
  {
    if (!$this->verifRole()) {
      header('Location: index.php?entite=admin&action=nonAutorise');
      exit();
    }

    $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
    $model = new MatiereCrud();
    $matiere = $model->getMatiereById($id);

    $view = 'admin/updateMatiere';
    $paramView = ['matiere' => $matiere, 'error' => ''];
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

    $matiere = new Matiere();
    $matiere->setNomMatiere($nom);

    $model = new MatiereCrud();
    $model->updateMatiereById($matiere, $id);

    header('Location: index.php?entite=matiere&action=list');
    exit();
  }

  public function delete()
  {
    if (!$this->verifRole()) {
      header('Location: index.php?entite=admin&action=nonAutorise');
      exit();
    }

    $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
    $model = new MatiereCrud();
    $model = $model->deleteMatiere($id);
    header('Location: index.php?entite=matiere&action=list');
    exit();
  }
}
