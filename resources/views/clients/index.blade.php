<x-app-layout>

    <x-slot name="header">
        <div>
            <h2 class="text-2xl font-bold text-gray-800">
                Clientes
            </h2>
            <p class="mt-1 text-sm text-gray-500">
                Gestión de clientes registrados.
            </p>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            @if (session('success'))
                <div class="mb-6 rounded-lg bg-green-50 border border-green-200 px-4 py-3 text-green-700">
                    {{ session('success') }}
                </div>
            @endif

            <div class="mb-6 flex justify-between items-center">
                <div>
                    <h1 class="text-xl font-semibold text-gray-800">
                        Clientes registrados
                    </h1>
                    <p class="text-sm text-gray-500">
                        Total: {{ $clients->count() }} clientes
                    </p>
                </div>

                <a href="{{ route('clients.create') }}"
                   class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                    + Nuevo cliente
                </a>
            </div>

            <div class="bg-white rounded-xl border border-gray-200 shadow-sm overflow-hidden">

                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">

                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase">
                                    Nombre
                                </th>

                                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase">
                                    Teléfono
                                </th>

                                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase">
                                    Correo
                                </th>

                                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase">
                                    Dirección
                                </th>

                                <th class="px-6 py-3 text-right text-xs font-semibold text-gray-500 uppercase">
                                    Acciones
                                </th>
                            </tr>
                        </thead>

                        <tbody class="divide-y divide-gray-200">

                            @forelse ($clients as $client)

                                <tr class="hover:bg-gray-50">

                                    <td class="px-6 py-4 font-medium text-gray-800">
                                        {{ $client->name }}
                                    </td>

                                    <td class="px-6 py-4 text-gray-600">
                                        {{ $client->phone }}
                                    </td>

                                    <td class="px-6 py-4 text-gray-600">
                                        {{ $client->email ?? '—' }}
                                    </td>

                                    <td class="px-6 py-4 text-gray-600">
                                        {{ $client->address ?? '—' }}
                                    </td>

                                    <td class="px-6 py-4">
                                        <div class="flex justify-end gap-2">

                                            <a href="{{ route('clients.show', $client) }}"
                                               class="px-3 py-1.5 text-sm bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200">
                                                Ver
                                            </a>

                                            <a href="{{ route('clients.edit', $client) }}"
                                               class="px-3 py-1.5 text-sm bg-blue-100 text-blue-700 rounded-lg hover:bg-blue-200">
                                                Editar
                                            </a>

                                            <form action="{{ route('clients.destroy', $client) }}"
                                                  method="POST"
                                                  onsubmit="return confirm('¿Deseas eliminar este cliente?');">
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit"
                                                        class="px-3 py-1.5 text-sm bg-red-100 text-red-700 rounded-lg hover:bg-red-200">
                                                    Eliminar
                                                </button>
                                            </form>

                                        </div>
                                    </td>

                                </tr>

                            @empty

                                <tr>
                                    <td colspan="5" class="px-6 py-10 text-center text-gray-500">
                                        No hay clientes registrados.
                                    </td>
                                </tr>

                            @endforelse

                        </tbody>

                    </table>
                </div>

            </div>

        </div>
    </div>

</x-app-layout>