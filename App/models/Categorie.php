<?php

namespace Gems\App\models;

class Categorie
{
  private ?int $id_categorie;
  private string $nom_categorie;

  public function __construct(string $nomCategorie = '')
  {
    $this->id_categorie = NULL;
    $this->nom_categorie = $nomCategorie;
  }

  public function getIdCategorie()
  {
    return $this->id_categorie;
  }

  /**
   * Get the value of nomCategorie
   */
  public function getNomCategorie()
  {
    return $this->nom_categorie;
  }

  /**
   * Set the value of nomCategorie
   *
   * @return  self
   */
  public function setNomCategorie($nomCategorie)
  {
    $this->nom_categorie = $nomCategorie;

    return $this;
  }
}
