<x-app-layout>

    <x-slot name="header">
        <div>
            <h2 class="text-xl font-semibold text-gray-800">
                Detalle del producto
            </h2>

            <p class="text-sm text-gray-500">
                Información del producto registrado
            </p>
        </div>
    </x-slot>

    <div class="py-8 bg-white">

        <div class="max-w-3xl mx-auto px-6">

            <div class="bg-white border border-gray-200 rounded-xl p-6">

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                    <div>
                        <p class="text-sm text-gray-500">
                            Producto
                        </p>

                        <p class="mt-1 text-lg font-semibold text-gray-900">
                            {{ $product->name }}
                        </p>
                    </div>

                    <div>
                        <p class="text-sm text-gray-500">
                            Código
                        </p>

                        <p class="mt-1 text-lg font-semibold text-gray-900">
                            {{ $product->code }}
                        </p>
                    </div>

                    <div>
                        <p class="text-sm text-gray-500">
                            Categoría
                        </p>

                        <p class="mt-1 text-gray-900">
                            {{ $product->category->name }}
                        </p>
                    </div>

                    <div>
                        <p class="text-sm text-gray-500">
                            Precio
                        </p>

                        <p class="mt-1 text-gray-900">
                            ${{ number_format($product->price, 2) }}
                        </p>
                    </div>

                    <div>
                        <p class="text-sm text-gray-500">
                            Stock
                        </p>

                        <p class="mt-1 text-gray-900">
                            {{ $product->stock }}
                        </p>
                    </div>

                    <div class="md:col-span-2">

                        <p class="text-sm text-gray-500">
                            Descripción
                        </p>

                        <p class="mt-1 text-gray-900">
                            {{ $product->description ?: 'Sin descripción registrada.' }}
                        </p>

                    </div>

                </div>

                <div class="mt-8 flex justify-end gap-3">

                    <a href="{{ route('products.index') }}"
                       class="px-5 py-2.5 border border-gray-300 rounded-lg text-sm font-medium text-gray-700 hover:bg-gray-50">
                        Volver
                    </a>

                    <a href="{{ route('products.edit', $product) }}"
                       class="px-5 py-2.5 bg-blue-600 text-white rounded-lg text-sm font-medium hover:bg-blue-700">
                        Editar producto
                    </a>

                </div>

            </div>

        </div>

    </div>

</x-app-layout>
