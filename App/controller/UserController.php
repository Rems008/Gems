<?php

namespace App\controller;

use App\controller\AppController;


class UserController extends AppController
{
  public function create()
  {
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
      // envoi du formulaire
      $view = 'user/createUser';

      $paramView = ['error' => ''];
      $this->createView($view, $paramView);
    } else {
      // traitement des informations
      header('Location: index.php?entite=user&action=login');
      exit();
    }
  }
}
