<x-layouts.layout>
    @auth
<div class="flex justify-center items-center min-h-[70vh] bg-gray-300 py-10">
    <form action="{{ route('alumnos.store') }}" method="POST" class = "flex flex-col gap-4"
          class="bg-white w-full max-w-lg p-8 rounded-2xl shadow-xl border border-gray-200">

        <h2 class="text-3xl font-bold text-center text-blue-700 mb-6">
            Registro de alumno
        </h2>

        @csrf
        
        <div class="mb-5">
            <label for="nombre" class="block font-semibold text-gray-700 mb-1">
                Nombre
            </label>
            <input type="text" id="nombre" name="nombre" placeholder="Introduce tu nombre"
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 
                       focus:ring-blue-400 focus:border-blue-400 outline-none" value="{{ old('nombre') }}">
                <div class="text-red-600 text-sm">
                       {{ $errors->first("nombre")}}
                </div>
        </div>

        <div class="mb-5">
            <label for="apellido" class="block font-semibold text-gray-700 mb-1">
                Apellido
            </label>
            <input type="text" id="apellido" name="apellido" placeholder="Introduce tu apellido"
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2
                       focus:ring-blue-400 focus:border-blue-400 outline-none" value="{{ old('apellido') }}">
        </div>

        <div class="mb-5">
            <label for="fecha_nacimiento" class="block font-semibold text-gray-700 mb-1">
                Fecha de nacimiento
            </label>
            <input type="date" id="fecha_nacimiento" name="fecha_nacimiento"
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 
                       focus:ring-blue-400 focus:border-blue-400 outline-none" value="{{ old('fecha_nacimiento') }}">
        </div>

        <div class="mb-6">
            <label for="email" class="block font-semibold text-gray-700 mb-1">
                Email
            </label>
            <input type="email" id="email" name="email" placeholder="Introduce tu email"
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 
                       focus:ring-blue-400 focus:border-blue-400 outline-none" value = "{{ old('email') }}">
        </div>

        <div class="text-center">
            <button type="submit"
                class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-2 
                       rounded-lg shadow-md transition">
                Enviar
            </button>
        </div>

    </form>

</div>
    @endauth
</x-layouts.layout>