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
            <h1 class="text-3xl font-bold text-white">Restablecer Contraseña</h1>
            <p class="text-gray-400">
                Ingresa el código de verificación y tu nueva contraseña
            </p>
        </div>

        <form action="{{ route('password.update') }}" method="POST" class="space-y-4">
            @csrf
            <input type="hidden" name="email" value="{{ $email }}">

            <div class="space-y-2">
                <label for="code" class="text-sm font-medium text-gray-400">Código de Verificación</label>
                <input
                    id="code"
                    name="code"
                    type="text"
                    required
                    class="w-full px-3 py-2 bg-[#0F172A] border border-gray-700 rounded-md text-white focus:outline-none focus:ring-2 focus:ring-[#7C3AED] focus:border-transparent"
                    placeholder="Ingresa el código"
                >
                @error('code')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="space-y-2">
                <label for="password" class="text-sm font-medium text-gray-400">Nueva Contraseña</label>
                <input
                    id="password"
                    name="password"
                    type="password"
                    required
                    class="w-full px-3 py-2 bg-[#0F172A] border border-gray-700 rounded-md text-white focus:outline-none focus:ring-2 focus:ring-[#7C3AED] focus:border-transparent"
                    placeholder="••••••••••••"
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
                    required
                    class="w-full px-3 py-2 bg-[#0F172A] border border-gray-700 rounded-md text-white focus:outline-none focus:ring-2 focus:ring-[#7C3AED] focus:border-transparent"
                    placeholder="••••••••••••"
                >
            </div>

            <button type="submit" class="w-full bg-[#7C3AED] hover:bg-[#6D28D9] text-white py-2 rounded-md transition-colors">
                Actualizar Contraseña
            </button>
        </form>
    </div>
</div>
</body>
</html>
