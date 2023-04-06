<?php

namespace Gems\App\models;

class Categorie
{
  private ?int $idCategorie;
  private string $nomCategorie;

  public function __construct(string $nomCategorie = '')
  {
    $this->idCategorie = NULL;
    $this->nomCategorie = $nomCategorie;
  }

  public function getIdCategorie()
  {
    return $this->idCategorie;
  }

  /**
   * Get the value of nomCategorie
   */
  public function getNomCategorie()
  {
    return $this->nomCategorie;
  }

  /**
   * Set the value of nomCategorie
   *
   * @return  self
   */
  public function setNomCategorie($nomCategorie)
  {
    $this->nomCategorie = $nomCategorie;

    return $this;
  }
}
