<?php

namespace Gems\App\controllers;

class AdminController extends AppController
{
  public function home()
  {
    $view = 'admin/homeAdmin';
    $paramView = ['error'];
    $this->createView($view, $paramView);
  }

  public function bijoux()
  {
    $view = 'admin/gestionBijoux';
    $paramView = ['error'];
    $this->createView($view, $paramView);
  }

  public function categorie()
  {
    $view = 'admin/gestionCategorie';
    $paramView = ['error'];
    $this->createView($view, $paramView);
  }

  public function createCategorie()
  {
    $view = 'admin/createCategorie';
    $paramView = ['error'];
    $this->createView($view, $paramView);
  }

  public function matiere()
  {
    $view = 'admin/gestionMatiere';
    $paramView = ['error'];
    $this->createView($view, $paramView);
  }

  public function createMatiere()
  {
    $view = 'admin/createMatiere';
    $paramView = ['error'];
    $this->createView($view, $paramView);
  }

  public function pierre()
  {
    $view = 'admin/gestionPierre';
    $paramView = ['error'];
    $this->createView($view, $paramView);
  }

  public function createPierre()
  {
    $view = 'admin/createPierre';
    $paramView = ['error'];
    $this->createView($view, $paramView);
  }

  public function taille()
  {
    $view = 'admin/gestionTaille';
    $paramView = ['error'];
    $this->createView($view, $paramView);
  }

  public function createTaille()
  {
    $view = 'admin/createTaille';
    $paramView = ['error'];
    $this->createView($view, $paramView);
  }

  public function user()
  {
    $view = 'admin/gestionUser';
    $paramView = ['error'];
    $this->createView($view, $paramView);
  }
}
