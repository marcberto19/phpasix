<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Eliminar Arma</title>
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
            margin-bottom: 20px;
            color: #555;
        }
        button {
            background-color: #dc3545;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            margin-right: 10px;
        }
        button:hover {
            background-color: #b02a37;
        }
        a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #6c757d;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            font-size: 16px;
        }
        a:hover {
            background-color: #5a6268;
        }
    </style>
</head>
<body>
<h1>Eliminar arma:</h1>
<div>
    <p>Estás segur de que vols eliminar el arma <strong><?= $arma->nombre ?></strong>?</p>
    <form action="/armes/destroy/<?= $arma->id ?>" method="POST">
        <button type="submit">Eliminar</button>
        <a href="/armes">Cancelar</a>
    </form>
</div>
</body>
</html>
