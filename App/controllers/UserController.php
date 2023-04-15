<?php

namespace Gems\App\controllers;

use Exception;
use Gems\App\models\User;
use Gems\App\models\UserCrud;
use Gems\App\controllers\AppController;

class UserController extends AppController
{
  public function list()
  {
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
      header('Location: index.php?entite=user&action=login');
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


  public function user()
  {
    $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

    $model = new UserCrud();
    $user = $model->getUserById($id);

    $view = 'admin/updateUser';
    $paramView = ['user' => $user, 'error' => ''];
    $this->createView($view, $paramView);
  }

  public function update()
  {
    $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
    $nom = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_SPECIAL_CHARS);
    $prenom = filter_input(INPUT_POST, 'prenom', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $mdp = filter_input(INPUT_POST, 'mdp', FILTER_SANITIZE_SPECIAL_CHARS);
    $adresse = filter_input(INPUT_POST, 'adresse', FILTER_SANITIZE_SPECIAL_CHARS);
    $code_postal = filter_input(INPUT_POST, 'code_postal', FILTER_SANITIZE_SPECIAL_CHARS);
    $telephone = filter_input(INPUT_POST, 'telephone', FILTER_SANITIZE_SPECIAL_CHARS);
    $role = filter_input(INPUT_POST, 'role', FILTER_SANITIZE_SPECIAL_CHARS);

    // Vérifier que les champs de formulaire sont valides
    try {
      if (!$nom || !$prenom || !$email || !$mdp || !$adresse || !$code_postal || !$telephone || $role) {
        throw new Exception('Tous les champs doivent être valides.');
      }
    } catch (Exception $e) {
      echo $e->getMessage();
      return;
    }


    $mdp = password_hash($mdp, PASSWORD_DEFAULT);

    // instancier un objet User avec les valeurs reçues
    // $user = new User($nom, $prenom, $email, $mdp, $adresse, $code_postal, $telephone);

    // passer l'objet User à la fonction setUser
    // $user = new User();
    // $user->setNomUser($nom);

    $model = new UserCrud();
    $model->updateUserById($id, $prenom, $email, $mdp, $adresse, $code_postal, $telephone, $role);

    header('Location: index.php?entite=user&action=list');
    exit();
  }

  public function delete()
  {
    $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
    $model = new UserCrud();
    $model->deleteUser($id);

    header('Location: index.php?entite=user&action=list');
    exit();
  }
}
