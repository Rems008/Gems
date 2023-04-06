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
    $bijoux_stmt = $this->dao->getConnect()->query($sql);
    // $bijoux_stmt->setFetchMode(PDO::FETCH_ASSOC);
    // $bijoux_stmt->setFetchMode(PDO::FETCH_CLASS, 'Gems\App\models\Bijoux');
    // $bijoux_stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Bijoux::class);
    // $bijoux_stmt->execute();
    $bijoux_stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Bijoux');
    $bijoux = $bijoux_stmt->fetchAll();
    return $bijoux;
  }

  public function getBijouxById(int $idBijoux): Bijoux
  {
    $sql = 'SELECT * FROM bijoux WHERE id_bijoux=:id';
    $bijoux_stmt = $this->dao->getConnect()->prepare($sql);
    $bijoux_stmt->bindParam(':id', $idBijoux, PDO::PARAM_INT);
    $bijoux_stmt->execute();
    $bijoux_stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Gems\App\models\Bijoux');
    $bijoux = $bijoux_stmt->fetch();
    return $bijoux;
  }

  public function getBijouxByCategorie(string $nomCat)
  {
    $sql = 'SELECT * FROM bijoux NATURAL JOIN categorie WHERE nom_categorie = :nomCat;';

    $cat_stmt = $this->dao->getConnect()->prepare($sql);
    $cat_stmt->bindParam('nomCat', $nomCat);
    $cat_stmt->execute();

    $cat = $cat_stmt->fetchAll(PDO::FETCH_ASSOC);
    return $cat;
  }

  public function setBijoux(Bijoux $bijoux)
  {
    $sql = 'INSERT INTO bijoux VALUES (NULL, :nom, :description, :prix, :image, :cat, :matiere, :pierre, :taille)';
    $bijoux_stmt = $this->dao->getConnect()->prepare($sql);
    $param = [
      ':nom' => $bijoux->getNom(),
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

  public function updateBijouxById(Bijoux $bijoux, int $idBijoux)
  {
    $sql = 'UPDATE bijoux SET nom_bijoux=:nom,description=:description, prix_bijoux =:prix,image_bijoux =:img, id_categorie=:cat, id_matiere=:matiere, id_pierre=:pierre, id_taille=:taille WHERE id_bijoux=' . $idBijoux;

    $bijoux_stmt = $this->dao->getConnect()->prepare($sql);
    $param = [
      ':nom' => $bijoux->getNom(),
      ':description' => $bijoux->getDescription(),
      ':prix' => $bijoux->getPrix(),
      ':img' => $bijoux->getImageName(),
      ':cat' => $bijoux->getIdCategorie(),
      ':matiere' => $bijoux->getIdMatiere(),
      ':pierre' => $bijoux->getIdPierre(),
      ':taille' => $bijoux->getIdTaille(),
      ':id' => $idBijoux
    ];
    $bijoux_stmt->execute($param);
  }

  public function updateBijoux()
  {
    $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
    $nom = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_SPECIAL_CHARS);
    $description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_SPECIAL_CHARS);
    $prix = filter_input(INPUT_POST, 'prix', FILTER_SANITIZE_SPECIAL_CHARS);
    $filename = $_FILES['image']['name'];
    $cat = filter_input(INPUT_POST, 'cat', FILTER_SANITIZE_SPECIAL_CHARS);
    $matiere = filter_input(INPUT_POST, 'matiere', FILTER_SANITIZE_SPECIAL_CHARS);
    $pierre = filter_input(INPUT_POST, 'pierre', FILTER_SANITIZE_SPECIAL_CHARS);
    $taille = filter_input(INPUT_POST, 'taille', FILTER_SANITIZE_SPECIAL_CHARS);

    if ($_FILES['image']['error'] == 0) {
      move_uploaded_file($_FILES['image']['tmp_name'], '../App/src/img/');
      $filename = $_FILES['image']['name'];
    }

    $bijoux = new Bijoux($nom, $description, $prix, $filename, $cat, $matiere, $pierre, $taille);

    $this->updateBijouxById($bijoux, $id);
  }

  public function deleteBijoux(int $idBijoux)
  {
    $sql = 'DELETE FROM bijoux WHERE id_bijoux=:id';
    $bijoux_stmt = $this->dao->getConnect()->prepare($sql);
    $bijoux_stmt->bindParam(':id', $idBijoux);
    $bijoux_stmt->execute();
  }
}
