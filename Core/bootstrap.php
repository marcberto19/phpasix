<?php
//el fitxer bootstrap s'encarrega de configurar i inicialitzar l'entorn de l'aplicació
//carregar les configuracion, inicialitzar les dependencies com la base de dades o el router

use Dotenv\Dotenv; // carregar les variables d'entorn
use Core\App;  //importar contenidor de dependències
use Core\Database\Connection; //importem connexion per a la connexió a la base de dades
use Core\Database\Database; //importem database per fer les operacions a la base de dades
use Core\Route; //carregar la gestió per a l'enrutament

//creant una variable carreguem el fitxer de rutes
$routes = require '../routes.php';

//creem variable per carregar les variables d'entorn
$dotenv = Dotenv::createImmutable(__DIR__.'/..');
$dotenv->load(); //carreguem variables

//enllacem l'arxiu config al contenidor com a config on tenim les variables d'entorn
App::bind('config', require '../config.php');

//enllacem instancia de database
App::bind('database', new Database(
    Connection::make(
        App::get('config')['database']
    )
));

//enllacem instancia rutes
App::bind('router', (new Route())->define($routes));

