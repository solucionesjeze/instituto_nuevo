<x-layouts.layout>

    <div
        class="hero min-h-[calc(100vh-5rem)]"
        style="background-image: url(https://img.daisyui.com/images/stock/photo-1507358522600-9f71e620c44e.webp);"
    >
        <div class="hero-overlay bg-opacity-60"></div>

        <div class="hero-content text-neutral-content text-center">
            <div class="max-w-md">
                <h1 class="mb-5 text-5xl font-bold">Gestión de Instituto</h1>

                <p class="mb-5">
                    Administra alumnos de forma rápida y ordenada: crea, edita, elimina y consulta con paginación.
                </p>

                <a href="{{ route('alumnos.index') }}" class="btn btn-primary">
                    Empezar
                </a>
            </div>
        </div>
    </div>

</x-layouts.layout>