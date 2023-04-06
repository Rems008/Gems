<?php

namespace Gems\App\models;

use Gems\App\models\Pierre;
use Gems\App\models\Taille;
use Gems\App\models\Matiere;
use Gems\App\models\Categorie;

class Bijoux
{
  private ?int $id;
  private string $nom;
  private string $description;
  private float $prix;
  private string $imageName;
  private int $idCategorie;
  private int $idMatiere;
  private int $idPierre;
  private int $idTaille;
  private string $nomCategorie;
  private string $nomMatiere;
  private string $nomPierre;
  private string $nomTaille;

  public function __construct(
    string $nom = '',
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
    string $nomTaille = '',


  ) {
    $this->id = null;
    $this->nom = $nom;
    $this->description = $description;
    $this->prix = $prix;
    $this->imageName = $imageName;
    $this->idCategorie = $idCategorie;
    $this->idMatiere = $idMatiere;
    $this->idPierre = $idPierre;
    $this->idTaille = $idTaille;
    $this->nomCategorie = $nomCategorie;
    $this->nomPierre = $nomMatiere;
    $this->nomPierre = $nomPierre;
    $this->nomPierre = $nomTaille;
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
    return $this->prix;
  }

  /**
   * Set the value of prix
   *
   * @return  self
   */
  public function setPrix($prix)
  {
    $this->prix = $prix;

    return $this;
  }

  /**
   * Get the value of imageName
   */
  public function getImageName()
  {
    return $this->imageName;
  }

  /**
   * Set the value of imageName
   *
   * @return  self
   */
  public function setImageName($imageName)
  {
    $this->imageName = $imageName;

    return $this;
  }

  public function getIdCategorie(): Categorie
  {
    return new Categorie($this->idCategorie, $this->nomCategorie);
  }

  /**
   * Set the value of idCategorie
   *
   * @return  self
   */
  public function setIdCategorie($idCategorie)
  {
    $this->idCategorie = $idCategorie;

    return $this;
  }

  /**
   * Get the value of idMatiere
   */
  public function getIdMatiere(): Matiere
  {
    return new Matiere($this->idMatiere, $this->nomMatiere);
  }

  /**
   * Set the value of idMatiere
   *
   * @return  self
   */
  public function setIdMatiere($idMatiere)
  {
    $this->idMatiere = $idMatiere;

    return $this;
  }

  /**
   * Get the value of idPierre
   */
  public function getIdPierre(): Pierre
  {
    return new Pierre($this->idPierre, $this->nomPierre);
  }


  /**
   * Set the value of idPierre
   *
   * @return  self
   */
  public function setIdPierre($idPierre)
  {
    $this->idPierre = $idPierre;

    return $this;
  }

  /**
   * Get the value of idTaille
   */
  public function getIdTaille(): Taille
  {
    return new Taille($this->idTaille, $this->nomTaille);
  }

  /**
   * Set the value of idTaille
   *
   * @return  self
   */
  public function setIdTaille($idTaille)
  {
    $this->idTaille = $idTaille;

    return $this;
  }

  /**
   * Get the value of nomPierre
   */
  public function getNomPierre()
  {
    return $this->nomPierre;
  }

  /**
   * Set the value of nomPierre
   *
   * @return  self
   */
  public function setNomPierre($nomPierre)
  {
    $this->nomPierre = $nomPierre;

    return $this;
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

  /**
   * Get the value of nomMatiere
   */
  public function getNomMatiere()
  {
    return $this->nomMatiere;
  }

  /**
   * Set the value of nomMatiere
   *
   * @return  self
   */
  public function setNomMatiere($nomMatiere)
  {
    $this->nomMatiere = $nomMatiere;

    return $this;
  }

  /**
   * Get the value of nomTaille
   */
  public function getNomTaille()
  {
    return $this->nomTaille;
  }

  /**
   * Set the value of nomTaille
   *
   * @return  self
   */
  public function setNomTaille($nomTaille)
  {
    $this->nomTaille = $nomTaille;

    return $this;
  }
}
