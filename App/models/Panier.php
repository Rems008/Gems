<?php

namespace Gems\App\models;

class Panier
{
  private ?int $id_panier;
  private ?string $date_creation;
  private int $id_utilisateur;

  public function __construct()
  {
    if (!isset($_SESSION['id_panier'])) {
      $id_panier = $this->createCart(); // récupère le panier en base si il existe
      $_SESSION['id_panier'] = serialize($id_panier);
    }
    $this->id_panier = unserialize($_SESSION['id_panier']);


    $this->id_panier = null;
    $this->date_creation = date("Y-m-d H:i:s");
    $this->id_utilisateur = $idUser;
  }
  /**
   * Get the value of date
   */
  public function getIdPanier()
  {
    return $this->id_panier;
  }
  /**
   * Get the value of date
   */
  public function getDate()
  {
    return $this->date_creation;
  }

  /**
   * Set the value of date
   *
   * @return  self
   */
  public function setDate($date)
  {
    $this->date_creation = $date;

    return $this;
  }

  /**
   * Get the value of idUser
   */
  public function getIdUser()
  {
    return $this->id_utilisateur;
  }

  /**
   * Set the value of idUser
   *
   * @return  self
   */
  public function setIdUser($idUser)
  {
    $this->id_utilisateur = $idUser;

    return $this;
  }
}
