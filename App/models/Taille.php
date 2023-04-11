<?php

namespace Gems\App\models;

class Taille
{
  private ?int $id_taille;
  private string $nombre_taille;

  public function __construct(string $nbr = '')
  {
    $this->id_taille = NULL;
    $this->nombre_taille = $nbr;
  }

  public function getIdTaille()
  {
    return $this->id_taille;
  }

  /**
   * Get the value of nbr
   */
  public function getNbr()
  {
    return $this->nombre_taille;
  }

  /**
   * Set the value of nbr
   *
   * @return  self
   */
  public function setNbr($nbr)
  {
    $this->nombre_taille = $nbr;

    return $this;
  }
}
