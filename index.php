<?php
session_start();
require_once "vendor/autoload.php";


use Gems\App\controllers\AppController;
use Gems\App\controllers\UserController;
use Gems\App\controllers\AdminController;
use Gems\App\controllers\BijouxController;
use Gems\App\controllers\PierreController;
use Gems\App\controllers\TailleController;
use Gems\App\controllers\MatiereController;
use Gems\App\controllers\CategorieController;

// if (!isset($_SESSION['role'])) {
//   $_SESSION['role'] = 'ROLE_VISITEUR';
// }

$entite = filter_input(INPUT_GET, 'entite', FILTER_SANITIZE_SPECIAL_CHARS);
$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_SPECIAL_CHARS);

try {
  // test sur quelle entite on veut travailler
  switch ($entite) {
    case 'user':
      // appel du sous contrôleur de l'entite user
      $controller = new UserController();
      $controller->execute($action);
      break;
    case 'contact':
      // include 'app/controller/AppController.php';
      // $controller = new AppController();
      // $controller->createView('about', []);
      break;
    case 'bijoux':
      // appel du sous controleur de l'entite article
      $controller = new BijouxController();
      $controller->execute($action);
      break;
    case 'panier':
      // appel du sous controleur de l'entite panier
      // include 'app/controller/caddyController.php';
      break;
    case 'categorie':
      $controller = new CategorieController();
      $controller->execute($action);
      break;
    case 'matiere':
      $controller = new MatiereController();
      $controller->execute($action);
      break;
    case 'pierre':
      $controller = new PierreController();
      $controller->execute($action);
      break;
    case 'taille':
      $controller = new TailleController();
      $controller->execute($action);
      break;
    case 'admin':
      $controller = new AdminController();
      $controller->execute($action);
      break;
    default:
      $controller = new AppController();
      $controller->createView('home', []);
      $controller->execute('home');
      break;
  }
} catch (Exception $except) {
  $controller = new AppController();
  $controller->execute('error');
}
