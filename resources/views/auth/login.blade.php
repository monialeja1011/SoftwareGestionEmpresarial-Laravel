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
            Iniciar sesión
        </h2>

        <p class="mt-1 text-sm text-gray-500">
            Ingresa tus datos para acceder al sistema.
        </p>
    </div>

    <x-auth-session-status
        class="mb-4"
        :status="session('status')"
    />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Correo -->
        <div>
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
                autofocus
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
                autocomplete="current-password"
                placeholder="Contraseña"
            />

            <x-input-error
                :messages="$errors->get('password')"
                class="mt-2"
            />
        </div>

        <!-- Recordarme -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input
                    id="remember_me"
                    type="checkbox"
                    class="text-blue-600 border-gray-300 rounded shadow-sm focus:ring-blue-500"
                    name="remember"
                >

                <span class="ms-2 text-sm text-gray-600">
                    Recordarme
                </span>
            </label>
        </div>

        <!-- Acciones -->
        <div class="mt-6">

            <button
                type="submit"
                class="w-full px-4 py-3 font-semibold text-white transition bg-blue-600 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2"
            >
                Iniciar sesión
            </button>

        </div>

        @if (Route::has('password.request'))
            <div class="mt-4 text-center">
                <a
                    href="{{ route('password.request') }}"
                    class="text-sm font-medium text-blue-600 hover:text-blue-700"
                >
                    ¿Olvidaste tu contraseña?
                </a>
            </div>
        @endif

        <div class="mt-5 text-center">
            <span class="text-sm text-gray-500">
                ¿No tienes una cuenta?
            </span>

            <a
                href="{{ route('register') }}"
                class="text-sm font-semibold text-blue-600 hover:text-blue-700"
            >
                Crear cuenta
            </a>
        </div>

    </form>

    <div class="pt-5 mt-6 text-center border-t border-gray-200">
        <p class="text-xs text-gray-400">
            SGE © {{ date('Y') }}
        </p>
    </div>

</x-guest-layout>