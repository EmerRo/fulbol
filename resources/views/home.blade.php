{{-- resources/views/hero.blade.php --}}

<section class="bg-[#0F172A] text-white py-20 overflow-hidden">
    <div class="container mx-auto px-4 flex flex-col lg:flex-row items-center">
        <div class="lg:w-1/2 mb-10 lg:mb-0">
            <h1 class="text-4xl lg:text-6xl font-bold mb-6 animate__animated animate__fadeInUp">
                Vive la pasión del deporte con Full Sports
            </h1>
            <p class="text-xl mb-8 animate__animated animate__fadeInUp" style="animation-delay: 0.2s;">
                Sigue a tus equipos favoritos, analiza estadísticas en tiempo real y conecta con otros fanáticos del deporte.
            </p>
            <div class="flex flex-col sm:flex-row items-center space-y-4 sm:space-y-0 sm:space-x-4">
                <a href="#" class="bg-[#38BDF8] text-[#0F172A] px-10 py-3 rounded font-bold hover:bg-[#d63c30] transition duration-300">
                    Comienza ahora
                </a>
                <a href="#" class="bg-[#f34739] text-[#0F172A] px-10 py-3 rounded font-bold hover:bg-[#0EA5E9] transition duration-300">
                    Explora deportes
                </a>
            </div>
        </div>
        <div class="lg:w-1/2 relative w-full h-[300px] sm:h-[400px] md:h-[500px] lg:h-[600px] animate__animated animate__fadeInUp">
            <div class="absolute inset-0 bg-gradient-to-r from-[#38BDF8]/20 to-transparent rounded-lg animate__animated animate__fadeInUp">
                <!-- Animación de fondo -->
            </div>
            <div class="relative w-full h-full overflow-hidden">
                <img src="{{ asset('img/fondo1.png') }}" alt="Jugador de fútbol en acción" class="object-contain w-full h-full transition-transform duration-500 ease-in-out transform hover:scale-105" style="filter: drop-shadow(0 0 20px rgba(56, 189, 248, 0.3));">
            </div>
            <div class="absolute -bottom-10 -left-10 bg-white/10 backdrop-blur-md p-6 rounded-lg shadow-xl animate__animated animate__fadeInUp" style="animation-delay: 0.5s;">
                <div class="flex items-center space-x-4">
                    <div class="bg-[#38BDF8] rounded-full p-3">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                        </svg>
                    </div>
                    <div>
                        <p class="font-bold text-lg animate__animated animate__fadeInUp" style="animation-delay: 0.5s;">
                            Super League 2024
                        </p>
                        <p class="text-gray-300">¡Únete ahora!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
