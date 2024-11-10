<?php
// Archivo: components/shared/hero.php
function heroComponent() {
    ?>
    <section style="background-color: #0F172A; color: white; padding: 80px 0; overflow: hidden;">
        <div class="container mx-auto px-4 flex flex-col lg:flex-row items-center">
            <div class="lg:w-1/2 mb-10 lg:mb-0">
                <h1 class="text-4xl lg:text-6xl font-bold mb-6 animate-fade-up">
                    Vive la pasión del deporte con Full Sports
                </h1>
                <p class="text-xl mb-8 animate-fade-up-delay">
                    Sigue a tus equipos favoritos, analiza estadísticas en tiempo real y conecta con otros fanáticos del deporte.
                </p>
                <div class="flex flex-col sm:flex-row items-center space-y-4 sm:space-y-0 sm:space-x-4 animate-fade-up-delay-2">
                    <a href="#" class="btn bg-[#38BDF8] hover:bg-[#0EA5E9] text-[#0F172A] px-8 py-6 text-lg w-full sm:w-auto">
                        Comienza ahora
                    </a>
                    <a href="#" class="btn bg-[#f34739] hover:bg-[#d63c30] text-[#0F172A] px-8 py-6 text-lg w-full sm:w-auto">
                        Explora deportes
                    </a>
                </div>
            </div>
            <div class="lg:w-1/2 relative w-full h-[300px] sm:h-[400px] md:h-[500px] lg:h-[600px] animate-scale-up">
                <div class="absolute inset-0 bg-gradient-to-r from-[#38BDF8]/20 to-transparent rounded-lg animate-pulse-gradient"></div>
                <div class="relative w-full h-full">
                    <img src="/fondo1.png" alt="Jugador de fútbol en acción" class="object-contain shadow-image" style="width: 100%; height: 100%; object-fit: contain;">
                </div>
                <div class="absolute -bottom-10 -left-10 bg-white/10 backdrop-blur-md p-6 rounded-lg shadow-xl animate-slide-in">
                    <div class="flex items-center space-x-4">
                        <div class="bg-[#38BDF8] rounded-full p-3">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="font-bold text-lg text-[#38BDF8] animate-pulse-text">Super League 2024</p>
                            <p class="text-gray-300">¡Únete ahora!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        /* Animaciones y estilos en CSS */
        .animate-fade-up { opacity: 0; animation: fadeUp 0.5s forwards; }
        .animate-fade-up-delay { opacity: 0; animation: fadeUp 0.5s 0.2s forwards; }
        .animate-fade-up-delay-2 { opacity: 0; animation: fadeUp 0.5s 0.4s forwards; }
        .animate-scale-up { opacity: 0; transform: scale(0.8); animation: scaleUp 0.5s forwards; }
        .animate-slide-in { opacity: 0; transform: translateX(-50px); animation: slideIn 0.5s 0.5s forwards; }
        .animate-pulse-gradient { animation: pulseGradient 3s infinite alternate; }
        .animate-pulse-text { animation: pulseText 3s infinite alternate; }
        .shadow-image { filter: drop-shadow(0 0 20px rgba(56, 189, 248, 0.3)); }

        /* Definiciones de keyframes */
        @keyframes fadeUp { to { opacity: 1; transform: translateY(0); } }
        @keyframes scaleUp { to { opacity: 1; transform: scale(1); } }
        @keyframes slideIn { to { opacity: 1; transform: translateX(0); } }
        @keyframes
