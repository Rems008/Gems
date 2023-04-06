<?php

namespace Gems\App\models;

use PDO;
use Gems\App\Db\Dao;
use Gems\App\models\Categorie;

class CategorieCrud
{
  private ?Dao $dao;

  public function __construct()
  {
    $this->dao = new Dao;
  }

  public function getAllCategorie(): array
  {
    $sql = 'SELECT * FROM categorie ORDER BY id_categorie';
    $cat_stmt = $this->dao->getConnect()->prepare($sql);
    $cat_stmt->setFetchMode(PDO::FETCH_ASSOC);
    // $cat_stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Gems\App\models\Categorie', ['']);
    // $cat_stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Categorie::class);

    $cat_stmt->execute();
    return $cat_stmt->fetchAll();
  }

  public function getCategorieById(int $idCat): Categorie
  {
    $sql = 'SELECT * FROM categorie WHERE id_categorie=:id';
    $cat_stmt = $this->dao->getConnect()->prepare($sql);
    $cat_stmt->bindParam(':id', $idCat, PDO::PARAM_INT);
    $cat_stmt->execute();
    $cat_stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Categorie::class);
    return $cat_stmt->fetch();
  }

  public function setCategorie(Categorie $cat)
  {
    $nomCategorie = $cat->getNomCategorie();
    $sql = 'INSERT INTO categorie VALUES (NULL, :nom)';
    $cat_stmt = $this->dao->getConnect()->prepare($sql);
    $cat_stmt->bindParam(':nom', $nomCategorie, PDO::PARAM_STR);
    $cat_stmt->execute();
  }

  public function createCategorie()
  {
    $nom = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_SPECIAL_CHARS);

    $cat = new Categorie($nom);
    $this->setCategorie($cat);
  }

  public function updateCategorieById(Categorie $cat, int $id)
  {
    $sql = 'UPDATE categorie SET nom_categorie=:nom WHERE id_categorie=:id';

    $cat_stmt = $this->dao->getConnect()->prepare($sql);
    $cat_stmt->bindParam(':nom', $cat->getNomCategorie(), PDO::PARAM_STR);
    $cat_stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $cat_stmt->execute();
  }

  // public function updateCategorie()
  // {
  //   $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
  //   $nom = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_SPECIAL_CHARS);

  //   $cat = $this->getCategorieById($id);
  //   $cat->setNomCategorie($nom);
  //   $this->updateCategorieById($cat, $id);
  // }

  public function deleteCategorie(int $idCat)
  {
    $sql = 'DELETE FROM categorie WHERE id_categorie=:id';

    $cat_stmt = $this->dao->getConnect()->prepare($sql);
    $cat_stmt->bindParam(':id', $idCat);
    $cat_stmt->execute();
  }
}
