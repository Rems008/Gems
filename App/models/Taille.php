<?php

namespace Gems\App\models;

class Taille
{
  private ?int $id;
  private string $nbr;

  public function __construct(string $nbr)
  {
    $this->id = NULL;
    $this->nbr = $nbr;
  }

  public function getId()
  {
    return $this->id;
  }

  /**
   * Get the value of nbr
   */
  public function getNbr()
  {
    return $this->nbr;
  }

  /**
   * Set the value of nbr
   *
   * @return  self
   */
  public function setNbr($nbr)
  {
    $this->nbr = $nbr;

    return $this;
  }
}
