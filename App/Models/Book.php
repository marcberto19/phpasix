<?php
namespace App\Models;

use Core\App;
use PDO;

class Book {
    protected static $table = "books";

    public $id;
    public $name;
    public $author;
    public $releaseYear;

    public function __construct($data = []) {
        if(isset($data['id'])) {
            $this->id = $data['id'];
        }
        $this->name = $data['name'];
        $this->author = $data['author'];
        $this->releaseYear = $data['releaseYear'];
    }

    public function save() {
        $db = App::get('database')->getConnection();
        if ($this->id) {
            //editem
            $statement = $db->prepare('UPDATE ' . static::$table . ' SET name = :name, author = :author, releaseYear = :releaseYear WHERE id = :id');
            $statement->bindValue(':id', $this->id);
            $statement->bindValue(':name', $this->name);
            $statement->bindValue(':author', $this->author);
            $statement->bindValue(':releaseYear', $this->releaseYear);
            $statement->execute();
        } else {
            //creem
            $statement = $db->prepare('INSERT INTO '. static::$table . ' (name, author, releaseYear) VALUES (:name, :author, :releaseYear)');
            $statement->bindValue(':name', $this->name);
            $statement->bindValue(':author', $this->author);
            $statement->bindValue(':releaseYear', $this->releaseYear);
            $statement->execute();

            if (!$this->id) {
                $this->id = $db->lastInsertId();
            }
        }
    }

    public static function all() {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare('SELECT * FROM ' . static::$table);
        $statement->execute();
        $books = [];
        $results = $statement->fetchAll();
        foreach ($results as $result) {
            $books[] = new self($result);
        }
        return $books;
    }

    public function find($id) {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare('SELECT * FROM ' . static::$table . ' WHERE id = :id');
        $statement->bindValue(':id', $id);
        $statement->execute();
        $data = $statement->fetch();
        return $data ? new self($data) : null;
    }

    public function delete($id) {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare('DELETE FROM ' . static::$table . ' WHERE id = :id');
        $statement->bindValue(':id', $id);
        $statement->execute();
    }

}