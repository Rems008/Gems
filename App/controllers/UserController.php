<?php

namespace Gems\App\controllers;

use Gems\App\models\UserCrud;
use Gems\App\controllers\AppController;

class UserController extends AppController
{
  public function verif()
  {
    // vérification du formaulaire de login
    try {
      // appel de la fonction de vérification des données de connexion
      $model = new UserCrud();
      $model->verifUser();    // leve des EXception
      // on est logger
      header('Location: index.php');  // demande de redirection au navigateur
      exit();
    } catch (\Exception $err) {
      // erreur d'authentification
      $paramView = ['error' => $err->getMessage()];
      $this->createView('user/loginUser', $paramView);
    }
  }

  public function create()
  {
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
      // envoi du formulaire
      $view = 'user/createUser';
      $paramView = ['error' => ''];
      $this->createView($view, $paramView);
    } else {
      $model = new UserCrud();
      $model->createNewUser();
      // traitement des informations
      $view = 'user/loginUser';
      $paramView = ['error' => ''];
      $this->createView($view, $paramView);
      exit();
    }
  }

  public function login()
  {
    $paramView = ['error' => ''];
    $this->createView('user/loginUser', $paramView);
  }

  public function logout()
  {
    session_destroy();
    header('Location: index.php');
    exit();
  }

  public function update($id, $user)
  {
    $model = new UserCrud();
    $model->updateUser($id, $user);
    $paramView = ['error' => ''];
    $this->createView('user/accountUser', $paramView);
    exit();
  }

  public function delete($id, $user)
  {
    $model = new UserCrud();
    $model->deleteUser($id, $user);
    header('Location: index.php');
    exit();
  }
}
