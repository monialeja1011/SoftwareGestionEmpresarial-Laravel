<x-app-layout>

    <x-slot name="header">
        <div>
            <h2 class="text-xl font-semibold text-gray-800">
                Editar producto
            </h2>

            <p class="text-sm text-gray-500">
                Actualizar información del producto
            </p>
        </div>
    </x-slot>

    <div class="py-8 bg-white">

        <div class="max-w-3xl mx-auto px-6">

            <div class="bg-white border border-gray-200 rounded-xl p-6">

                <form method="POST" action="{{ route('products.update', $product) }}">
                    @csrf
                    @method('PUT')

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">

                        <div>
                            <label class="block text-sm font-medium text-gray-700">
                                Nombre del producto
                            </label>

                            <input type="text"
                                   name="name"
                                   value="{{ old('name', $product->name) }}"
                                   required
                                   class="mt-1 block w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700">
                                Código
                            </label>

                            <input type="text"
                                   name="code"
                                   value="{{ old('code', $product->code) }}"
                                   required
                                   class="mt-1 block w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700">
                                Categoría
                            </label>

                            <select name="category_id"
                                    required
                                    class="mt-1 block w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500">

                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ old('category_id', $product->category_id) == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach

                            </select>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700">
                                Precio
                            </label>

                            <input type="number"
                                   name="price"
                                   value="{{ old('price', $product->price) }}"
                                   step="0.01"
                                   min="0"
                                   required
                                   class="mt-1 block w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700">
                                Stock
                            </label>

                            <input type="number"
                                   name="stock"
                                   value="{{ old('stock', $product->stock) }}"
                                   min="0"
                                   required
                                   class="mt-1 block w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500">
                        </div>

                        <div class="md:col-span-2">

                            <label class="block text-sm font-medium text-gray-700">
                                Descripción
                            </label>

                            <textarea name="description"
                                      rows="4"
                                      class="mt-1 block w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500">{{ old('description', $product->description) }}</textarea>

                        </div>

                    </div>

                    <div class="mt-6 flex justify-end gap-3">

                        <a href="{{ route('products.index') }}"
                           class="px-5 py-2.5 border border-gray-300 rounded-lg text-sm font-medium text-gray-700 hover:bg-gray-50">
                            Cancelar
                        </a>

                        <button type="submit"
                                class="px-5 py-2.5 bg-blue-600 text-white rounded-lg text-sm font-medium hover:bg-blue-700">
                            Actualizar producto
                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>

</x-app-layout>
