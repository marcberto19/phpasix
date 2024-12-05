<?php
namespace App\Controllers;
use App\Models\Arma;

class ArmesController {

    public function index() {
        $armas = Arma::all(); // Obtener todas las armas
        require '../resources/views/armes/index.blade.php'; // Mostrar la vista de lista de armas
    }

    public function create() {
        require '../resources/views/armes/create.blade.php'; // Mostrar formulario para crear una nueva arma
    }

    public function store() {
        $nombre = $_POST['nombre']; // Obtener el nombre de la nueva arma
        $tipo = $_POST['tipo']; // Obtener el tipo de arma
        $danio = $_POST['danio']; // Obtener el daño de la arma
        $descripcion = $_POST['descripcion']; // Obtener la descripción de la arma

        $nuevaArma = new Arma([
            'nombre' => $nombre,
            'tipo' => $tipo,
            'dmg' => $dmg,
            'descripcion' => $descripcion
        ]);
        $nuevaArma->save(); // Guardar la nueva arma en la base de datos
        header('Location: /armes'); // Redirigir al listado de armas
    }

    public function edit($id) {
        $arma = (new \App\Models\Arma)->find($id); // Buscar el arma por su id
        if (!$arma) {
            header('Location: /armes'); // Si no se encuentra el arma, redirigir al listado
            exit();
        }
        require '../resources/views/armes/edit.blade.php'; // Mostrar formulario para editar el arma
    }

    public function update($id) {
        $arma = (new \App\Models\Arma)->find($id); // Buscar el arma por su id
        if (!$arma) {
            header('Location: /armes'); // Si no se encuentra el arma, redirigir al listado
            exit();
        }

        // Actualizar los valores de la arma
        $arma->nombre = $_POST['nombre'];
        $arma->tipo = $_POST['tipo'];
        $arma->danio = $_POST['danio'];
        $arma->descripcion = $_POST['descripcion'];
        $arma->save(); // Guardar los cambios
        header('Location: /armes'); // Redirigir al listado de armas
    }

    public function delete($id) {
        if ($id === null) {
            header('Location: /armes'); // Si no se proporciona un id, redirigir al listado
            exit();
        }
        $arma = (new \App\Models\Arma)->find($id); // Buscar el arma por su id
        return require '../resources/views/armes/delete.blade.php'; // Mostrar vista de confirmación de eliminación
    }

    public function destroy($id) {
        (new \App\Models\Arma)->delete($id); // Eliminar el arma de la base de datos
        header('Location: /armes'); // Redirigir al listado de armas
    }

    public function confirmDelete($id) {
        $arma = (new \App\Models\Arma)->find($id); // Buscar el arma por su id
        return require '../resources/views/armes/delete.blade.php'; // Mostrar vista de confirmación de eliminación
    }
}

