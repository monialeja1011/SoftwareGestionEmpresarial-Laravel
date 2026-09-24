<x-app-layout>

    <x-slot name="header">
        <div>
            <h2 class="text-2xl font-bold text-gray-800">
                Detalle del cliente
            </h2>

            <p class="mt-1 text-sm text-gray-500">
                Información del cliente registrado.
            </p>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="bg-white rounded-xl border border-gray-200 shadow-sm">

                <div class="p-6 border-b border-gray-200">
                    <h1 class="text-xl font-bold text-gray-800">
                        {{ $client->name }}
                    </h1>

                    <p class="mt-1 text-sm text-gray-500">
                        Información general
                    </p>
                </div>

                <div class="p-6 space-y-5">

                    <div>
                        <p class="text-sm text-gray-500">
                            Nombre
                        </p>

                        <p class="mt-1 font-medium text-gray-800">
                            {{ $client->name }}
                        </p>
                    </div>

                    <div>
                        <p class="text-sm text-gray-500">
                            Teléfono
                        </p>

                        <p class="mt-1 font-medium text-gray-800">
                            {{ $client->phone }}
                        </p>
                    </div>

                    <div>
                        <p class="text-sm text-gray-500">
                            Correo electrónico
                        </p>

                        <p class="mt-1 font-medium text-gray-800">
                            {{ $client->email ?? 'No registrado' }}
                        </p>
                    </div>

                    <div>
                        <p class="text-sm text-gray-500">
                            Dirección
                        </p>

                        <p class="mt-1 font-medium text-gray-800">
                            {{ $client->address ?? 'No registrada' }}
                        </p>
                    </div>

                </div>

                <div class="p-6 border-t border-gray-200 flex justify-end gap-3">

                    <a href="{{ route('clients.index') }}"
                       class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200">
                        Volver
                    </a>

                    <a href="{{ route('clients.edit', $client) }}"
                       class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                        Editar
                    </a>

                </div>

            </div>

        </div>
    </div>

</x-app-layout>
