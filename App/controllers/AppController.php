<?php

namespace Gems\App\controllers;

class AppController
{

  public function createView(string $vue, array $params)
  {

    extract($params); // creation des variables nécessaires à la vue

    include 'app/view/template.php';
  }

  public function execute(string $action)
  {

    $this->$action();   // appel la méthode dont le nom est dans la variable $action
  }

  public function home()
  {
    $this->createView('home', ['css' => '../../App/public/style']);
  }

  public function error()
  {
    global $except;
    $this->createView('error', ['erreur' => $except->getMessage()]);
  }
}
