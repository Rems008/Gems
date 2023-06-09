<?php

namespace Gems\App\models;

use PDO;
use Gems\App\Db\Dao;
use Gems\App\models\Pierre;

class PierreCrud
{
  private ?Dao $dao;

  public function __construct()
  {
    $this->dao = new Dao;
  }

  public function getAllPierre(): array
  {
    $sql = 'SELECT * FROM pierre';
    $pierre_stmt = $this->dao->getConnect()->prepare($sql);
    // $pierre_stmt->setFetchMode(PDO::FETCH_ASSOC);
    $pierre_stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Pierre::class, ['']);
    $pierre_stmt->execute();
    return $pierre_stmt->fetchAll();
  }

  public function getPierreById(int $idPierre): Pierre
  {
    $sql = 'SELECT * FROM pierre WHERE id_pierre=:id';
    $pierre_stmt = $this->dao->getConnect()->prepare($sql);
    $pierre_stmt->bindParam(':id', $idPierre);
    $pierre_stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Pierre::class);
    $pierre_stmt->execute();
    return $pierre_stmt->fetch();
  }

  public function setPierre(Pierre $pierre)
  {
    $nomPierre = $pierre->getNomPierre();
    $sql = 'INSERT INTO pierre VALUES (NULL, :nom)';
    $pierre_stmt = $this->dao->getConnect()->prepare($sql);
    $pierre_stmt->bindParam(':nom', $nomPierre, PDO::PARAM_STR);
    $pierre_stmt->execute();
  }

  public function createPierre()
  {
    $nom = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_SPECIAL_CHARS);

    $pierre = new Pierre($nom);
    $this->setPierre($pierre);
  }

  public function updatePierreById(Pierre $pierre, int $id)
  {
    $sql = 'UPDATE pierre SET nom_pierre=:nom WHERE id_pierre=:id';

    $pierre_stmt = $this->dao->getConnect()->prepare($sql);
    $pierre_stmt->bindParam(':nom', $pierre->getNomPierre(), PDO::PARAM_STR);
    $pierre_stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $pierre_stmt->execute();
  }

  public function deletePierre(int $idPierre)
  {
    $sql = 'DELETE FROM pierre WHERE id_pierre=:id';
    $pierre_stmt = $this->dao->getConnect()->prepare($sql);
    $pierre_stmt->bindParam(':id', $idPierre);
    $pierre_stmt->execute();
  }
}
