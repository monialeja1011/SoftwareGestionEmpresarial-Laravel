<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SGE - Sistema de Gestión Empresarial</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-white text-gray-800">

    <!-- Encabezado -->
    <header class="border-b border-gray-200">
        <div class="max-w-6xl mx-auto px-6 py-5 flex items-center justify-between">

            <div class="flex items-center gap-3">
                <div class="w-10 h-10 bg-blue-600 text-white rounded-lg flex items-center justify-center font-bold">
                    SG
                </div>

                <div>
                    <h1 class="text-xl font-bold text-gray-900">SGE</h1>
                    <p class="text-xs text-gray-500">Sistema de Gestión Empresarial</p>
                </div>
            </div>

            <div class="flex items-center gap-3">
                @auth
                    <a href="{{ route('dashboard') }}"
                       class="px-4 py-2 text-sm font-medium text-blue-600 hover:text-blue-800">
                        Panel
                    </a>
                @else
                    <a href="{{ route('login') }}"
                       class="px-4 py-2 text-sm font-medium text-gray-600 hover:text-blue-600">
                        Iniciar sesión
                    </a>

                    <a href="{{ route('register') }}"
                       class="px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-lg hover:bg-blue-700">
                        Registrarse
                    </a>
                @endauth
            </div>

        </div>
    </header>


    <!-- Hero -->
    <main>
        <section class="max-w-6xl mx-auto px-6 py-20 text-center">

            <div class="max-w-3xl mx-auto">

                <span class="inline-block px-3 py-1 mb-5 text-sm font-medium text-blue-600 bg-blue-50 rounded-full">
                    Gestión empresarial
                </span>

                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 leading-tight">
                    Administra tu empresa
                    <span class="text-blue-600">de forma sencilla</span>
                </h2>

                <p class="mt-6 text-lg text-gray-600 leading-relaxed">
                    SGE es un sistema de gestión empresarial diseñado para
                    centralizar y organizar las principales operaciones de tu empresa.
                </p>

                <div class="mt-8 flex flex-col sm:flex-row justify-center gap-3">

                    @auth
                        <a href="{{ route('dashboard') }}"
                           class="px-6 py-3 bg-blue-600 text-white rounded-lg font-medium hover:bg-blue-700">
                            Ir al panel
                        </a>
                    @else
                        <a href="{{ route('login') }}"
                           class="px-6 py-3 bg-blue-600 text-white rounded-lg font-medium hover:bg-blue-700">
                            Iniciar sesión
                        </a>

                        <a href="{{ route('register') }}"
                           class="px-6 py-3 border border-gray-300 text-gray-700 rounded-lg font-medium hover:bg-gray-50">
                            Crear cuenta
                        </a>
                    @endauth

                </div>

            </div>

        </section>


        <!-- Características -->
        <section class="border-t border-gray-200 bg-gray-50">
            <div class="max-w-6xl mx-auto px-6 py-16">

                <div class="text-center mb-10">
                    <h3 class="text-2xl font-bold text-gray-900">
                        Todo en un solo lugar
                    </h3>

                    <p class="mt-2 text-gray-600">
                        Herramientas para facilitar la gestión de tu empresa.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                    <div class="bg-white border border-gray-200 rounded-xl p-6">
                        <div class="w-10 h-10 bg-blue-50 text-blue-600 rounded-lg flex items-center justify-center mb-4">
                            👥
                        </div>

                        <h4 class="font-semibold text-gray-900">
                            Gestión de usuarios
                        </h4>

                        <p class="mt-2 text-sm text-gray-600">
                            Administra el acceso de los usuarios al sistema.
                        </p>
                    </div>


                    <div class="bg-white border border-gray-200 rounded-xl p-6">
                        <div class="w-10 h-10 bg-blue-50 text-blue-600 rounded-lg flex items-center justify-center mb-4">
                            📦
                        </div>

                        <h4 class="font-semibold text-gray-900">
                            Control empresarial
                        </h4>

                        <p class="mt-2 text-sm text-gray-600">
                            Organiza la información y las operaciones de tu empresa.
                        </p>
                    </div>


                    <div class="bg-white border border-gray-200 rounded-xl p-6">
                        <div class="w-10 h-10 bg-blue-50 text-blue-600 rounded-lg flex items-center justify-center mb-4">
                            📊
                        </div>

                        <h4 class="font-semibold text-gray-900">
                            Información centralizada
                        </h4>

                        <p class="mt-2 text-sm text-gray-600">
                            Consulta la información empresarial desde un solo sistema.
                        </p>
                    </div>

                </div>

            </div>
        </section>

    </main>


    <!-- Footer -->
    <footer class="border-t border-gray-200">
        <div class="max-w-6xl mx-auto px-6 py-6 text-center">

            <p class="text-sm text-gray-500">
                © {{ date('Y') }} SGE - Sistema de Gestión Empresarial
            </p>

            <p class="mt-1 text-xs text-gray-400">
                Proyecto académico - COTECNOVA 2026
            </p>

        </div>
    </footer>

</body>
</html>