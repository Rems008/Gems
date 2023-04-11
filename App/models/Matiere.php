<?php

namespace Gems\App\models;

class Matiere
{
  private ?int $id_matiere;
  private string $nom_matiere;

  public function __construct(string $nomMatiere = '')
  {
    $this->id_matiere = NULL;
    $this->nom_matiere = $nomMatiere;
  }

  public function getIdMatiere()
  {
    return $this->id_matiere;
  }

  /**
   * Get the value of nom
   */
  public function getNomMatiere()
  {
    return $this->nom_matiere;
  }

  /**
   * Set the value of nom
   *
   * @return  self
   */
  public function setNomMatiere($nomMatiere)
  {
    $this->nom_matiere = $nomMatiere;

    return $this;
  }
}
