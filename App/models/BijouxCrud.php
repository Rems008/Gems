<?php

namespace Gems\App\models;

use PDO;
use Gems\App\Db\Dao;
use Gems\App\models\Bijoux;

class BijouxCrud
{
  private ?Dao $dao;

  public function __construct()
  {
    $this->dao = new Dao;
  }

  public function getAllBijoux(): array
  {
    $sql = 'SELECT * FROM bijoux';

    $bijoux_stmt = $this->dao->getConnect()->prepare($sql);
    // $bijoux_stmt->setFetchMode(PDO::FETCH_ASSOC);
    $bijoux_stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Bijoux::class, ['']);
    $bijoux_stmt->execute();
    return $bijoux_stmt->fetchAll();
  }

  public function getBijouxById(int $idBijoux): Bijoux
  {
    $sql = 'SELECT * FROM bijoux WHERE id_bijoux=:id';

    $bijoux_stmt = $this->dao->getConnect()->prepare($sql);
    $bijoux_stmt->bindParam(':id', $idBijoux, PDO::PARAM_INT);
    $bijoux_stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Bijoux::class);
    $bijoux_stmt->execute();
    return $bijoux_stmt->fetch();
  }

  public function getBijouxByIdCategorie(string $idCat)
  {
    $sql = 'SELECT * FROM bijoux NATURAL JOIN categorie WHERE id_categorie = :idCat;';

    $cat_stmt = $this->dao->getConnect()->prepare($sql);
    $cat_stmt->bindParam('idCat', $idCat);
    $cat_stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Bijoux::class, ['']);
    $cat_stmt->execute();
    return $cat_stmt->fetchAll();
  }

  public function getBijouxByIdCategorieHome(string $idCat)
  {
    $sql = 'SELECT * FROM bijoux NATURAL JOIN categorie WHERE id_categorie = :idCat LIMIT 3;';

    $cat_stmt = $this->dao->getConnect()->prepare($sql);
    $cat_stmt->bindParam('idCat', $idCat);
    $cat_stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Bijoux::class, ['']);
    $cat_stmt->execute();
    return $cat_stmt->fetchAll();
  }

  public function setBijoux(Bijoux $bijoux)
  {
    $sql = 'INSERT INTO bijoux VALUES (NULL, :nom, :description, :prix, :image, :cat, :matiere, :pierre, :taille)';

    $bijoux_stmt = $this->dao->getConnect()->prepare($sql);
    $param = [
      ':nom' => $bijoux->getNomBijoux(),
      ':description' => $bijoux->getDescription(),
      ':prix' => $bijoux->getPrix(),
      ':image' => $bijoux->getImageName(),
      ':cat' => $bijoux->getIdCategorie(),
      ':matiere' => $bijoux->getIdMatiere(),
      ':pierre' => $bijoux->getIdPierre(),
      ':taille' => $bijoux->getIdTaille(),
    ];
    $bijoux_stmt->execute($param);
  }

  public function createBijoux()
  {
    $nom = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_SPECIAL_CHARS);
    $description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_SPECIAL_CHARS);
    $prix = filter_input(INPUT_POST, 'prix', FILTER_SANITIZE_SPECIAL_CHARS);
    $filename = $_FILES['image']['name'];
    $cat = filter_input(INPUT_POST, 'cat', FILTER_SANITIZE_SPECIAL_CHARS);
    $matiere = filter_input(INPUT_POST, 'matiere', FILTER_SANITIZE_SPECIAL_CHARS);
    $pierre = filter_input(INPUT_POST, 'pierre', FILTER_SANITIZE_SPECIAL_CHARS);
    $taille = filter_input(INPUT_POST, 'taille', FILTER_SANITIZE_SPECIAL_CHARS);

    $bijoux = new Bijoux($nom, $description, $prix, $filename, $cat, $matiere, $pierre, $taille);


    $this->setBijoux($bijoux);
  }

  public function updateBijouxById(Bijoux $bijoux, int $id)
  {
    $sql = 'UPDATE bijoux SET nom_bijoux=:nom,description=:description, prix_bijoux =:prix,image_bijoux =:img, id_categorie=:cat, id_matiere=:matiere, id_pierre=:pierre, id_taille=:taille WHERE id_bijoux=:id';

    $bijoux_stmt = $this->dao->getConnect()->prepare($sql);
    $param = [
      ':id', $id, PDO::PARAM_INT,
      ':nom' => $bijoux->getNomBijoux(),
      ':description' => $bijoux->getDescription(),
      ':prix' => $bijoux->getPrix(),
      ':img' => $bijoux->getImageName(),
      ':cat' => $bijoux->getIdCategorie(),
      ':matiere' => $bijoux->getIdMatiere()(),
      ':pierre' => $bijoux->getIdPierre()(),
      ':taille' => $bijoux->getIdTaille(),
    ];
    $bijoux_stmt->execute($param);
  }

  // public function updateBijoux()
  // {
  //   $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
  // $nom = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_SPECIAL_CHARS);
  // $description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_SPECIAL_CHARS);
  // $prix = filter_input(INPUT_POST, 'prix', FILTER_SANITIZE_SPECIAL_CHARS);
  // $filename = $_FILES['image']['name'];
  // $cat = filter_input(INPUT_POST, 'cat', FILTER_SANITIZE_SPECIAL_CHARS);
  // $matiere = filter_input(INPUT_POST, 'matiere', FILTER_SANITIZE_SPECIAL_CHARS);
  // $pierre = filter_input(INPUT_POST, 'pierre', FILTER_SANITIZE_SPECIAL_CHARS);
  // $taille = filter_input(INPUT_POST, 'taille', FILTER_SANITIZE_SPECIAL_CHARS);

  // if ($_FILES['image']['error'] == 0) {
  //   move_uploaded_file($_FILES['image']['tmp_name'], 'App/src/img/');
  //   $filename = $_FILES['image']['name'];
  // }

  //   $bijoux = new Bijoux($nom, $description, $prix, $filename, $cat, $matiere, $pierre, $taille);

  //   $this->updateBijouxById($bijoux, $id);
  // }

  public function deleteBijoux(int $idBijoux)
  {
    $sql = 'DELETE FROM bijoux WHERE id_bijoux=:id';

    $bijoux_stmt = $this->dao->getConnect()->prepare($sql);
    $bijoux_stmt->bindParam(':id', $idBijoux);
    $bijoux_stmt->execute();
  }
}
