<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Crear Nuevo Horario
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    @if (session('success'))
                        <div class="bg-green-500 text-white p-3 rounded">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ url('/crear_nuevo_horario') }}" method="POST">
                        @csrf
                        <div class="grid grid-cols-3 gap-4">
                            <div>
                                <label for="horainicio" class="block text-sm font-medium text-gray-700">Hora de Inicio</label>
                                <input type="number" name="horainicio_hora" id="horainicio_hora" required min="0" max="23 class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" placeholder="HH">
                            </div>
                            <div>
                                <label for="horafinal" class="block text-sm font-medium text-gray-700">Hora Final</label>
                                <input type="number" name="horafinal_hora" id="horafinal_hora" required min="0" max="23" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" placeholder="HH">
                            </div>
                            <div>
                                <label for="dias" class="block text-sm font-medium text-gray-700">Días</label>
                                <input type="text" name="dias" id="dias" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" placeholder="Ej: Lunes, Martes">
                            </div>
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="btn btn-success">Crear Horario</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    @if (session('success'))
                        <div class="bg-green-500 text-white p-3 rounded">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ url('/crear_nuevo_empleado') }}" method="POST">
                        @csrf
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label for="ci" class="block text-sm font-medium text-gray-700">CI</label>
                                <input type="number" name="ci" id="ci" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" placeholder="Cédula de Identidad">
                            </div>
                            <div>
                                <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre</label>
                                <input type="text" name="nombre" id="nombre" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" placeholder="Nombre del empleado">
                            </div>
                            <div>
                                <label for="sexo" class="block text-sm font-medium text-gray-700">Sexo</label>
                                <select name="sexo" id="sexo" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                                    <option value="M">Masculino</option>
                                    <option value="F">Femenino</option>
                                </select>
                            </div>
                            <div>
                                <label for="telefono" class="block text-sm font-medium text-gray-700">Teléfono</label>
                                <input type="number" name="telefono" id="telefono" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" placeholder="Número de teléfono">
                            </div>
                            <div>
                                <label for="direccion" class="block text-sm font-medium text-gray-700">Dirección</label>
                                <input type="text" name="direccion" id="direccion" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" placeholder="Dirección del empleado">
                            </div>
                            <div>
                                <label for="fechacontratacion" class="block text-sm font-medium text-gray-700">Fecha de Contratación</label>
                                <input type="date" name="fechacontratacion" id="fechacontratacion" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                            </div>
                            <div>
                                <label for="cargo" class="block text-sm font-medium text-gray-700">Cargo</label>
                                <input type="text" name="cargo" id="cargo" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" placeholder="Cargo del empleado">
                            </div>
                            <!-- <div>
                                <label for="idhorario" class="block text-sm font-medium text-gray-700">Horario</label>
                                <select name="idhorario" id="idhorario" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                                   
                                </select>
                            </div> -->
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="bg-blue-500 text-black px-4 py-2 rounded">Crear Empleado</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



</x-app-layout>
