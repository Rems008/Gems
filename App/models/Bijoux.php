<?php

namespace Gems\App\models;

use Gems\App\models\Pierre;
use Gems\App\models\Taille;
use Gems\App\models\Matiere;
use Gems\App\models\Categorie;

class Bijoux
{
  private ?int $id_bijoux;
  private string $nom_bijoux;
  private string $description;
  private float $prix_bijoux;
  private string $image_bijoux;
  private int $id_categorie;
  private int $id_matiere;
  private int $id_pierre;
  private int $id_taille;
  private string $nom_categorie;
  private string $nom_matiere;
  private string $nom_pierre;
  private string $nombre_taille;

  public function __construct(
    string $nomBijoux = '',
    string $description = '',
    float $prix = 0.0,
    string $imageName = '',
    int $idCategorie = 0,
    int $idMatiere = 0,
    int $idPierre = 0,
    int $idTaille = 0,
    string $nomCategorie = '',
    string $nomMatiere = '',
    string $nomPierre = '',
    string $nomTaille = ''
  ) {
    $this->id_bijoux = null;
    $this->nom_bijoux = $nomBijoux;
    $this->description = $description;
    $this->prix_bijoux = $prix;
    $this->image_bijoux = $imageName;
    $this->id_categorie = $idCategorie;
    $this->id_matiere = $idMatiere;
    $this->id_pierre = $idPierre;
    $this->id_taille = $idTaille;
    $this->nom_categorie = $nomCategorie;
    $this->nom_matiere = $nomMatiere;
    $this->nom_pierre = $nomPierre;
    $this->nombre_taille = $nomTaille;
  }

  public function getIdBijoux()
  {
    return $this->id_bijoux;
  }

  /**
   * Get the value of nomBijoux
   */
  public function getNomBijoux()
  {
    return $this->nom_bijoux;
  }

  /**
   * Set the value of nomBijoux
   *
   * @return  self
   */
  public function setNomBijoux($nomBijoux)
  {
    $this->nom_bijoux = $nomBijoux;

    return $this;
  }

  /**
   * Get the value of description
   */
  public function getDescription()
  {
    return $this->description;
  }

  /**
   * Set the value of description
   *
   * @return  self
   */
  public function setDescription($description)
  {
    $this->description = $description;

    return $this;
  }

  /**
   * Get the value of prix
   */
  public function getPrix()
  {
    return $this->prix_bijoux;
  }

  /**
   * Set the value of prix
   *
   * @return  self
   */
  public function setPrix($prix)
  {
    $this->prix_bijoux = $prix;

    return $this;
  }

  /**
   * Get the value of imageName
   */
  public function getImageName()
  {
    return $this->image_bijoux;
  }

  /**
   * Set the value of imageName
   *
   * @return  self
   */
  public function setImageName($imageName)
  {
    $this->image_bijoux = $imageName;

    return $this;
  }

  public function getIdCategorie(): Categorie
  {
    return new Categorie($this->id_categorie, $this->nom_categorie);
  }

  /**
   * Set the value of idCategorie
   *
   * @return  self
   */
  public function setIdCategorie($idCategorie)
  {
    $this->id_categorie = $idCategorie;

    return $this;
  }

  /**
   * Get the value of idMatiere
   */
  public function getIdMatiere(): Matiere
  {
    return new Matiere($this->id_matiere, $this->nom_matiere);
  }

  /**
   * Set the value of idMatiere
   *
   * @return  self
   */
  public function setIdMatiere($idMatiere)
  {
    $this->id_matiere = $idMatiere;

    return $this;
  }

  /**
   * Get the value of idPierre
   */
  public function getIdPierre(): Pierre
  {
    return new Pierre($this->id_pierre, $this->nom_pierre);
  }


  /**
   * Set the value of idPierre
   *
   * @return  self
   */
  public function setIdPierre($idPierre)
  {
    $this->id_pierre = $idPierre;

    return $this;
  }

  /**
   * Get the value of idTaille
   */
  public function getIdTaille(): Taille
  {
    return new Taille($this->id_taille, $this->nombre_taille);
  }

  /**
   * Set the value of idTaille
   *
   * @return  self
   */
  public function setIdTaille($idTaille)
  {
    $this->id_taille = $idTaille;

    return $this;
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

  /**
   * Get the value of nomMatiere
   */
  public function getNomMatiere()
  {
    return $this->nom_matiere;
  }

  /**
   * Set the value of nomMatiere
   *
   * @return  self
   */
  public function setNomMatiere($nomMatiere)
  {
    $this->nom_matiere = $nomMatiere;

    return $this;
  }

  /**
   * Get the value of nomPierre
   */
  public function getNomPierre()
  {
    return $this->nom_pierre;
  }

  /**
   * Set the value of nomPierre
   *
   * @return  self
   */
  public function setNomPierre($nomPierre)
  {
    $this->nom_pierre = $nomPierre;

    return $this;
  }

  /**
   * Get the value of nomTaille
   */
  public function getNomTaille()
  {
    return $this->nombre_taille;
  }

  /**
   * Set the value of nomTaille
   *
   * @return  self
   */
  public function setNomTaille($nomTaille)
  {
    $this->nombre_taille = $nomTaille;

    return $this;
  }
}
