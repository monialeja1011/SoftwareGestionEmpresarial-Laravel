<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <div>
                <h2 class="text-xl font-semibold text-gray-800">
                    Productos
                </h2>
                <p class="text-sm text-gray-500">
                    Gestión de productos
                </p>
            </div>

            <a href="{{ route('products.create') }}"
               class="px-4 py-2 bg-blue-600 text-white rounded-lg text-sm font-medium hover:bg-blue-700">
                + Nuevo producto
            </a>
        </div>
    </x-slot>

    <div class="py-8 bg-white">
        <div class="max-w-7xl mx-auto px-6">

            @if (session('success'))
                <div class="mb-5 rounded-lg bg-green-50 border border-green-200 px-4 py-3 text-sm text-green-700">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white border border-gray-200 rounded-xl overflow-hidden">
                <table class="w-full text-sm">
                    <thead class="bg-gray-50 border-b border-gray-200">
                        <tr>
                            <th class="text-left px-5 py-3">Producto</th>
                            <th class="text-left px-5 py-3">Código</th>
                            <th class="text-left px-5 py-3">Precio</th>
                            <th class="text-left px-5 py-3">Stock</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($products as $product)
                            <tr class="border-b border-gray-100">
                                <td class="px-5 py-4 font-medium text-gray-900">
                                    {{ $product->name }}
                                </td>
                                <td class="px-5 py-4 text-gray-600">
                                    {{ $product->code }}
                                </td>
                                <td class="px-5 py-4 text-gray-600">
                                    ${{ number_format($product->price, 2) }}
                                </td>
                                <td class="px-5 py-4 text-gray-600">
                                    {{ $product->stock }}
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="px-5 py-10 text-center text-gray-500">
                                    No hay productos registrados.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</x-app-layout>
