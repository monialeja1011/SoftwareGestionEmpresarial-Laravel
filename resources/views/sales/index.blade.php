<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <div>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    Ventas
                </h2>
                <p class="text-sm text-gray-500 mt-1">
                    Registro y consulta de ventas
                </p>
            </div>

            <a href="{{ route('sales.create') }}"
               class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent
                      rounded-lg font-semibold text-xs text-white uppercase tracking-widest
                      hover:bg-blue-700 focus:bg-blue-700 active:bg-blue-800">
                + Nueva venta
            </a>
        </div>
    </x-slot>

    <div class="py-8 bg-white min-h-screen">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            @if (session('success'))
                <div class="mb-6 rounded-lg bg-green-50 border border-green-200
                            px-4 py-3 text-sm text-green-700">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden">

                <div class="px-6 py-5 border-b border-gray-200">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900">
                                Ventas registradas
                            </h3>
                            <p class="text-sm text-gray-500 mt-1">
                                Total de ventas: {{ $sales->count() }}
                            </p>
                        </div>

                        <div class="text-right">
                            <p class="text-xs text-gray-500 uppercase">
                                Total vendido
                            </p>
                            <p class="text-xl font-bold text-blue-600">
                                ${{ number_format($sales->sum('total'), 0, ',', '.') }}
                            </p>
                        </div>
                    </div>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left">
                        <thead class="bg-gray-50 border-b border-gray-200">
                            <tr>
                                <th class="px-6 py-4 font-semibold text-gray-600">
                                    #
                                </th>
                                <th class="px-6 py-4 font-semibold text-gray-600">
                                    Cliente
                                </th>
                                <th class="px-6 py-4 font-semibold text-gray-600">
                                    Fecha
                                </th>
                                <th class="px-6 py-4 font-semibold text-gray-600">
                                    Total
                                </th>
                                <th class="px-6 py-4 font-semibold text-gray-600">
                                    Estado
                                </th>
                                <th class="px-6 py-4 font-semibold text-gray-600 text-right">
                                    Acciones
                                </th>
                            </tr>
                        </thead>

                        <tbody class="divide-y divide-gray-100">
                            @forelse ($sales as $sale)
                                <tr class="hover:bg-gray-50">

                                    <td class="px-6 py-4 text-gray-700">
                                        {{ $sale->id }}
                                    </td>

                                    <td class="px-6 py-4">
                                        <div class="font-medium text-gray-900">
                                            {{ $sale->client->name }}
                                        </div>
                                        <div class="text-xs text-gray-500">
                                            {{ $sale->client->email }}
                                        </div>
                                    </td>

                                    <td class="px-6 py-4 text-gray-600">
                                        {{ $sale->date->format('d/m/Y') }}
                                    </td>

                                    <td class="px-6 py-4 font-semibold text-gray-900">
                                        ${{ number_format($sale->total, 0, ',', '.') }}
                                    </td>

                                    <td class="px-6 py-4">
                                        @if ($sale->status === 'Completada')
                                            <span class="inline-flex px-2.5 py-1 rounded-full
                                                         text-xs font-medium bg-green-100 text-green-700">
                                                Completada
                                            </span>
                                        @else
                                            <span class="inline-flex px-2.5 py-1 rounded-full
                                                         text-xs font-medium bg-yellow-100 text-yellow-700">
                                                Pendiente
                                            </span>
                                        @endif
                                    </td>

                                    <td class="px-6 py-4 text-right">
                                        <div class="flex justify-end gap-2">

                                            <a href="{{ route('sales.show', $sale) }}"
                                               class="px-3 py-1.5 rounded-lg text-xs font-medium
                                                      bg-blue-50 text-blue-700 hover:bg-blue-100">
                                                Ver
                                            </a>

                                            <a href="{{ route('sales.edit', $sale) }}"
                                               class="px-3 py-1.5 rounded-lg text-xs font-medium
                                                      bg-gray-100 text-gray-700 hover:bg-gray-200">
                                                Editar
                                            </a>

                                            <form action="{{ route('sales.destroy', $sale) }}"
                                                  method="POST"
                                                  onsubmit="return confirm('¿Eliminar esta venta?');">
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit"
                                                        class="px-3 py-1.5 rounded-lg text-xs font-medium
                                                               bg-red-50 text-red-700 hover:bg-red-100">
                                                    Eliminar
                                                </button>
                                            </form>

                                        </div>
                                    </td>

                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="px-6 py-12 text-center text-gray-500">
                                        No hay ventas registradas.
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
