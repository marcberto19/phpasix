<?php
//fitxer per crear la connexió a la base de dades
namespace Core\Database;

use PDO;

class Connection
{
    //creem instancia de la clase PDO per establir la connexió a la base de dades
    public static function make($config)
    {
        try {
            //PDO es per a mysql
            return new PDO(
                $config['databasetype'] . ':host=' . $config['host'] .
                ';dbname=' . $config['name'], $config['user'], $config['password']
            );
        } catch (\Exception $e) {
            echo 'Error de connexió a la base de dades!!!';
            echo 'Error:' . $e->getMessage();
        }
    }

}