<?php
//fitxer per definir les rutes
return [
    '/' => '../App/Controllers/HomeController.php@index',
    '/home' => '../App/Controllers/HomeController.php@index',
    '/index' => '../App/Controllers/HomeController.php@index',
    '/index.php' => '../App/Controllers/HomeController.php@index',

    '/books' => '../App/Controllers/BookController.php@index',
    '/books/create' => '../App/Controllers/BookController.php@create',
    '/books/store' => '../App/Controllers/BookController.php@store',
    '/books/edit/{id}' => '../App/Controllers/BookController.php@edit',
    '/books/update/{id}' => '../App/Controllers/BookController.php@update',
    '/books/delete/{id}' => '../App/Controllers/BookController.php@delete',
    '/books/destroy/{id}' => '../App/Controllers/BookController.php@destroy',
    '/books/confirm-delete/{id}' => '../App/Controllers/BookController.php@confirmDelete',

    '/armes' => '../App/Controllers/ArmesController.php@index',
    '/armes/create' => '../App/Controllers/ArmesController.php@create',
    '/armes/store' => '../App/Controllers/ArmesController.php@store',
    '/armes/edit/{id}' => '../App/Controllers/ArmesController.php@edit',
    '/armes/update/{id}' => '../App/Controllers/ArmesController.php@update',
    '/armes/delete/{id}' => '../App/Controllers/ArmesController.php@delete',
    '/armes/destroy/{id}' => '../App/Controllers/ArmesController.php@destroy',
    '/armes/confirm-delete/{id}' => '../App/Controllers/ArmesController.php@confirmDelete',
];