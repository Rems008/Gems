<?php

namespace Gems\App\controllers;

use Gems\App\models\BijouxCrud;
use Gems\App\models\CategorieCrud;

class AppController
{

  public function createView(string $view, array $params)
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
    $model = new bijouxCrud;
    $modelCat = new categorieCrud;

    $categories = $modelCat->getAllCategorie();

    $tabByCat = [];
    foreach ($categories as $category) {
      $bijoux = $model->getBijouxByNomBagueHome($category->getIdCategorie());
      $tabByCat[$category->getNomCategorie()] = $bijoux;
    }

    $view = 'home';
    $paramView = [
      'error' => '',
      'tabByCat' => $tabByCat,
      'css' => '../../App/public/style'
    ];
    $this->createView($view, $paramView);
  }

  public function error()
  {
    global $except;
    $this->createView('error', ['erreur' => $except->getMessage()]);
  }
}
