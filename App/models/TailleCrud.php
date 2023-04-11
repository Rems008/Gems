<?php

namespace Gems\App\models;

use PDO;
use Gems\App\Db\Dao;
use Gems\App\models\Taille;

class TailleCrud
{
  private ?Dao $dao;

  public function __construct()
  {
    $this->dao = new Dao;
  }

  public function getAllTaille(): array
  {
    $sql = 'SELECT * FROM taille ORDER BY nombre_taille ASC';
    $taille_stmt = $this->dao->getConnect()->prepare($sql);
    // $taille_stmt->setFetchMode(PDO::FETCH_ASSOC);
    $taille_stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Taille::class, ['']);
    $taille_stmt->execute();
    return $taille_stmt->fetchAll();
  }

  public function getTailleById(int $idTaille): Taille
  {
    $sql = 'SELECT * FROM taille WHERE id_taille=:id';
    $taille_stmt = $this->dao->getConnect()->prepare($sql);
    $taille_stmt->bindParam(':id', $idTaille, PDO::PARAM_INT);
    $taille_stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Taille::class);
    $taille_stmt->execute();
    return $taille_stmt->fetch();
  }

  public function setTaille(Taille $taille)
  {
    $nomTaille = $taille->getNbr();
    $sql = 'INSERT INTO taille VALUES (NULL, :nom)';
    $taille_stmt = $this->dao->getConnect()->prepare($sql);
    $taille_stmt->bindParam(':nom', $nomTaille, PDO::PARAM_STR);
    $taille_stmt->execute();
  }

  public function createTaille()
  {
    $nbr = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_SPECIAL_CHARS);

    $taille = new Taille($nbr);
    $this->setTaille($taille);
  }

  public function updateTailleById(Taille $taille, int $id)
  {
    $sql = 'UPDATE taille SET nombre_taille=:nom WHERE id_taille=:id';

    $taille_stmt = $this->dao->getConnect()->prepare($sql);
    $taille_stmt->bindParam(':nom', $taille->getNbr(), PDO::PARAM_STR);
    $taille_stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $taille_stmt->execute();
  }

  public function deleteTaille(int $idTaille)
  {
    $sql = 'DELETE FROM taille WHERE id_taille=:id';
    $taille_stmt = $this->dao->getConnect()->prepare($sql);
    $taille_stmt->bindParam(':id', $idTaille);
    $taille_stmt->execute();
  }
}
