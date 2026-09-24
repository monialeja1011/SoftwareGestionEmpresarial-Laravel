<x-app-layout>

    <x-slot name="header">
        <div>
            <h2 class="text-2xl font-bold text-gray-800">
                Panel de control
            </h2>
            <p class="mt-1 text-sm text-gray-500">
                Sistema de Gestión Empresarial
            </p>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Bienvenida -->
            <div class="mb-8">
                <h1 class="text-2xl font-bold text-gray-800">
                    Bienvenido, {{ Auth::user()->name }}
                </h1>

                <p class="mt-1 text-gray-500">
                    Gestiona la información de tu empresa desde este panel.
                </p>
            </div>

            <!-- Tarjetas -->
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">

                <!-- Usuarios -->
                <a href="{{ route('profile.edit') }}"
                   class="bg-white rounded-xl border border-gray-200 shadow-sm p-6
                          hover:border-blue-400 hover:shadow-md transition">

                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-gray-500">
                                Usuarios
                            </p>

                            <p class="mt-2 text-3xl font-bold text-gray-800">
                                {{ $usuarios }}
                            </p>
                        </div>

                        <div class="flex items-center justify-center w-12 h-12 rounded-lg bg-blue-100">
                            <span class="text-xl font-bold text-blue-600">
                                U
                            </span>
                        </div>
                    </div>
                </a>

                <!-- Clientes -->
                <a href="{{ route('clients.index') }}"
                   class="bg-white rounded-xl border border-gray-200 shadow-sm p-6
                          hover:border-green-400 hover:shadow-md transition">

                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-gray-500">
                                Clientes
                            </p>

                            <p class="mt-2 text-3xl font-bold text-gray-800">
                                {{ $clientes }}
                            </p>
                        </div>

                        <div class="flex items-center justify-center w-12 h-12 rounded-lg bg-green-100">
                            <span class="text-xl font-bold text-green-600">
                                C
                            </span>
                        </div>
                    </div>
                </a>

                <!-- Productos -->
                <a href="{{ route('products.index') }}"
                   class="bg-white rounded-xl border border-gray-200 shadow-sm p-6
                          hover:border-purple-400 hover:shadow-md transition">

                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-gray-500">
                                Productos
                            </p>

                            <p class="mt-2 text-3xl font-bold text-gray-800">
                                {{ $productos }}
                            </p>
                        </div>

                        <div class="flex items-center justify-center w-12 h-12 rounded-lg bg-purple-100">
                            <span class="text-xl font-bold text-purple-600">
                                P
                            </span>
                        </div>
                    </div>
                </a>

                <!-- Ventas -->
                <a href="{{ route('sales.index') }}"
                   class="bg-white rounded-xl border border-gray-200 shadow-sm p-6
                          hover:border-orange-400 hover:shadow-md transition">

                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-gray-500">
                                Ventas
                            </p>

                            <p class="mt-2 text-3xl font-bold text-gray-800">
                                {{ $ventas }}
                            </p>
                        </div>

                        <div class="flex items-center justify-center w-12 h-12 rounded-lg bg-orange-100">
                            <span class="text-xl font-bold text-orange-600">
                                V
                            </span>
                        </div>
                    </div>
                </a>

            </div>

            <!-- Módulos -->
            <div class="mt-8 bg-white rounded-xl border border-gray-200 shadow-sm">

                <div class="p-6 border-b border-gray-200">
                    <h3 class="text-lg font-semibold text-gray-800">
                        Módulos del sistema
                    </h3>

                    <p class="mt-1 text-sm text-gray-500">
                        Accesos principales del sistema de gestión.
                    </p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 p-6">

                    <!-- Usuarios -->
                    <a href="{{ route('profile.edit') }}"
                       class="p-5 rounded-lg border border-gray-200
                              hover:border-blue-400 hover:shadow-sm transition">

                        <h4 class="font-semibold text-gray-800">
                            Usuarios
                        </h4>

                        <p class="mt-1 text-sm text-gray-500">
                            Administración de usuarios.
                        </p>
                    </a>

                    <!-- Clientes -->
                    <a href="{{ route('clients.index') }}"
                       class="p-5 rounded-lg border border-gray-200
                              hover:border-green-400 hover:shadow-sm transition">

                        <h4 class="font-semibold text-gray-800">
                            Clientes
                        </h4>

                        <p class="mt-1 text-sm text-gray-500">
                            Gestión de clientes.
                        </p>

                        <span class="inline-block mt-3 text-sm text-green-600">
                            Ver clientes →
                        </span>
                    </a>

                    <!-- Productos -->
                    <a href="{{ route('products.index') }}"
                       class="p-5 rounded-lg border border-gray-200
                              hover:border-purple-400 hover:shadow-sm transition">

                        <h4 class="font-semibold text-gray-800">
                            Productos
                        </h4>

                        <p class="mt-1 text-sm text-gray-500">
                            Control de productos.
                        </p>

                        <span class="inline-block mt-3 text-sm text-purple-600">
                            Ver productos →
                        </span>
                    </a>

                    <!-- Ventas -->
                    <a href="{{ route('sales.index') }}"
                       class="p-5 rounded-lg border border-gray-200
                              hover:border-orange-400 hover:shadow-sm transition">

                        <h4 class="font-semibold text-gray-800">
                            Ventas
                        </h4>

                        <p class="mt-1 text-sm text-gray-500">
                            Registro y seguimiento de ventas.
                        </p>

                        <span class="inline-block mt-3 text-sm text-orange-600">
                            Ver ventas →
                        </span>
                    </a>

                </div>
            </div>

        </div>
    </div>

</x-app-layout>