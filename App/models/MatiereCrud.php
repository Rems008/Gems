<?php

namespace Gems\App\models;

use PDO;
use Gems\App\Db\Dao;
use Gems\App\models\Matiere;

class MatiereCrud
{
  private ?Dao $dao;

  public function __construct()
  {
    $this->dao = new Dao;
  }

  public function getAllMatiere(): array
  {
    $sql = 'SELECT * FROM matiere';
    $matiere_stmt = $this->dao->getConnect()->prepare($sql);
    // $matiere_stmt->setFetchMode(PDO::FETCH_ASSOC);
    $matiere_stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Matiere::class, ['']);
    $matiere_stmt->execute();
    return $matiere_stmt->fetchAll();
  }

  public function getMatiereById(int $idMatiere): Matiere
  {
    $sql = 'SELECT * FROM matiere WHERE id_matiere=:id';
    $matiere_stmt = $this->dao->getConnect()->prepare($sql);
    $matiere_stmt->bindParam(':id', $idMatiere);
    $matiere_stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Matiere::class);
    $matiere_stmt->execute();
    return $matiere_stmt->fetch();
  }

  public function setMatiere(Matiere $matiere)
  {
    $sql = 'INSERT INTO matiere VALUES (NULL, :nom)';
    $matiere_stmt = $this->dao->getConnect()->prepare($sql);
    $param = [
      ':nom' => $matiere->getNomMatiere(),
    ];
    $matiere_stmt->execute($param);
  }

  public function createMatiere()
  {
    $nom = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_SPECIAL_CHARS);

    $matiere = new Matiere($nom);
    $this->setMatiere($matiere);
  }

  public function updateMatiereById(Matiere $matiere, int $id)
  {
    $sql = 'UPDATE matiere SET nom_matiere=:nom WHERE id_matiere=:id';

    $matiere_stmt = $this->dao->getConnect()->prepare($sql);
    $matiere_stmt->bindParam(':nom', $matiere->getNomMatiere(), PDO::PARAM_STR);
    $matiere_stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $matiere_stmt->execute();
  }

  public function deleteMatiere(int $idMatiere)
  {
    $sql = 'DELETE FROM matiere WHERE id_matiere=:id';
    $matiere_stmt = $this->dao->getConnect()->prepare($sql);
    $matiere_stmt->bindParam(':id', $idMatiere);
    $matiere_stmt->execute();
  }
}
