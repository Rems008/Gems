<?php

namespace App\model;

use PDO;
use Exception;
use PDOException;
use App\Db\Dao;
use App\model\User;


class UserModel
{
  private $connect;

  public function __construct($connect)
  {
    $this->connect = new Dao();
  }

  public function getUserByLogin(string $email): User
  {

    $sql = 'SELECT * FROM user WHERE email= :email;';

    $user_stmt = $this->connect->getConnect()->prepare($sql);
    $user_stmt->execute(['email' => $email]);

    if ($user_stmt->rowCount() == 1) {
      return $user_stmt->fetchObject(User::class);
    } else {
      throw new Exception('User non trouvé en base');
    }
  }

  public function verifUser(): void
  {

    $mdp = filter_input(INPUT_POST, 'mdp', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

    if (!$email) {
      throw new Exception("l'identifiant doit être un mail valide");
    }
    $user = $this->getUserByLogin($email);

    if (password_verify($mdp, $user->getMdp())) {    // simulation de la valeur de mot de passe
      $_SESSION['mail'] = $user->getEmail();
      $_SESSION['role'] = $user->getRole();
      $_SESSION['idUser'] = $user->getId();
    } else {
      throw new Exception('Mot de passe incorrect !');
    }
  }

  public function setUser(PDO $pdo, User $user)
  {
    $sql = 'INSERT INTO utilisateur VALUES (NULL, :nom, :prenom, :email, :mdp, :adresse, :code_postal, :telephone, :role)';

    $user_stmt = $this->connect->getConnect()->prepare($sql);

    $param = [
      ':nom' => $user->getNom(),
      ':prenom' => $user->getPrenom(),
      ':email' => $user->getEmail(),
      ':mdp' => $user->getMdp(),
      ':adresse' => $user->getAdresse(),
      ':code_postal' => $user->getCodePostal(),
      ':telephone' => $user->getTelephone(),
      ':role' => $user->getRole()
    ];

    try {
      $user_stmt->execute($param);
      echo "Utilisateur inséré avec succès";
    } catch (PDOException $pdoException) {
      echo "Erreur d'insertion d'utilisateur: " . $pdoException->getMessage();
    }
  }

  public function createNewUser()
  {

    $nom = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_SPECIAL_CHARS);
    $prenom = filter_input(INPUT_POST, 'prenom', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $mdp = filter_input(INPUT_POST, 'mdp', FILTER_SANITIZE_SPECIAL_CHARS);
    $adresse = filter_input(INPUT_POST, 'adresse', FILTER_SANITIZE_SPECIAL_CHARS);
    $code_postal = filter_input(INPUT_POST, 'code_postal', FILTER_SANITIZE_SPECIAL_CHARS);
    $telephone = filter_input(INPUT_POST, 'telephone', FILTER_SANITIZE_SPECIAL_CHARS);
    $role = filter_input(INPUT_POST, 'role', FILTER_SANITIZE_SPECIAL_CHARS);

    $mdp = password_hash($mdp, PASSWORD_DEFAULT);

    // instancier un objet User avec les valeurs reçues
    $user = new User($nom, $prenom, $email, $mdp, $adresse, $code_postal, $telephone, $role);

    // passer l'objet User à la fonction setUser
    $this->setUser($this->connect->getConnect(), $user);
  }
}
