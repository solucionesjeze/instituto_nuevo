<x-layouts.layout>
    <div class="p-8">

        <h1 class="text-3xl font-bold mb-8 text-blue-800">
            Dashboard
        </h1>

        <div class="flex flex-wrap gap-6">

            {{-- Tarjeta Gestión de alumnos --}}
            <x-dashboard.card
                title="Gestión de alumnos"
                description="Administra los alumnos del instituto."
                buttonText="Ver alumnos"
                route="{{ route('alumnos.index') }}"
                image="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
            />

        </div>

    </div>
</x-layouts.layout>