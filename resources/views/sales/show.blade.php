<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <div>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    Detalle de venta #{{ $sale->id }}
                </h2>
                <p class="text-sm text-gray-500 mt-1">
                    Información de la venta y productos asociados
                </p>
            </div>

            <a href="{{ route('sales.index') }}"
               class="px-4 py-2 rounded-lg text-sm font-medium
                      bg-gray-100 text-gray-700 hover:bg-gray-200">
                Volver
            </a>
        </div>
    </x-slot>

    <div class="py-8 bg-white min-h-screen">
        <div class="max-w-5xl mx-auto px-6 lg:px-8">

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">

                <div class="bg-white border border-gray-200 rounded-xl shadow-sm p-5">
                    <p class="text-xs text-gray-500 uppercase">Cliente</p>
                    <p class="mt-2 text-lg font-semibold text-gray-900">
                        {{ $sale->client->name }}
                    </p>
                    <p class="text-sm text-gray-500">
                        {{ $sale->client->email }}
                    </p>
                </div>

                <div class="bg-white border border-gray-200 rounded-xl shadow-sm p-5">
                    <p class="text-xs text-gray-500 uppercase">Fecha</p>
                    <p class="mt-2 text-lg font-semibold text-gray-900">
                        {{ $sale->date->format('d/m/Y') }}
                    </p>
                </div>

                <div class="bg-white border border-gray-200 rounded-xl shadow-sm p-5">
                    <p class="text-xs text-gray-500 uppercase">Estado</p>
                    <p class="mt-2">
                        @if ($sale->status === 'Completada')
                            <span class="inline-flex px-3 py-1 rounded-full
                                         text-sm font-medium bg-green-100 text-green-700">
                                Completada
                            </span>
                        @else
                            <span class="inline-flex px-3 py-1 rounded-full
                                         text-sm font-medium bg-yellow-100 text-yellow-700">
                                Pendiente
                            </span>
                        @endif
                    </p>
                </div>

            </div>

            <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden">

                <div class="px-6 py-5 border-b border-gray-200">
                    <h3 class="text-lg font-semibold text-gray-900">
                        Productos de la venta
                    </h3>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left">
                        <thead class="bg-gray-50 border-b border-gray-200">
                            <tr>
                                <th class="px-6 py-4 font-semibold text-gray-600">
                                    Producto
                                </th>
                                <th class="px-6 py-4 font-semibold text-gray-600">
                                    Cantidad
                                </th>
                                <th class="px-6 py-4 font-semibold text-gray-600">
                                    Precio unitario
                                </th>
                                <th class="px-6 py-4 font-semibold text-gray-600">
                                    Subtotal
                                </th>
                            </tr>
                        </thead>

                        <tbody class="divide-y divide-gray-100">
                            @foreach ($sale->details as $detail)
                                <tr>
                                    <td class="px-6 py-4 font-medium text-gray-900">
                                        {{ $detail->product->name }}
                                    </td>

                                    <td class="px-6 py-4 text-gray-600">
                                        {{ $detail->quantity }}
                                    </td>

                                    <td class="px-6 py-4 text-gray-600">
                                        ${{ number_format($detail->unit_price, 0, ',', '.') }}
                                    </td>

                                    <td class="px-6 py-4 font-semibold text-gray-900">
                                        ${{ number_format($detail->quantity * $detail->unit_price, 0, ',', '.') }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="px-6 py-5 border-t border-gray-200 flex justify-end">
                    <div class="text-right">
                        <p class="text-sm text-gray-500">
                            Total de la venta
                        </p>
                        <p class="text-2xl font-bold text-blue-600">
                            ${{ number_format($sale->total, 0, ',', '.') }}
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </div>
</x-app-layout>
