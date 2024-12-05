<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Libro</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }
        h1 {
            text-align: center;
            color: #333;
            margin-top: 20px;
        }
        div {
            max-width: 600px;
            background: #fff;
            margin: 20px auto;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 5px;
            color: #555;
        }
        input {
            width: calc(100% - 10px);
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }
        button {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<h1>Editar llibre: <?= $book->name ?></h1>
<div>
    <form action="/books/update/<?= $book->id ?>" method="POST">
        <div>
            <label for="name">Títol</label>
            <input type="text" name="name" id="name" value="<?= $book->name ?>">
        </div>
        <div>
            <label for="author">Autor</label>
            <input type="text" name="author" id="author" value="<?= $book->author ?>">
        </div>
        <div>
            <label for="releaseYear">Any</label>
            <input type="number" name="releaseYear" id="releaseYear" value="<?= $book->releaseYear ?>">
        </div>
        <button type="submit">Editar</button>
    </form>
</div>
</body>
</html>
