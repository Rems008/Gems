<?php

namespace Gems\App\controllers;

use Gems\App\models\BijouxCrud;
use Gems\App\models\PierreCrud;
use Gems\App\models\TailleCrud;
use Gems\App\models\MatiereCrud;
use Gems\App\models\CategorieCrud;
use Gems\App\controllers\AppController;


class AdminController extends AppController
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
  public function home()
  {
    // Vérification de l'authentification et du rôle
    if (!$this->verifRole()) {
      header('Location: index.php?entite=admin&action=nonAutorise');
      exit();
    }
    $view = 'admin/homeAdmin';
    $paramView = ['error'];
    $this->createView($view, $paramView);
  }

  public function bijoux()
  {
    // Vérification de l'authentification et du rôle
    if (!$this->verifRole()) {
      header('Location: index.php?entite=admin&action=nonAutorise');
      exit();
    }
    $view = 'admin/homeBijoux';
    $paramView = ['error'];
    $this->createView($view, $paramView);
  }

  public function createBijoux()
  {
    // Vérification de l'authentification et du rôle
    if (!$this->verifRole()) {
      header('Location: index.php?entite=admin&action=nonAutorise');
      exit();
    }
    $view = 'admin/createBijoux';
    $paramView = ['error'];
    $this->createView($view, $paramView);
  }

  public function listBijouxByCategorie()
  {
    // Vérification de l'authentification et du rôle
    if (!$this->verifRole()) {
      header('Location: index.php?entite=admin&action=nonAutorise');
      exit();
    }
    // Récupérer l'identifiant de la catégorie depuis l'URL
    $categorieId = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

    // Récupérer les bijoux de la catégorie spécifiée
    $model = new bijouxCrud;
    $bijoux = $model->getBijouxByIdCategorie($categorieId);

    // Passer les bijoux à la vue
    $view = 'admin/gestionBijouxByCategorie';
    $paramView = [
      'bijoux' => $bijoux
    ];
    $this->createView($view, $paramView);
  }

  public function updateBijoux()
  {
    // Vérification de l'authentification et du rôle
    if (!$this->verifRole()) {
      header('Location: index.php?entite=admin&action=nonAutorise');
      exit();
    }
    $categorieModel = new CategorieCrud();
    $tabCat = $categorieModel->getAllCategorie();

    $matiereModel = new MatiereCrud();
    $tabMatiere = $matiereModel->getAllMatiere();

    $pierreModel = new PierreCrud();
    $tabPierre = $pierreModel->getAllPierre();

    $tailleModel = new TailleCrud();
    $tabTaille = $tailleModel->getAllTaille();

    $view = 'admin/updateBijoux';
    $paramView = [
      'error' => '',
      'tabCat' => $tabCat,
      'tabPierre' => $tabPierre,
      'tabMatiere' => $tabMatiere,
      'tabTaille' => $tabTaille,
    ];
    $this->createView($view, $paramView);
  }

  public function categorie()
  {
    // Vérification de l'authentification et du rôle
    if (!$this->verifRole()) {
      header('Location: index.php?entite=admin&action=nonAutorise');
      exit();
    }
    $view = 'admin/gestionCategorie';
    $paramView = ['error'];
    $this->createView($view, $paramView);
  }

  public function createCategorie()
  {
    // Vérification de l'authentification et du rôle
    if (!$this->verifRole()) {
      header('Location: index.php?entite=admin&action=nonAutorise');
      exit();
    }
    $view = 'admin/createCategorie';
    $paramView = ['error'];
    $this->createView($view, $paramView);
  }

  public function updateCategorie()
  {
    // Vérification de l'authentification et du rôle
    if (!$this->verifRole()) {
      header('Location: index.php?entite=admin&action=nonAutorise');
      exit();
    }
    $view = 'admin/updateCategorie';
    $paramView = ['error'];
    $this->createView($view, $paramView);
  }

  public function matiere()
  {
    // Vérification de l'authentification et du rôle
    if (!$this->verifRole()) {
      header('Location: index.php?entite=admin&action=nonAutorise');
      exit();
    }
    $view = 'admin/gestionMatiere';
    $paramView = ['error'];
    $this->createView($view, $paramView);
  }

  public function createMatiere()
  {
    // Vérification de l'authentification et du rôle
    if (!$this->verifRole()) {
      header('Location: index.php?entite=admin&action=nonAutorise');
      exit();
    }
    $view = 'admin/createMatiere';
    $paramView = ['error'];
    $this->createView($view, $paramView);
  }

  public function updateMatiere()
  {
    // Vérification de l'authentification et du rôle
    if (!$this->verifRole()) {
      header('Location: index.php?entite=admin&action=nonAutorise');
      exit();
    }
    $view = 'admin/updateMatiere';
    $paramView = ['error'];
    $this->createView($view, $paramView);
  }

  public function pierre()
  {
    // Vérification de l'authentification et du rôle
    if (!$this->verifRole()) {
      header('Location: index.php?entite=admin&action=nonAutorise');
      exit();
    }
    $view = 'admin/gestionPierre';
    $paramView = ['error'];
    $this->createView($view, $paramView);
  }

  public function createPierre()
  {
    // Vérification de l'authentification et du rôle
    if (!$this->verifRole()) {
      header('Location: index.php?entite=admin&action=nonAutorise');
      exit();
    }
    $view = 'admin/createPierre';
    $paramView = ['error'];
    $this->createView($view, $paramView);
  }

  public function updatePierre()
  {
    // Vérification de l'authentification et du rôle
    if (!$this->verifRole()) {
      header('Location: index.php?entite=admin&action=nonAutorise');
      exit();
    }
    $view = 'admin/updatePierre';
    $paramView = ['error'];
    $this->createView($view, $paramView);
  }

  public function taille()
  {
    // Vérification de l'authentification et du rôle
    if (!$this->verifRole()) {
      header('Location: index.php?entite=admin&action=nonAutorise');
      exit();
    }
    $view = 'admin/gestionTaille';
    $paramView = ['error'];
    $this->createView($view, $paramView);
  }

  public function createTaille()
  {
    // Vérification de l'authentification et du rôle
    if (!$this->verifRole()) {
      header('Location: index.php?entite=admin&action=nonAutorise');
      exit();
    }
    $view = 'admin/createTaille';
    $paramView = ['error'];
    $this->createView($view, $paramView);
  }

  public function updateTaille()
  {
    // Vérification de l'authentification et du rôle
    if (!$this->verifRole()) {
      header('Location: index.php?entite=admin&action=nonAutorise');
      exit();
    }
    $view = 'admin/updateTaille';
    $paramView = ['error'];
    $this->createView($view, $paramView);
  }

  public function user()
  {
    // Vérification de l'authentification et du rôle
    if (!$this->verifRole()) {
      header('Location: index.php?entite=admin&action=nonAutorise');
      exit();
    }
    $view = 'admin/gestionUser';
    $paramView = ['error'];
    $this->createView($view, $paramView);
  }

  public function updateUser()
  {
    // Vérification de l'authentification et du rôle
    if (!$this->verifRole()) {
      header('Location: index.php?entite=admin&action=nonAutorise');
      exit();
    }
    $view = 'admin/updateUser';
    $paramView = ['error'];
    $this->createView($view, $paramView);
  }

  public function nonAutorise()
  {
    $view = 'user/nonAutorise';
    $paramView = ['error'];
    $this->createView($view, $paramView);
  }
}
