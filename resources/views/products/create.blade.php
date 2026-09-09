<x-app-layout>
    <x-slot name="header">
        <div>
            <h2 class="text-xl font-semibold text-gray-800">
                Nuevo producto
            </h2>
            <p class="text-sm text-gray-500">
                Registrar un nuevo producto
            </p>
        </div>
    </x-slot>

    <div class="py-8 bg-white">
        <div class="max-w-3xl mx-auto px-6">

            <div class="bg-white border border-gray-200 rounded-xl p-6">

                <form method="POST" action="{{ route('products.store') }}">
                    @csrf

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">

                        <div>
                            <label class="block text-sm font-medium text-gray-700">
                                Nombre del producto
                            </label>
                            <input type="text" name="name" required
                                class="mt-1 block w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700">
                                Código
                            </label>
                            <input type="text" name="code" required
                                class="mt-1 block w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700">
                                Precio
                            </label>
                            <input type="number" name="price" step="0.01" min="0" required
                                class="mt-1 block w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700">
                                Stock
                            </label>
                            <input type="number" name="stock" min="0" required
                                class="mt-1 block w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500">
                        </div>

                        <div class="md:col-span-2">
                            <label class="block text-sm font-medium text-gray-700">
                                Descripción
                            </label>
                            <textarea name="description" rows="4"
                                class="mt-1 block w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500"></textarea>
                        </div>

                    </div>

                    <div class="mt-6 flex justify-end gap-3">
                        <a href="{{ route('products.index') }}"
                           class="px-5 py-2.5 border border-gray-300 rounded-lg text-sm font-medium text-gray-700 hover:bg-gray-50">
                            Cancelar
                        </a>

                        <button type="submit"
                            class="px-5 py-2.5 bg-blue-600 text-white rounded-lg text-sm font-medium hover:bg-blue-700">
                            Guardar producto
                        </button>
                    </div>

                </form>

            </div>

        </div>
    </div>
</x-app-layout>
