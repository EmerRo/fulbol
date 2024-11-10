<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{ asset('FULL SPORTS.png') }}" type="image/x-icon">

    <title>Full Sports | Vive tu pasión por el deporte</title>
    <link href="{{ asset('css/Pagina.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="navbar-container">
            <a href="#" class="logo">
                <img src="{{ asset('img/FULL SPORTS.png') }}" alt="Full Sports Logo">
                <span>Full Sports</span>
            </a>
            <ul class="nav-menu">
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Deportes</a></li>
                <li><a href="#">Ligas</a></li>
                <li><a href="#">Equipos</a></li>
                <li><a href="#">Jugadores</a></li>
            </ul>
            <div class="nav-buttons">
                <button class="btn-login">Iniciar Sesión</button>
                <button class="btn-register">Registrarse</button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="text-content">
                <h1>Vive la pasión del deporte con Full Sports</h1>
                <p>Sigue a tus equipos favoritos, analiza estadísticas en tiempo<br> real y conecta con otros fanáticos
                    del deporte.</p>
                <div class="buttons">
                    <button class="btn-primary">Comienza ahora</button>
                    <button class="btn-secondary">Explora deportes</button>
                </div>
            </div>
            <div class="image-content">
                <div class="background-overlay"></div>
                <img src="{{ asset('img/fondo1.jpg') }}" alt="Jugador de fútbol en acción" class="hero-image">
                <div class="badge">
                    <div class="badge-icon">
                        <svg class="icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                        </svg>
                    </div>
                    <div>
                        <p class="badge-title">Super League 2024</p>
                        <p class="badge-subtitle">¡Únete ahora!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="features-section">
        <div class="container">
            <h2 class="section-title">¿Por qué elegir Deporstar?</h2>
        </div>

        <div class="container">
            <div class="features-grid">
                <div class="feature-card">
                    <div class="icon-container">
                        <svg class="icono" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h3 class="feature-title">Estadísticas en tiempo real</h3>
                    <p class="feature-description">Accede a estadísticas detalladas y actualizadas al instante de tus
                        deportes y equipos favoritos.</p>
                </div>

                <div class="feature-card">
                    <div class="icon-container">
                        <svg class="icono" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h8m-8 6h16" />
                        </svg>
                    </div>
                    <h3 class="feature-title">Análisis avanzados</h3>
                    <p class="feature-description">Obtén insights profundos con nuestros análisis avanzados de
                        rendimiento de equipos y jugadores.</p>
                </div>

                <div class="feature-card">
                    <div class="icon-container">
                        <svg class="icono" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.94-.5M9 20h6m-8 0h-.01M5.02 10A7 7 0 0119 8c0 5.52-4.48 10-10 10S0 13.52 0 8a7 7 0 015.02 2z" />
                        </svg>
                    </div>
                    <h3 class="feature-title">Comunidad de fanáticos</h3>
                    <p class="feature-description">Conecta con otros aficionados, comparte opiniones y participa en
                        discusiones apasionantes.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20">
    <div class="container mx-auto px-4">
      <h2 class="text-3xl font-bold text-center mb-12 fade-in">Explora tus deportes favoritos</h2>
      <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">

        <!-- Fútbol -->
        <div class="bg-[#1E293B] rounded-lg overflow-hidden shadow-lg cursor-pointer" onclick="openModal('Fútbol', 'El deporte rey, con las mejores ligas y competiciones.')">
          <img src="img/futbol1.jpg" alt="Fútbol" class="w-full">
          <div class="p-6">
            <h3 class="text-xl font-semibold mb-4">Fútbol</h3>
            <button class="w-full bg-[#38BDF8] hover:bg-[#0EA5E9] text-[#0F172A] py-2 rounded">Ver más</button>
          </div>
        </div>

        <!-- Baloncesto -->
        <div class="bg-[#1E293B] rounded-lg overflow-hidden shadow-lg cursor-pointer" onclick="openModal('Baloncesto', 'Sigue la NBA y las principales ligas europeas.')">
          <img src="img/futbol3.jpg" alt="Baloncesto" class="w-full">
          <div class="p-6">
            <h3 class="text-xl font-semibold mb-4">Baloncesto</h3>
            <button class="w-full bg-[#38BDF8] hover:bg-[#0EA5E9] text-[#0F172A] py-2 rounded">Ver más</button>
          </div>
        </div>

        <!-- Tenis -->
        <div class="bg-[#1E293B] rounded-lg overflow-hidden shadow-lg cursor-pointer" onclick="openModal('Tenis', 'Grand Slams, ATP y WTA tours en un solo lugar.')">
          <img src="img/futbol4.jpg" alt="Tenis" class="w-full">
          <div class="p-6">
            <h3 class="text-xl font-semibold mb-4">Tenis</h3>
            <button class="w-full bg-[#38BDF8] hover:bg-[#0EA5E9] text-[#0F172A] py-2 rounded">Ver más</button>
          </div>
        </div>

        <!-- Fórmula 1 -->
        <div class="bg-[#1E293B] rounded-lg overflow-hidden shadow-lg cursor-pointer" onclick="openModal('Fórmula 1', 'Toda la emoción de las carreras y el mundo del motor.')">
          <img src="img/estadio.jpg" alt="Fórmula 1" class="w-full">
          <div class="p-6">
            <h3 class="text-xl font-semibold mb-4">Fórmula 1</h3>
            <button class="w-full bg-[#38BDF8] hover:bg-[#0EA5E9] text-[#0F172A] py-2 rounded">Ver más</button>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Modal -->
  <div id="modal" class="modal">
    <div class="modal-content">
      <h3 id="modal-title" class="text-2xl font-bold mb-4"></h3>
      <p id="modal-description" class="text-gray-300 mb-4"></p>
      <button onclick="closeModal()" class="w-full bg-[#38BDF8] hover:bg-[#0EA5E9] text-[#0F172A] py-2 rounded">Cerrar</button>
    </div>
  </div>

  <script>
    function openModal(title, description) {
      document.getElementById("modal-title").innerText = title;
      document.getElementById("modal-description").innerText = description;
      document.getElementById("modal").classList.add("show");
    }

    function closeModal() {
      document.getElementById("modal").classList.remove("show");
    }
  </script>
</body>
</html>
