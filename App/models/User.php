<?php

namespace Gems\App\models;

class User
{
  //Déclaration des définitions des propriétés de l'utilisateur en privée
  private ?int $id_utilisateur;
  private string $nom_utilisateur;
  private string $prenom_utilisateur;
  private string $email_utilisateur;
  private string $mot_de_passe;
  private string $adresse_utilisateur;
  private int $code_postal;
  private int $telephone_utilisateur;
  private string $role;


  // Fonction construct afin de pouvoir récupérer les propriétes
  public function __construct(string $nomUser = '', string $prenom = '', string $email = '', string $mdp = '', string $adresse = '', int $code_postal = 0, int $telephone = 0, string $role = 'client')
  {
    $this->id_utilisateur = null;
    $this->nom_utilisateur = $nomUser;
    $this->prenom_utilisateur = $prenom;
    $this->email_utilisateur = $email;
    $this->mot_de_passe = $mdp;
    $this->adresse_utilisateur = $adresse;
    $this->code_postal = $code_postal;
    $this->telephone_utilisateur = $telephone;
    $this->role = $role;
  }

  //Les getteur et setteur

  /**
   * Get the value of nomUser
   */
  public function getIdUser(): ?int
  {
    return $this->id_utilisateur;
  }


  /**
   * Get the value of nomUser
   */
  public function getNomUser()
  {
    return $this->nom_utilisateur;
  }

  /**
   * Set the value of nomUser
   *
   * @return  self
   */
  public function setNomUser($nomUser)
  {
    $this->nom_utilisateur = $nomUser;

    return $this;
  }

  /**
   * Get the value of prenom
   */
  public function getPrenom()
  {
    return $this->prenom_utilisateur;
  }

  /**
   * Set the value of prenom
   *
   * @return  self
   */
  public function setPrenom($prenom)
  {
    $this->prenom_utilisateur = $prenom;

    return $this;
  }

  /**
   * Get the value of email
   */
  public function getEmail()
  {
    return $this->email_utilisateur;
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
    $this->email_utilisateur = $email;

    return $this;
  }

  /**
   * Get the value of mdp
   */
  public function getMdp()
  {
    return $this->mot_de_passe;
  }

  /**
   * Set the value of mdp
   *
   * @return  self
   */
  public function setMdp($mdp)
  {

    // Vérifier si le mot de passe contient au moins 6 caractères et une lettre majuscule
    if (strlen($mdp) < 6 || !preg_match('/[A-Z]/', $mdp)) {
      throw new \InvalidArgumentException("Le mot de passe doit contenir au moins 6 caractères dont une majuscule");
    }
    $this->mot_de_passe = password_hash($mdp, PASSWORD_DEFAULT);
    return $this;
  }

  /**
   * Get the value of adresse
   */
  public function getAdresse()
  {
    return $this->adresse_utilisateur;
  }

  /**
   * Set the value of adresse
   *
   * @return  self
   */
  public function setAdresse($adresse)
  {
    $this->adresse_utilisateur = $adresse;

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
    // Vérifier si le code postal ne contient que des chiffres
    if (!preg_match('/^\d+$/', $code_postal)) {
      throw new \InvalidArgumentException('Le code postal doit être composé de chiffres uniquement');
    }
    $this->code_postal = $code_postal;

    return $this;
  }

  /**
   * Get the value of telephone
   */
  public function getTelephone()
  {
    return $this->telephone_utilisateur;
  }

  /**
   * Set the value of telephone
   *
   * @return  self
   */
  public function setTelephone($telephone)
  {
    $this->telephone_utilisateur = $telephone;

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
