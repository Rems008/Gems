<?php

namespace Gems\App\models;

class Pierre
{
  private ?int $id_pierre;
  private string $nom_pierre;

  public function __construct(string $nomPierre)
  {
    $this->id_pierre = NULL;
    $this->nom_pierre = $nomPierre;
  }

  public function getIdPierre()
  {
    return $this->id_pierre;
  }

  /**
   * Get the value of nom
   */
  public function getNomPierre()
  {
    return $this->nom_pierre;
  }

  /**
   * Set the value of nom
   *
   * @return  self
   */
  public function setNomPierre($nomPierre)
  {
    $this->nom_pierre = $nomPierre;

    return $this;
  }
}
