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
            <h1 class="text-3xl font-bold text-white">Recuperar Contraseña</h1>
            <p class="text-gray-400">
                Ingresa tu correo electrónico para recibir un código de verificación
            </p>
        </div>

        <form action="{{ route('password.email') }}" method="POST" class="space-y-4">
            @csrf
            <div class="space-y-2">
                <label for="email" class="text-sm font-medium text-gray-400">Email</label>
                <input
                    id="email"
                    name="email"
                    type="email"
                    required
                    class="w-full px-3 py-2 bg-[#0F172A] border border-gray-700 rounded-md text-white focus:outline-none focus:ring-2 focus:ring-[#7C3AED] focus:border-transparent"
                    placeholder="Correo Electrónico"
                >
                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="w-full bg-[#7C3AED] hover:bg-[#6D28D9] text-white py-2 rounded-md transition-colors">
                Enviar Código de Verificación
            </button>
        </form>

        <div class="text-center">
            <a href="{{ route('login') }}" class="text-sm text-[#7C3AED] hover:underline">
                Volver al inicio de sesión
            </a>
        </div>
    </div>
</div>
</body>
</html>
