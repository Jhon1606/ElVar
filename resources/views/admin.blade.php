<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva de Canchas</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="bg-gray-300">
   
    @include('partials.menu')

    <div class="mx-auto flex flex-col items-center py-8 p-4 overflow-x-auto">
        <table class="w-3/4 bg-white border border-gray-200 mx-auto">
            <thead>
                <tr>
                    <th class="px-4 py-2 border-b border-gray-200 bg-gray-100 text-left text-gray-700 font-semibold">Nombre</th>
                    <th class="px-4 py-2 border-b border-gray-200 bg-gray-100 text-left text-gray-700 font-semibold">Cédula</th>
                    <th class="px-4 py-2 border-b border-gray-200 bg-gray-100 text-left text-gray-700 font-semibold">Email</th>
                    <th class="px-4 py-2 border-b border-gray-200 bg-gray-100 text-left text-gray-700 font-semibold">Estado</th>
                    <th class="px-4 py-2 border-b border-gray-200 bg-gray-100 text-left text-gray-700 font-semibold">Monto</th>
                    <th class="px-4 py-2 border-b border-gray-200 bg-gray-100 text-left text-gray-700 font-semibold">Estado</th>
                    {{-- <th class="px-4 py-2 border-b border-gray-200 bg-gray-100 text-left text-gray-700 font-semibold">Acciones</th> --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($reservas as $reserva)
                    <tr class="hover:bg-gray-50">
                        <td class="px-4 py-2 border-b border-gray-200 text-gray-800">{{ $reserva->nombre_cliente }}</td>
                        <td class="px-4 py-2 border-b border-gray-200 text-gray-800">{{ $reserva->cedula }}</td>
                        <td class="px-4 py-2 border-b border-gray-200 text-gray-800">{{ $reserva->email }}</td>
                        <td class="px-4 py-2 border-b border-gray-200 text-gray-800">{{ $reserva->estado }}</td>
                        <td class="px-4 py-2 border-b border-gray-200 text-gray-800">{{ $reserva->monto }}</td>
                        <td class="px-4 py-2 border-b border-gray-200 text-gray-800">{{ $reserva->metodo }}</td>
                        {{-- <td>
                            <button class="bg-green-500 hover:bg-green-600 text-white font-bold py-1 px-4 rounded">Editar</button>
                            <button class="bg-red-500 hover:bg-red-600 text-white font-bold py-1 px-4 rounded">Eliminar</button>
                        </td> --}}
                    </tr>
                    
                @endforeach
            </tbody>
        </table>      
    </div>

    
</body>
</html>
