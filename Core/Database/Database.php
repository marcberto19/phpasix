<?php

namespace Core\Database;

use PDO;

class Database
{
    protected $pdo; //guardem instancia de la classe pdo

    //creem constructor reb instancia pdo per a realitzar les consultes
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    //creem funcio per agafar els registres d'una taula de la base de dades
    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("SELECT * FROM $table");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function getConnection() {
        return $this->pdo;
    }

}