<?php

namespace Gems\App\models;

class User
{
  //Déclaration des définitions des propriétés de l'utilisateur en privée
  private ?int $id;
  private string $nom;
  private string $prenom;
  private string $email;
  private string $mdp;
  private string $adresse;
  private int $code_postal;
  private int $telephone;
  private string $role;


  // Fonction construct afin de pouvoir récupérer les propriétes
  public function __construct(string $nom = '', string $prenom = '', string $email = '', string $mdp = '', string $adresse = '', int $code_postal, int $telephone, string $role = 'client')
  {
    $this->id = null;
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->email = $email;
    $this->setMdp($mdp);
    $this->adresse = $adresse;
    $this->code_postal = $code_postal;
    $this->telephone = $telephone;
    $this->role = $role;
  }

  //Les getteur et setteur

  /**
   * Get the value of nom
   */
  public function getId(): ?int
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
   * Get the value of prenom
   */
  public function getPrenom()
  {
    return $this->prenom;
  }

  /**
   * Set the value of prenom
   *
   * @return  self
   */
  public function setPrenom($prenom)
  {
    $this->prenom = $prenom;

    return $this;
  }

  /**
   * Get the value of email
   */
  public function getEmail()
  {
    return $this->email;
  }

  /**
   * Set the value of email
   *
   * @return  self
   */
  public function setEmail($email)
  {
    // Validation de l'email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      throw new \InvalidArgumentException("L'email n'est pas valide");
    }
    $this->email = $email;

    return $this;
  }

  /**
   * Get the value of mdp
   */
  public function getMdp()
  {
    return $this->mdp;
  }

  /**
   * Set the value of mdp
   *
   * @return  self
   */
  public function setMdp($mdp)
  {
    $this->mdp = $mdp;

    return $this;
  }

  /**
   * Get the value of adresse
   */
  public function getAdresse()
  {
    return $this->adresse;
  }

  /**
   * Set the value of adresse
   *
   * @return  self
   */
  public function setAdresse($adresse)
  {
    $this->adresse = $adresse;

    return $this;
  }

  /**
   * Get the value of code_postal
   */
  public function getCodePostal()
  {
    return $this->code_postal;
  }

  /**
   * Set the value of code_postal
   *
   * @return  self
   */
  public function setCodePostal($code_postal)
  {
    $this->code_postal = $code_postal;

    return $this;
  }

  /**
   * Get the value of telephone
   */
  public function getTelephone()
  {
    return $this->telephone;
  }

  /**
   * Set the value of telephone
   *
   * @return  self
   */
  public function setTelephone($telephone)
  {
    $this->telephone = $telephone;

    return $this;
  }

  /**
   * Get the value of role
   */
  public function getRole()
  {
    return $this->role;
  }

  /**
   * Set the value of role
   *
   * @return  self
   */
  public function setRole($role)
  {
    $this->role = $role;

    return $this;
  }
}
