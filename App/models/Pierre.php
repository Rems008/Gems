<?php

namespace Gems\App\models;

class Pierre
{
  private ?int $id;
  private string $nom;

  public function __construct(string $nom)
  {
    $this->id = NULL;
    $this->nom = $nom;
  }

  public function getId()
  {
    return $this->id;
  }

  /**
   * Get the value of nom
   */
  public function getNom()
  {
    return $this->nom;
  }

  /**
   * Set the value of nom
   *
   * @return  self
   */
  public function setNom($nom)
  {
    $this->nom = $nom;

    return $this;
  }
}
