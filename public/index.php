<?php
//    require 'App/index.php';
//    require 'resources/views/index.blade.php';

//carreguem el fitxer autoload que carrega les dependencies definides al composer.json
//i també les classes definides als espais de noms
use Core\App;

require '../vendor/autoload.php'; //incloem fitxer autoload

//carreguem bootstrap que realitza la configuració inicial del framework
require '../Core/bootstrap.php';

//gestionem les rutes del projecte, l'enrutador busca la ruta a config i rederigeix la solicitud
App::get('router')->redirect($_SERVER['REQUEST_URI']);
