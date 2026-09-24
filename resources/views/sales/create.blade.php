<x-app-layout>
    <x-slot name="header">
        <div>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Nueva venta
            </h2>
            <p class="text-sm text-gray-500 mt-1">
                Registrar una nueva venta
            </p>
        </div>
    </x-slot>

    <div class="py-8 bg-white min-h-screen">
        <div class="max-w-3xl mx-auto px-6 lg:px-8">

            @if ($errors->any())
                <div class="mb-6 rounded-lg bg-red-50 border border-red-200 px-4 py-3">
                    <ul class="text-sm text-red-700 list-disc list-inside">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="bg-white border border-gray-200 rounded-xl shadow-sm p-6">

                <form method="POST" action="{{ route('sales.store') }}" class="space-y-6">
                    @csrf

                    <div>
                        <label for="client_id" class="block text-sm font-medium text-gray-700 mb-2">
                            Cliente
                        </label>

                        <select id="client_id" name="client_id" required
                                class="w-full border-gray-300 rounded-lg focus:border-blue-500 focus:ring-blue-500">
                            <option value="">Seleccione un cliente</option>

                            @foreach ($clients as $client)
                                <option value="{{ $client->id }}"
                                    {{ old('client_id') == $client->id ? 'selected' : '' }}>
                                    {{ $client->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label for="product_id" class="block text-sm font-medium text-gray-700 mb-2">
                            Producto
                        </label>

                        <select id="product_id" name="product_id" required
                                class="w-full border-gray-300 rounded-lg focus:border-blue-500 focus:ring-blue-500">
                            <option value="">Seleccione un producto</option>

                            @foreach ($products as $product)
                                <option value="{{ $product->id }}"
                                    {{ old('product_id') == $product->id ? 'selected' : '' }}>
                                    {{ $product->name }} — Stock: {{ $product->stock }} —
                                    ${{ number_format($product->price, 0, ',', '.') }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                        <div>
                            <label for="quantity" class="block text-sm font-medium text-gray-700 mb-2">
                                Cantidad
                            </label>

                            <input type="number"
                                   id="quantity"
                                   name="quantity"
                                   min="1"
                                   value="{{ old('quantity', 1) }}"
                                   required
                                   class="w-full border-gray-300 rounded-lg focus:border-blue-500 focus:ring-blue-500">
                        </div>

                        <div>
                            <label for="date" class="block text-sm font-medium text-gray-700 mb-2">
                                Fecha
                            </label>

                            <input type="date"
                                   id="date"
                                   name="date"
                                   value="{{ old('date', date('Y-m-d')) }}"
                                   required
                                   class="w-full border-gray-300 rounded-lg focus:border-blue-500 focus:ring-blue-500">
                        </div>

                    </div>

                    <div>
                        <label for="status" class="block text-sm font-medium text-gray-700 mb-2">
                            Estado
                        </label>

                        <select id="status" name="status" required
                                class="w-full border-gray-300 rounded-lg focus:border-blue-500 focus:ring-blue-500">
                            <option value="Pendiente"
                                {{ old('status') === 'Pendiente' ? 'selected' : '' }}>
                                Pendiente
                            </option>

                            <option value="Completada"
                                {{ old('status', 'Completada') === 'Completada' ? 'selected' : '' }}>
                                Completada
                            </option>
                        </select>
                    </div>

                    <div class="flex items-center justify-end gap-3 pt-4 border-t border-gray-200">

                        <a href="{{ route('sales.index') }}"
                           class="px-4 py-2 rounded-lg text-sm font-medium
                                  bg-gray-100 text-gray-700 hover:bg-gray-200">
                            Cancelar
                        </a>

                        <button type="submit"
                                class="px-5 py-2 rounded-lg text-sm font-semibold
                                       bg-blue-600 text-white hover:bg-blue-700">
                            Registrar venta
                        </button>

                    </div>

                </form>

            </div>
        </div>
    </div>
</x-app-layout>
