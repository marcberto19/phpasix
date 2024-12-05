<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Arma</title>
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
            margin-bottom: 8px;
            font-weight: bold;
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 14px;
        }
        button {
            width: 100%;
            background-color: #007bff;
            color: white;
            padding: 10px;
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
<h1>Editar arma: <?= $arma->nombre ?></h1>
<div>
    <form action="/armes/update/<?= $arma->id ?>" method="POST">
        <div>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" value="<?= $arma->nombre ?>">
        </div>
        <div>
            <label for="tipo">Tipo</label>
            <input type="text" name="tipo" id="tipo" value="<?= $arma->tipo ?>">
        </div>
        <div>
            <label for="dmg">Daño</label>
            <input type="number" name="dmg" id="dmg" value="<?= $arma->dmg ?>">
        </div>
        <div>
            <label for="descripcion">Descripción</label>
            <textarea name="descripcion" id="descripcion"><?= $arma->descripcion ?></textarea>
        </div>
        <button type="submit">Editar</button>
    </form>
</div>
</body>
</html>

