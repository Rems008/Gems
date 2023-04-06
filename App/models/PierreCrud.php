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
    $pierre_stmt->setFetchMode(PDO::FETCH_ASSOC);
    // $pierre_stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Gems\App\models\Pierre', ['']);
    $pierre_stmt->execute();
    $pierre = $pierre_stmt->fetchAll();
    return $pierre;
  }

  public function getPierreById(int $idPierre): Pierre
  {
    $sql = 'SELECT * FROM pierre WHERE id_pierre=:id';
    $pierre_stmt = $this->dao->getConnect()->prepare($sql);
    $pierre_stmt->bindParam(':id', $idPierre);
    $pierre_stmt->execute();
    $pierre_stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Gems\App\models\Pierre');
    $bijou = $pierre_stmt->fetch();
    return $bijou;
  }

  public function setPierre(Pierre $pierre)
  {
    $sql = 'INSERT INTO pierre VALUES (NULL, :nom)';
    $pierre_stmt = $this->dao->getConnect()->prepare($sql);
    $param = [
      ':nom' => $pierre->getNom(),
    ];
    $pierre_stmt->execute($param);
  }

  public function createPierre()
  {
    $nom = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_SPECIAL_CHARS);

    $pierre = new Pierre($nom);

    $this->setPierre($pierre);
  }

  public function updatePierreById(Pierre $pierre, int $idPierre)
  {
    $sql = 'UPDATE pierre SET nom_pierre=:nom WHERE id_pierre=' . $idPierre;

    $pierre_stmt = $this->dao->getConnect()->prepare($sql);
    $param = [
      ':nom' => $pierre->getNom()
    ];
    $pierre_stmt->execute($param);
  }

  public function updatePierre()
  {
    $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
    $nom = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_SPECIAL_CHARS);
    $pierre = new Pierre($nom);

    $this->updatePierreById($pierre, $id);
  }

  public function deletePierre(int $idPierre)
  {
    $sql = 'DELETE FROM pierre WHERE id_pierre=:id';
    $pierre_stmt = $this->dao->getConnect()->prepare($sql);
    $pierre_stmt->bindParam(':id', $idPierre);
    $pierre_stmt->execute();
  }
}
