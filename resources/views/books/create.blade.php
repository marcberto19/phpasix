<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Demo ASIX</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
<section>
    <div class="max-w-7xl mx-auto bg-white shadow-lg py-6 sm:px-6 lg:px-8">
        <h1 class="text-2xl font-bold mb-6">Afegir nou llibre</h1>
        <div>
            <form action="/books/store" method="POST">
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700">Títol</label>
                    <input type="text" name="name" id="name" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md">
                </div>
                <div class="mb-4">
                    <label for="author" class="block text-sm font-medium text-gray-700">Autor</label>
                    <input type="text" name="author" id="author" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md">
                </div>
                <div class="mb-4">
                    <label for="releaseYear" class="block text-sm font-medium text-gray-700">Any</label>
                    <input type="number" name="releaseYear" id="releaseYear" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md">
                </div>
                <button type="submit"  class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Crear</button>
            </form>
        </div>
    </div>
</section>
</body>
</html>