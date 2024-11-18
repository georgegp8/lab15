<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <!-- CDN de Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <div class="container mx-auto p-4">
        <h1 class="text-4xl font-bold text-center text-gray-800 mb-6">Lista de Productos</h1>
        
        @if($productos->isEmpty())
            <p class="text-center text-gray-600 text-lg">No hay productos disponibles.</p>
        @else
            <div class="bg-gray-200 p-4 rounded-lg shadow-md">
                <ul>
                    @foreach ($productos as $producto)
                        <li class="bg-white border rounded-md shadow p-4 mb-2">
                            <h2 class="font-bold text-gray-700">{{ $producto->nombre }}</h2>
                            <p class="text-sm text-gray-500">Precio: ${{ number_format($producto->precio, 2) }}</p>
                        </li>
                    @endforeach
                </ul>
            </div>        
        @endif
    </div>
</body>
</html>

