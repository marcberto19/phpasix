<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión de Armas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #4CAF50;
            color: white;
            text-align: center;
            padding: 10px 0;
        }

        header a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        header a:hover {
            text-decoration: underline;
        }

        .container {
            padding: 20px;
            width: 80%;
            margin: 0 auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table th, table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }

        table th {
            background-color: #4CAF50;
            color: white;
        }

        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        table tr:hover {
            background-color: #ddd;
        }

        .actions a {
            text-decoration: none;
            color: #4CAF50;
            margin: 0 10px;
        }

        .actions a:hover {
            text-decoration: underline;
        }

        .create-link {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
        }

        .create-link:hover {
            background-color: #45a049;
        }

    </style>
</head>
<body>
<header>
    <h1>Armes</h1>
</header>

<div class="container">
    <p><a class="create-link" href="/armes/create">Crear Arma</a></p>

    <table>
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nom</th>
            <th scope="col">Tipus</th>
            <th scope="col">Dmg</th>
            <th scope="col">Descripcio</th>
            <th scope="col">Accions</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($armas as $arma): ?>
        <tr>
            <td><?=$arma->id;?></td>
            <td><?=$arma->nombre;?></td>
            <td><?=$arma->tipo;?></td>
            <td><?=$arma->dmg;?></td>
            <td><?=$arma->descripcion;?></td>
            <td class="actions">
                <a href="/armes/edit/<?= $arma->id?>">Editar</a>
                <a href="/armes/confirm-delete/<?= $arma->id?>">Eliminar</a>
            </td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>

