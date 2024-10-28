<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva de Canchas</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .hour-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .hour-table th, .hour-table td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
        }

        .reserved {
            background-color: #ccc;
            color: #333;
        }

        .available {
            background-color: #d1f7c4;
            color: #333;
            cursor: pointer;
        }

        .navigation {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 10px;
        }

        .navigation button {
            background-color: #2d3e50;
            color: white;
            border: none;
            padding: 5px 10px;
            margin: 0 10px;
            cursor: pointer;
        }
    </style>
</head>
<body class="bg-gray-300">
   
    @include('partials.menu')

    <div class="mx-auto flex flex-col items-center py-8 p-4">
        <h1 class="text-2xl text-center">Bienvenidos</h1>

        <!-- Card para los pasos -->
        <div class="w-full sm:w-[500px] h-[300px] p-4 bg-green-500 rounded-lg shadow-lg text-center text-white flex items-center justify-center mt-4  mx-auto"
            onclick="openModal('modal1')" style="background-image: url('/images/reserva-cancha.jpg'); background-size: cover; background-position: center;">
            {{-- <h2 class="text-xl font-bold mb-2">CONOCE LOS PASOS PARA RESERVAR TU CANCHA AQUÍ</h2> --}}
        </div>

        <!-- Cards para los protocolos y reglamento -->
        <div class="flex flex-col sm:flex-row sm:space-x-4 mt-4 w-full sm:w-auto items-center">
            <!-- Card para el reglamento -->
            <div class="w-full sm:w-[500px] h-[300px] p-4 bg-green-500 rounded-lg shadow-lg text-center text-white flex items-center justify-center mt-4 sm:mt-0 mx-auto"
                onclick="openModal('modal3')" style="background-image: url('/images/Reglas_futbol.webp'); background-size: cover; background-position: center;">
                <h2 class="text-xl font-bold mb-2">CONOCE EL REGLAMENTO DE USO DE LAS CANCHAS</h2>
            </div>
        </div>
        <div class="flex justify-center mt-4">
            <button onclick="openModalEx()" class="bg-green-600 text-white py-2 px-4 rounded mx-2 transition duration-300 ease-in-out hover:bg-green-700">RESERVAR</button>
            <button class="bg-blue-400 text-white py-2 px-4 rounded mx-2">CONSULTAR RESERVA</button>
        </div>
    </div>

    <!-- Modales -->
    <div id="modal1" class="fixed inset-0 bg-black bg-opacity-50 hidden flex items-center justify-center">
        <div class="bg-white p-8 rounded shadow-lg max-w-md">
            <h2 class="text-2xl font-bold mb-4">Modal 1</h2>
            <p>Contenido del primer modal.</p>
            <button onclick="closeModal('modal1')" class="mt-4 bg-red-500 text-white px-4 py-2 rounded">Cerrar</button>
        </div>
    </div>

    <div id="modal2" class="fixed inset-0 bg-black bg-opacity-50 hidden flex items-center justify-center">
        <div class="bg-white p-8 rounded shadow-lg max-w-md">
            <h2 class="text-2xl font-bold mb-4">Modal 2</h2>
            <p>Contenido del segundo modal.</p>
            <button onclick="closeModal('modal2')" class="mt-4 bg-red-500 text-white px-4 py-2 rounded">Cerrar</button>
        </div>
    </div>

    <div id="modal3" class="fixed inset-0 bg-black bg-opacity-50 hidden flex items-center justify-center">
        <div class="bg-white p-8 rounded shadow-lg max-w-md">
            <h2 class="text-2xl font-bold mb-4">Modal 3</h2>
            <p>Contenido del tercer modal.</p>
            <button onclick="closeModal('modal3')" class="mt-4 bg-red-500 text-white px-4 py-2 rounded">Cerrar</button>
        </div>
    </div>

    <div id="modalReserva" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden transition-opacity duration-300 ease-in-out px-4" style="opacity: 0;">
        <div class="bg-white p-8 rounded shadow-lg max-w-3xl w-full h-5/6 overflow-y-auto transform transition-all duration-300 ease-in-out scale-95 scrollbar-hidden">
            <h2 class="text-2xl font-bold mb-4">Reservar cancha</h2>
            <form>
                <div class="border-b border-gray-900/10 pb-12">
                    <h2 class="text-base font-semibold leading-7 text-gray-900">Información del cliente</h2>
                    <p class="mt-1 text-sm leading-6 text-gray-600">Rellenar todos los campos del formulario para hacer la reserva</p>
    
                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-3">
                            <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Nombre</label>
                            <div class="mt-2">
                                <input type="text" name="name" id="name" autocomplete="name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
    
                        <div class="sm:col-span-3">
                            <label for="cedula" class="block text-sm font-medium leading-6 text-gray-900">Cédula</label>
                            <div class="mt-2">
                                <input type="number" name="cedula" id="cedula" autocomplete="cedula" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
    
                        <div class="sm:col-span-3">
                            <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Correo electrónico</label>
                            <div class="mt-2">
                                <input id="email" name="email" type="email" autocomplete="email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div class="sm:col-span-3">
                            <label for="monto" class="block text-sm font-medium leading-6 text-gray-900">Celular</label>
                            <div class="mt-2">
                                <input id="celular" name="celular" type="number" autocomplete="celular" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div class="sm:col-span-3">
                            <label for="monto" class="block text-sm font-medium leading-6 text-gray-900">Monto a pagar</label>
                            {{-- <p class="mt-1 text-sm leading-6 text-gray-600">El monto mínimo es de 20.000</p> --}}
                            <div class="mt-2">
                                <input id="monto" name="monto" type="number" autocomplete="monto" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div class="sm:col-span-3">
                            <label for="cancha" class="block text-sm font-medium leading-6 text-gray-900">Cancha</label>
                            <div class="mt-2">
                              <select id="cancha" name="cancha" autocomplete="cancha" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                <option>Cancha Futbol 5 VS 5</option>
                                <option>Example</option>
                              </select>
                            </div>
                        </div>

                        <div class="sm:col-span-6">
                            <!-- Navegación para cambiar días -->
                            <div class="navigation">
                                <button id="prevDay">←</button>
                                <div id="currentDate" class="font-bold text-xl"></div>
                                <button id="nextDay">→</button>
                            </div>

                            <!-- Tabla de horas -->
                            <table class="hour-table">
                                <thead>
                                <tr>
                                    <th colspan="2" id="dayOfWeek">DÍA</th>
                                </tr>
                                </thead>
                                <tbody id="hourRows">
                                <!-- Las horas se generarán aquí dinámicamente -->
                                </tbody>
                            </table>
                        </div>
    
                        {{-- <div class="sm:col-span-6">
                            <fieldset>
                                <legend class="text-sm font-semibold leading-6 text-gray-900">Método de pago</legend>
                                <p class="mt-1 text-sm leading-6 text-gray-600">Seleccione el método de pago</p>
                                <div class="mt-6 space-y-6">
                                    <div class="flex items-center gap-x-3">
                                        <input id="push-everything" name="push-notifications" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        <label for="push-everything" class="block text-sm font-medium leading-6 text-gray-900">Tarjeta Debito/Credito</label>
                                    </div>
                                    <div class="flex items-center gap-x-3">
                                        <input id="push-email" name="push-notifications" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        <label for="push-email" class="block text-sm font-medium leading-6 text-gray-900">PSE</label>
                                    </div>
                                </div>
                            </fieldset>
                        </div> --}}
                    </div>
                </div>
    
                <div class="mt-6 flex items-center justify-end gap-x-6">
                    <button onclick="closeModalEx()" type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancelar</button>
                    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Guardar</button>
                </div>
            </form>
        </div>
    </div>

   <!-- Modal de inicio de sesión -->
    <div id="loginModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 transition-opacity duration-300 hidden">
        <div class="bg-white w-80 p-6 rounded-lg shadow-lg relative">
            <h2 class="text-2xl font-bold text-center mb-4">Iniciar sesión</h2>
            <!-- Formulario de inicio de sesión -->
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-semibold mb-2">Correo Electrónico</label>
                    <input type="email" name="email" id="email" required class="w-full p-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
                </div>
                <div class="mb-6">
                    <label for="password" class="block text-gray-700 font-semibold mb-2">Contraseña</label>
                    <input type="password" name="password" id="password" required class="w-full p-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
                </div>
                <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600">
                    Iniciar sesión
                </button>
            </form>
            <!-- Botón para cerrar el modal -->
            <button id="closeLoginModal" class="absolute top-3 right-3 text-gray-500 hover:text-gray-700">&times;</button>
        </div>
    </div>


    {{-- <!-- Enlace al CSS de Flatpickr -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    <!-- Script de Flatpickr -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        // Inicializa Flatpickr
        flatpickr("#fecha_hora", {
            enableTime: true,
            dateFormat: "Y-m-d H:i",
            defaultDate: "today",
            minDate: "today", // No permite seleccionar días anteriores
            time_24hr: true, // Mostrar en formato de 24 horas
            minuteIncrement: 30, // Incrementos de 30 minutos
            altInput: true, // Campo alternativo más legible
            altFormat: "F j, Y H:i", // Formato legible de fecha y hora
        });
    </script> --}}

    <script>
        const reservedHours = ["08:00", "12:00", "16:00", "20:00"];
        const allHours = [
            "5 AM - 6 AM", "6 AM - 7 AM", "7 AM - 8 AM", "8 AM - 9 AM", "9 AM - 10 AM",
            "10 AM - 11 AM", "11 AM - 12 PM", "12 PM - 1 PM", "1 PM - 2 PM", "2 PM - 3 PM",
            "3 PM - 4 PM", "4 PM - 5 PM", "5 PM - 6 PM", "6 PM - 7 PM", "7 PM - 8 PM",
            "8 PM - 9 PM", "9 PM - 10 PM"
        ];
    
        let currentDate = new Date();
    
        function updateDateDisplay() {
            const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
            document.getElementById('currentDate').textContent = currentDate.toLocaleDateString('es-ES', options);
            document.getElementById('dayOfWeek').textContent = currentDate.toLocaleDateString('es-ES', { weekday: 'long' }).toUpperCase();
            generateHourRows();
        }
    
        function generateHourRows() {
            const tbody = document.getElementById('hourRows');
            tbody.innerHTML = ''; // Limpiar las filas anteriores
    
            allHours.forEach(hour => {
                const row = document.createElement('tr');
                const cell = document.createElement('td');
                cell.colSpan = 2;
                cell.textContent = hour;
    
                // Simulamos que ciertas horas están reservadas (por ejemplo, si coinciden con las de `reservedHours`)
                const hourMatch = reservedHours.some(reserved => hour.includes(reserved.split(":")[0]));
                if (hourMatch) {
                    cell.classList.add('reserved');
                } else {
                    cell.classList.add('available');
                    cell.addEventListener('click', () => {
                        alert(`Has seleccionado la hora: ${hour}`);
                    });
                }
    
                row.appendChild(cell);
                tbody.appendChild(row);
            });
        }
    
        // Funcionalidad de navegación entre días
        document.getElementById('prevDay').addEventListener('click', () => {
            currentDate.setDate(currentDate.getDate() - 1);
            updateDateDisplay();
        });
    
        document.getElementById('nextDay').addEventListener('click', () => {
            currentDate.setDate(currentDate.getDate() + 1);
            updateDateDisplay();
        });
    
        // Inicializar el calendario con la fecha actual
        updateDateDisplay();
    </script>

</body>
</html>
