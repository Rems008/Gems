<?php

namespace Gems\App\controllers;

use Exception;
use Gems\App\models\User;
use Gems\App\models\UserCrud;
use Gems\App\controllers\AppController;

class UserController extends AppController
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

    $model = new UserCrud();
    $tabUser = $model->getAllUser();
    $view = 'admin/gestionUser';
    $paramView = [
      'error' => '',
      'tabUser' => $tabUser,
    ];
    $this->createView($view, $paramView);
  }

  public function verif()
  {
    // vérification du formaulaire de login
    try {
      // appel de la fonction de vérification des données de connexion
      $model = new UserCrud();
      $model->verifUser();    // leve des Exception
      // on est logger
      header('Location: index.php');  // demande de redirection au navigateur
      exit();
    } catch (\Exception $err) {
      // erreur d'authentification
      $view = 'user/loginUser';
      $paramView = ['error' => $err->getMessage()];
      $this->createView($view, $paramView);
    }
  }

  public function create()
  {
    $error = null;
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
      // envoi du formulaire
      $view = 'user/createUser';
      $paramView = ['error' => $error];
      $this->createView($view, $paramView);
      var_dump($paramView);
    } else {
      try {
        $model = new UserCrud();
        $model->createNewUser();
        header('Location: index.php?entite=user&action=login');
        exit();
      } catch (Exception $e) {
        $error = $e->getMessage();
        $view = 'user/createUser';
        $paramView = ['error' => $error];
        $this->createView($view, $paramView);
      }
    }
  }

  public function login()
  {
    $view = 'user/loginUser';
    $paramView = ['error' => ''];
    $this->createView($view, $paramView);
  }

  public function logout()
  {
    session_destroy();
    header('Location: index.php');
    exit();
  }


  public function user()
  {
    if (!$this->verifRole()) {
      header('Location: index.php?entite=admin&action=nonAutorise');
      exit();
    }

    $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

    $model = new UserCrud();
    $user = $model->getUserById($id);

    $view = 'admin/updateUser';
    $paramView = ['user' => $user, 'error' => ''];
    $this->createView($view, $paramView);
  }

  public function update()
  {
    if (!$this->verifRole()) {
      header('Location: index.php?entite=admin&action=nonAutorise');
      exit();
    }
    // Vérifier que les champs de formulaire sont valides
    try { {
        $model = new UserCrud();
        $model->updateUser();
      }
    } catch (\Exception $error) {
      echo $error->getMessage();
      $view = 'admin/updateUser';
      $paramView = ['error' => $error->getMessage()];
      $this->createView($view, $paramView);
    }

    header('Location: index.php?entite=user&action=list');
    exit();
  }

  public function delete()
  {
    if (!$this->verifRole()) {
      header('Location: index.php?entite=admin&action=nonAutorise');
      exit();
    }

    $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
    $model = new UserCrud();
    $model->deleteUser($id);

    header('Location: index.php?entite=user&action=list');
    exit();
  }

  public function contact()
  {
    $view = 'user/contact';
    $paramView = [''];
    $this->createView($view, $paramView);
  }

  public function faq()
  {
    $view = 'user/faq';
    $paramView = [''];
    $this->createView($view, $paramView);
  }
}
