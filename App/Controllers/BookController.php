<?php
namespace App\Controllers;
use App\Models\Book;
class BookController {

    public function index() {
        $books = Book::all();
        require '../resources/views/books/index.blade.php';
    }

    public function create() {
        require '../resources/views/books/create.blade.php';
    }

    public function store() {
        $name = $_POST['name'];
        $author = $_POST['author'];
        $releaseYear = $_POST['releaseYear'];

        $newBook = new Book([
            'name' => $name,
            'author' => $author,
            'releaseYear' => $releaseYear
        ]);
        $newBook->save();
        header('Location: /books');
    }

    public function edit($id) {
        $book = (new \App\Models\Book)->find($id);
        if(!$book) {
            header('Location: /books');
            exit();
        }
        require '../resources/views/books/edit.blade.php';
    }

    public function update($id) {
        $book = (new \App\Models\Book)->find($id);
        if(!$book) {
            header('Location: /books');
            exit();
        }
        $book->name = $_POST['name'];
        $book->author = $_POST['author'];
        $book->releaseYear = $_POST['releaseYear'];
        $book->save();
        header('Location: /books');
    }

    public function delete($id) {
        if ($id === null) {
            header('Location: /books');
            exit();
        }
        $book = (new \App\Models\Book)->find($id);
        return require '../resources/views/books/delete.blade.php';
    }

    public function destroy($id) {
        (new \App\Models\Book)->delete($id);
        header('Location: /books');
    }

    public function confirmDelete($id) {
        $book = (new \App\Models\Book)->find($id);
        return require '../resources/views/books/delete.blade.php';
    }
}