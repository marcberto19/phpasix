<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Eliminar Llibre</title>
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
            text-align: center;
        }
        p {
            font-size: 16px;
            color: #555;
            margin-bottom: 20px;
        }
        button {
            background-color: #d9534f;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            margin-right: 10px;
        }
        button:hover {
            background-color: #c9302c;
        }
        a {
            text-decoration: none;
            color: #007bff;
            font-size: 16px;
            padding: 10px 20px;
            border: 1px solid #007bff;
            border-radius: 4px;
        }
        a:hover {
            background-color: #0056b3;
            color: white;
        }
    </style>
</head>
<body>
<h1>Eliminar llibre:</h1>
<div>
    <p>Estàs segur que vols eliminar el llibre <strong><?= $book->name ?></strong>?</p>
    <form action="/books/destroy/<?= $book->id ?>" method="POST">
        <button type="submit">Eliminar</button>
        <a href="/books">Cancel·lar</a>
    </form>
</div>
</body>
</html>
