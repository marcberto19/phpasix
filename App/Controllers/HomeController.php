<?php
namespace App\Controllers;

class HomeController {
    public function index() {
        require '../resources/views/home/index.blade.php';
    }
}