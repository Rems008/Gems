<?php

namespace Gems\App\models;

use PDO;
use Exception;
use PDOException;
use Gems\App\Db\Dao;
use Gems\App\models\User;

class UserCrud
{
  private ?Dao $dao;

  public function __construct()
  {
    $this->dao = new Dao();
  }

  public function getAllUser(): array
  {
    $sql = 'SELECT * FROM utilisateur';
    $user_stmt = $this->dao->getConnect()->prepare($sql);
    // $user_stmt->setFetchMode(PDO::FETCH_ASSOC);
    $user_stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, User::class);
    $user_stmt->execute();
    $user = $user_stmt->fetchAll();
    return $user;
  }

  public function getUserById(int $idUser): User
  {
    $sql = 'SELECT * FROM utilisateur WHERE id_utilisateur=:id';
    $user_stmt = $this->dao->getConnect()->prepare($sql);
    $user_stmt->bindParam(':id', $idUser);
    $user_stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, User::class);
    $user_stmt->execute();
    return $user_stmt->fetch();
  }

  public function getUserByEmail(string $email): ?User
  {
    $sql = 'SELECT * FROM utilisateur WHERE email_utilisateur=:email';

    $user_stat = $this->dao->getConnect()->prepare($sql);
    $user_stat->bindParam('email', $email);
    $user_stat->execute();

    if ($user_stat->rowCount() == 1) {
      $user_stat->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, User::class);
      return  $user_stat->fetch();
    } else {
      return null;
    }
  }

  public function verifUser(): void
  {
    $mdp = filter_input(INPUT_POST, 'mdp', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

    if ($email) {
      $user = $this->getUserByEmail($email);

      if ($user) {
        if (password_verify($mdp, $user->getMdp())) {    // simulation de la valeur de mot de passe
          $_SESSION['email_utilisateur'] = $user->getEmail();
          $_SESSION['role'] = $user->getRole();
          $_SESSION['id_utilisateur'] = $user->getIdUser();
          $_SESSION['nom_utilisateur'] = $user->getNomUser();
          $_SESSION['prenom_utilisateur'] = $user->getPrenom();
        } else {
          throw new Exception('Mot de passe incorrect !');
        }
      } else {
        throw new Exception("Email non trouvé !");
      }
    } else {
      throw new Exception("L'identifiant doit être un mail valide");
    }
  }


  public function setUser(PDO $pdo, User $user, $role = 'client')
  {
    $sql = 'INSERT INTO utilisateur VALUES (NULL, :nom, :prenom, :email, :mdp, :adresse, :code_postal, :telephone, :role)';

    $user_stmt = $pdo->prepare($sql);

    $param = [
      ':nom' => $user->getNomUser(),
      ':prenom' => $user->getPrenom(),
      ':email' => $user->getEmail(),
      ':mdp' => $user->getMdp(),
      ':adresse' => $user->getAdresse(),
      ':code_postal' => $user->getCodePostal(),
      ':telephone' => $user->getTelephone(),
      ':role' => $role,
    ];
    try {
      $user_stmt->execute($param);
      echo "Utilisateur inséré avec succès";
    } catch (PDOException $pdoException) {
      echo "Erreur d'insertion d'utilisateur: " . $pdoException->getMessage();
    }
  }

  public function createNewUser($role = 'client')
  {
    $nom = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_SPECIAL_CHARS);
    $prenom = filter_input(INPUT_POST, 'prenom', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $mdp = filter_input(INPUT_POST, 'mdp', FILTER_SANITIZE_SPECIAL_CHARS);
    $adresse = filter_input(INPUT_POST, 'adresse', FILTER_SANITIZE_SPECIAL_CHARS);
    $code_postal = filter_input(INPUT_POST, 'code_postal', FILTER_VALIDATE_INT);
    $telephone = filter_input(INPUT_POST, 'telephone', FILTER_VALIDATE_INT);

    // Vérifier que les champs de formulaire sont valides
    try {
      (!$nom || !$prenom || !$email || !$mdp || !$adresse || !$code_postal || !$telephone);
    } catch (PDOException $pdoException) {
      echo 'Tous les champs doivent être valides.' . $pdoException->getMessage();
    }

    $mdp = password_hash($mdp, PASSWORD_DEFAULT);
    // instancier un objet User avec les valeurs reçues
    $user = new User($nom, $prenom, $email, $mdp, $adresse, $code_postal, $telephone, $role);
    // passer l'objet User à la fonction setUser
    $this->setUser($this->dao->getConnect(), $user);
  }

  public function updateUserById(User $user, int $id)
  {
    $sql = 'UPDATE utilisateur SET nom_utilisateur = :nom, prenom_utilisateur = :prenom, email_utilisateur = :email, mot_de_passe = :mdp, adresse_utilisateur = :adresse, code_postal = :codePostal, telephone_utilisateur = :tel, role = :role WHERE id_utilisateur=:id';

    $user_stmt = $this->dao->getConnect()->prepare($sql);
    $param = [
      ':id' => $id, PDO::PARAM_INT,
      ':nom' => $user->getNomUser(),
      ':prenom' => $user->getPrenom(),
      ':email' => $user->getEmail(),
      ':mdp' => $user->getMdp(),
      ':adresse' => $user->getAdresse(),
      ':codePostal' => $user->getCodePostal(),
      ':tel' => $user->getTelephone(),
      ':role' => $user->getRole()
    ];

    $user_stmt->execute($param);
  }

  public function updateUser()
  {
    $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
    $nom = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_SPECIAL_CHARS);
    $prenom = filter_input(INPUT_POST, 'prenom', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $mdp = filter_input(INPUT_POST, 'mdp', FILTER_SANITIZE_SPECIAL_CHARS);
    $adresse = filter_input(INPUT_POST, 'adresse', FILTER_SANITIZE_SPECIAL_CHARS);
    $code_postal = filter_input(INPUT_POST, 'code_postal', FILTER_VALIDATE_INT);
    $telephone = filter_input(INPUT_POST, 'telephone', FILTER_VALIDATE_INT);
    $role = filter_input(INPUT_POST, 'role', FILTER_SANITIZE_SPECIAL_CHARS);

    // Vérifier que les champs de formulaire sont valides
    try {
      (!$nom || !$prenom || !$email || !$mdp || !$adresse || !$code_postal || !$telephone);
    } catch (PDOException $pdoException) {
      echo 'Tous les champs doivent être valides.' . $pdoException->getMessage();
    }

    $mdp = password_hash($mdp, PASSWORD_DEFAULT);

    // instancier un objet User avec les valeurs reçues
    $user = new User($id, $nom, $prenom, $email, $mdp, $adresse, $code_postal, $telephone, $role);

    // passer l'objet User à la fonction setUser
    $this->updateUserById($user, $id);
  }

  public function deleteUser(int $idUser)
  {
    $sql = 'DELETE FROM utilisateur WHERE id_utilisateur=:id';

    $user_stmt = $this->dao->getConnect()->prepare($sql);
    $user_stmt->bindParam(':id', $idUser);
    $user_stmt->execute();
  }

  public function setRoleByEmail(string $email, int $role): void
  {
    $sql = 'UPDATE utilisateur SET role=:role WHERE email_utilisateur=:email';

    $stmt = $this->dao->getConnect()->prepare($sql);
    $stmt->execute(['email' => $email, 'role' => $role]);
  }

  public function updateUserRole()
  {
    // récupérer l'e-mail et le nouveau rôle de l'utilisateur à partir des entrées du formulaire
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $newRole = filter_input(INPUT_POST, 'new_role', FILTER_SANITIZE_SPECIAL_CHARS);

    // mettre à jour le rôle de l'utilisateur dans la base de données en utilisant la méthode setRoleByEmail
    $userRole = new UserCrud($email, $newRole);
    $userRole->setRoleByEmail($email, $newRole);
  }
}
