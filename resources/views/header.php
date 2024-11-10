<?php
// Archivo: components/shared/header.php
function headerComponent() {
    ?>
    <header style="background-color: #0F172A; color: white;">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <a href="/" class="flex items-center space-x-2">
                <img src="/FULL SPORTS.png" alt="Deporstar Logo" width="40" height="40" />
                <span class="text-2xl font-bold">Full Sports</span>
            </a>
            <nav class="hidden lg:flex space-x-8">
                <?php foreach (['Inicio', 'Deportes', 'Ligas', 'Equipos', 'Jugadores'] as $item): ?>
                    <a href="#" class="hover:text-[#38BDF8] transition-colors"><?php echo $item; ?></a>
                <?php endforeach; ?>
            </nav>
            <div class="hidden lg:flex items-center space-x-4">
                <a href="../login" class="btn bg-[#f34739] text-white hover:bg-[#d63c30]">Iniciar Sesión</a>
                <a href="../registro" class="btn bg-[#38BDF8] hover:bg-[#0EA5E9] text-[#0F172A]">Registrarse</a>
            </div>
            <button class="lg:hidden" onclick="toggleMenu()">
                <span id="menu-icon" class="h-6 w-6">☰</span>
            </button>
        </div>

        <div id="mobile-menu" class="lg:hidden bg-[#1E293B]" style="display: none;">
            <nav class="flex flex-col space-y-4 p-4">
                <?php foreach (['Inicio', 'Deportes', 'Ligas', 'Equipos', 'Jugadores'] as $item): ?>
                    <a href="#" class="hover:text-[#38BDF8] transition-colors"><?php echo $item; ?></a>
                <?php endforeach; ?>
                <a href="../login" class="btn bg-[#f34739] text-white hover:bg-[#d63c30]">Iniciar Sesión</a>
                <a href="../registro" class="btn bg-[#38BDF8] hover:bg-[#0EA5E9] text-[#0F172A] w-full">Registrarse</a>
            </nav>
        </div>
    </header>

    <script>
        // JavaScript para manejar el menú móvil
        function toggleMenu() {
            const mobileMenu = document.getElementById('mobile-menu');
            const menuIcon = document.getElementById('menu-icon');
            if (mobileMenu.style.display === 'none') {
                mobileMenu.style.display = 'block';
                menuIcon.textContent = '✖'; // Cambiar a icono de cerrar
            } else {
                mobileMenu.style.display = 'none';
                menuIcon.textContent = '☰'; // Cambiar a icono de menú
            }
        }
    </script>
    <?php
}
