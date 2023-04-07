<?php

namespace Gems\App\Db;

use PDO;
use PDOException;

class Dao
{
  private ?PDO $connect;

  public function __construct()
  {
    $host = 'localhost';
    $dbname = 'gems_bijoux';
    $username = 'root';
    $password = '';

    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
    try {
      $this->connect = new PDO($dsn, $username, $password);
      $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $pdoException) {
      echo "Erreur de connexion à la base de données: " . $pdoException->getMessage();
    }
  }
  public function getConnect()
  {
    return $this->connect;
  }
}
