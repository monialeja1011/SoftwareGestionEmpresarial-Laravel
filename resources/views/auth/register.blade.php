<x-guest-layout>

    <div class="mb-6 text-center">
        <div class="inline-flex items-center justify-center w-12 h-12 mb-3 rounded-xl bg-blue-600">
            <span class="text-xl font-bold text-white">SG</span>
        </div>

        <h1 class="text-2xl font-bold text-gray-800">
            SGE
        </h1>

        <p class="mt-1 text-sm text-gray-500">
            Sistema de Gestión Empresarial
        </p>
    </div>

    <div class="mb-6">
        <h2 class="text-xl font-semibold text-gray-800">
            Crear cuenta
        </h2>

        <p class="mt-1 text-sm text-gray-500">
            Registra tus datos para ingresar al sistema.
        </p>
    </div>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Nombre -->
        <div>
            <x-input-label
                for="name"
                :value="__('Nombre completo')"
            />

            <x-text-input
                id="name"
                class="block w-full mt-1"
                type="text"
                name="name"
                :value="old('name')"
                required
                autofocus
                autocomplete="name"
                placeholder="Nombre completo"
            />

            <x-input-error
                :messages="$errors->get('name')"
                class="mt-2"
            />
        </div>

        <!-- Correo -->
        <div class="mt-4">
            <x-input-label
                for="email"
                :value="__('Correo electrónico')"
            />

            <x-text-input
                id="email"
                class="block w-full mt-1"
                type="email"
                name="email"
                :value="old('email')"
                required
                autocomplete="username"
                placeholder="correo@ejemplo.com"
            />

            <x-input-error
                :messages="$errors->get('email')"
                class="mt-2"
            />
        </div>

        <!-- Contraseña -->
        <div class="mt-4">
            <x-input-label
                for="password"
                :value="__('Contraseña')"
            />

            <x-text-input
                id="password"
                class="block w-full mt-1"
                type="password"
                name="password"
                required
                autocomplete="new-password"
                placeholder="Contraseña"
            />

            <x-input-error
                :messages="$errors->get('password')"
                class="mt-2"
            />
        </div>

        <!-- Confirmar contraseña -->
        <div class="mt-4">
            <x-input-label
                for="password_confirmation"
                :value="__('Confirmar contraseña')"
            />

            <x-text-input
                id="password_confirmation"
                class="block w-full mt-1"
                type="password"
                name="password_confirmation"
                required
                autocomplete="new-password"
                placeholder="Confirmar contraseña"
            />

            <x-input-error
                :messages="$errors->get('password_confirmation')"
                class="mt-2"
            />
        </div>

        <!-- Botón -->
        <div class="mt-6">
            <button
                type="submit"
                class="w-full px-4 py-3 font-semibold text-white transition bg-blue-600 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2"
            >
                Crear cuenta
            </button>
        </div>

        <!-- Login -->
        <div class="mt-5 text-center">
            <span class="text-sm text-gray-500">
                ¿Ya tienes una cuenta?
            </span>

            <a
                href="{{ route('login') }}"
                class="text-sm font-semibold text-blue-600 hover:text-blue-700"
            >
                Iniciar sesión
            </a>
        </div>

    </form>

    <div class="mt-6 pt-5 border-t border-gray-200 text-center">
        <p class="text-xs text-gray-400">
            SGE © {{ date('Y') }}
        </p>
    </div>

</x-guest-layout>