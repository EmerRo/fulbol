<!-- resources/views/header.blade.php -->
<header class="bg-[#0F172A] text-white">
  <div class="container mx-auto px-4 py-4 flex justify-between items-center">
    <a href="/" class="flex items-center space-x-2">
      <img src="{{asset('img/logo.png')}}" alt="Deporstar Logo" width="40" height="40">
      <span class="text-2xl font-bold">Full Sports</span>
    </a>
    <nav class="hidden lg:flex space-x-8">
      @foreach (['Inicio', 'Deportes', 'Ligas', 'Equipos', 'Jugadores'] as $item)
        <a href="#" class="hover:text-[#38BDF8] transition-colors">{{ $item }}</a>
      @endforeach
    </nav>
    <div class="hidden lg:flex items-center space-x-4">
      <a href="../login" class="bg-[#f34739] text-white px-4 py-2 rounded hover:bg-[#d63c30]">Iniciar Sesión</a>
      <a href="../register" class="bg-[#38BDF8] text-[#0F172A] px-4 py-2 rounded hover:bg-[#0EA5E9]">Registrarse</a>
    </div>
    <button class="lg:hidden" onclick="toggleMenu()">
      <span class="h-6 w-6" id="menuIcon">&#9776;</span> <!-- Simple icon for mobile -->
    </button>
  </div>
  <div class="lg:hidden bg-[#1E293B]" id="mobileMenu" style="display: none;">
    <nav class="flex flex-col space-y-4 p-4">
      @foreach (['Inicio', 'Deportes', 'Ligas', 'Equipos', 'Jugadores'] as $item)
        <a href="#" class="hover:text-[#38BDF8] transition-colors">{{ $item }}</a>
      @endforeach
      <a href="../login" class="bg-[#f34739] text-white px-4 py-2 rounded hover:bg-[#d63c30]">Iniciar Sesión</a>
      <a href="../registro" class="bg-[#38BDF8] text-[#0F172A] px-4 py-2 rounded w-full hover:bg-[#0EA5E9]">Registrarse</a>
    </nav>
  </div>
</header>

<script>
  function toggleMenu() {
    const mobileMenu = document.getElementById('mobileMenu');
    const menuIcon = document.getElementById('menuIcon');
    mobileMenu.style.display = mobileMenu.style.display === 'none' ? 'block' : 'none';
    menuIcon.textContent = menuIcon.textContent === '✖' ? '☰' : '✖';
  }
</script>
