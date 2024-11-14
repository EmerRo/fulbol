<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Otros enlaces de CSS y meta tags -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
@vite('resources/css/app.css') <!-- Llama al archivo CSS de Tailwind -->
<div class="min-h-screen flex items-center justify-center bg-[#0F172A] p-4">
    <div class="w-full max-w-md space-y-6 bg-[#1E293B] p-8 rounded-xl shadow-xl">
        <a href="/" class="flex justify-center">
            <div class="w-16 h-16 bg-[#7C3AED] rounded-full flex items-center justify-center overflow-hidden">
                <img src="/img/logo.png" alt="Logo" class="object-contain w-12 h-12">
            </div>
        </a>

        <div class="space-y-2 text-center">
            <h1 class="text-3xl font-bold text-white">Registrarse</h1>
            <p class="text-gray-400">
                ¿Ya tienes una cuenta? <a href="{{ route('login') }}" class="text-[#7C3AED] hover:underline">Iniciar Sesión</a>
            </p>
        </div>

        <form class="space-y-4" method="POST" action="{{ route('register') }}">
            @csrf
            <div class="space-y-2">
                <label for="name" class="text-sm font-medium text-gray-400">Nombre</label>
                <input
                    id="name"
                    name="name"
                    type="text"
                    placeholder="Tu nombre completo"
                    required
                    class="w-full px-3 py-2 bg-[#0F172A] border border-gray-700 rounded-md text-white focus:outline-none focus:ring-2 focus:ring-[#7C3AED] focus:border-transparent"
                >
                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="space-y-2">
                <label for="email" class="text-sm font-medium text-gray-400">Email</label>
                <input
                    id="email"
                    name="email"
                    type="email"
                    placeholder="Correo Electrónico"
                    required
                    class="w-full px-3 py-2 bg-[#0F172A] border border-gray-700 rounded-md text-white focus:outline-none focus:ring-2 focus:ring-[#7C3AED] focus:border-transparent"
                >
                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="space-y-2">
                <label for="password" class="text-sm font-medium text-gray-400">Contraseña</label>
                <input
                    id="password"
                    name="password"
                    type="password"
                    placeholder="••••••••••••"
                    required
                    class="w-full px-3 py-2 bg-[#0F172A] border border-gray-700 rounded-md text-white focus:outline-none focus:ring-2 focus:ring-[#7C3AED] focus:border-transparent"
                >
                @error('password')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="space-y-2">
                <label for="password_confirmation" class="text-sm font-medium text-gray-400">Confirmar Contraseña</label>
                <input
                    id="password_confirmation"
                    name="password_confirmation"
                    type="password"
                    placeholder="••••••••••••"
                    required
                    class="w-full px-3 py-2 bg-[#0F172A] border border-gray-700 rounded-md text-white focus:outline-none focus:ring-2 focus:ring-[#7C3AED] focus:border-transparent"
                >
            </div>

            <div class="flex items-center space-x-2">
                <input id="terms" name="terms" type="checkbox" class="border-gray-700" required>
                <label for="terms" class="text-sm text-gray-400">Acepto los <a href="#" class="text-[#7C3AED] hover:underline">Términos y Condiciones</a></label>
            </div>

            <button type="submit" class="w-full bg-[#7C3AED] hover:bg-[#6D28D9] text-white py-2 rounded-md transition-colors">
                Registrarse
            </button>
        </form>

        <div class="relative">
            <div class="absolute inset-0 flex items-center">
                <div class="w-full border-t border-gray-700"></div>
            </div>
            <div class="relative flex justify-center text-sm">
                <span class="px-2 bg-[#1E293B] text-gray-400">O regístrate con</span>
            </div>
        </div>

        <div class="flex justify-center space-x-4">
            <a href="#" class="p-2 bg-[#0F172A] text-gray-400 rounded-md hover:text-[#7C3AED] transition-colors">
                <span class="sr-only">Registrarse con Facebook</span>
                <i class="fab fa-facebook text-2xl" aria-hidden="true"></i>
            </a>
            <a href="#" class="p-2 bg-[#0F172A] text-gray-400 rounded-md hover:text-[#7C3AED] transition-colors">
                <span class="sr-only">Registrarse con Google</span>
                <i class="fab fa-google text-2xl" aria-hidden="true"></i>
            </a>
        </div>
    </div>
</div>
</body>
@include('footer')
</html>
