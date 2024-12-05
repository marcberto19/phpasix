<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar nova arma</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
<section>
    <div class="max-w-7xl mx-auto bg-white shadow-lg py-6 sm:px-6 lg:px-8">
        <h1 class="text-2xl font-bold mb-6">Añadir Nueva Arma</h1>
        <div>
            <form action="/armes/store" method="POST">
                <div class="mb-4">
                    <label for="nombre" class="block text-sm font-medium text-gray-700">Nom</label>
                    <input type="text" name="nombre" id="nombre" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md" required>
                </div>
                <div class="mb-4">
                    <label for="tipo" class="block text-sm font-medium text-gray-700">Tipo</label>
                    <input type="text" name="tipo" id="tipo" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md" required>
                </div>
                <div class="mb-4">
                    <label for="dmg" class="block text-sm font-medium text-gray-700">Dany(DMG)</label>
                    <input type="number" name="dmg" id="dmg" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md" required>
                </div>
                <div class="mb-4">
                    <label for="descripcion" class="block text-sm font-medium text-gray-700">Descripció</label>
                    <textarea name="descripcion" id="descripcion" rows="4" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md" required></textarea>
                </div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Crear</button>
            </form>
        </div>
    </div>
</section>
</body>
</html>
