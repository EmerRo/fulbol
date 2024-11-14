<section class="bg-[#0F172A] py-20">
  <div class="container mx-auto px-4">
    <h2 class="text-3xl font-bold text-center text-white mb-12" id="sports-title">
      Explora tus deportes favoritos
    </h2>
    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8" id="sports-container">
      <!-- Aquí se agregarán los deportes dinámicamente -->
    </div>
  </div>
  <div id="modal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center p-4 hidden">
    <div id="modal-content" class="bg-[#1E293B] p-6 rounded-lg max-w-md w-full">
      <h3 class="text-2xl font-bold text-white mb-4" id="modal-title"></h3>
      <p class="text-gray-300 mb-4" id="modal-description"></p>
      <button id="close-modal" class="w-full bg-[#38BDF8] hover:bg-[#0EA5E9] text-[#0F172A] block text-center py-2 rounded modal-trigger cursor-pointer">Cerrar</button>
    </div>
  </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/framer-motion"></script>
<script>
  const sports = [
    { name: "Fútbol", image: "img/futbol.png", description: "El deporte rey, con las mejores ligas y competiciones." },
    { name: "Baloncesto", image: "img/baloncesto.png", description: "Sigue la NBA y las principales ligas europeas." },
    { name: "Tenis", image: "img/Tenis.jpeg", description: "Grand Slams, ATP y WTA tours en un solo lugar." },
    { name: "Fórmula 1", image: "img/formula1.png", description: "Toda la emoción de las carreras y el mundo del motor." }
  ];

  const sportsContainer = document.getElementById('sports-container');
  const modal = document.getElementById('modal');
  const modalTitle = document.getElementById('modal-title');
  const modalDescription = document.getElementById('modal-description');
  const closeModalButton = document.getElementById('close-modal');

  // Animación para los deportes
  const createSportCard = (sport, index) => {
    const sportCard = document.createElement('div');
    sportCard.classList.add('bg-[#1E293B]', 'rounded-lg', 'overflow-hidden', 'shadow-lg', 'cursor-pointer');
    sportCard.innerHTML = `
      <img src="${sport.image}" width="300" height="200" alt="${sport.name}" class="w-full" />
      <div class="p-6">
        <h3 class="text-xl font-semibold text-white mb-4">${sport.name}</h3>
        <button class="w-full bg-[#38BDF8] hover:bg-[#0EA5E9] text-[#0F172A] block text-center py-2 rounded modal-trigger cursor-pointer">Ver más</button>
      </div>
    `;
    sportCard.addEventListener('click', () => handleSportClick(sport));

    // Animación en hover
    sportCard.addEventListener('mouseenter', () => {
      sportCard.style.transform = 'scale(1.05)';
      sportCard.style.transition = 'transform 0.3s ease';
    });

    sportCard.addEventListener('mouseleave', () => {
      sportCard.style.transform = 'scale(1)';
    });

    sportsContainer.appendChild(sportCard);
  };

  // Función que maneja el click en un deporte
  const handleSportClick = (sport) => {
    modalTitle.textContent = sport.name;
    modalDescription.textContent = sport.description;
    modal.classList.remove('hidden');
    modal.classList.add('opacity-0', 'transition-opacity', 'duration-500');
    setTimeout(() => modal.classList.remove('opacity-0'), 100);  // Animación de aparición
  };

  // Función para cerrar el modal
  closeModalButton.addEventListener('click', () => {
    modal.classList.add('opacity-0');
    setTimeout(() => {
      modal.classList.add('hidden');
      modal.classList.remove('opacity-0');
    }, 500);
  });

  // Cargar los deportes al iniciar la página con animación
  sports.forEach((sport, index) => {
    setTimeout(() => createSportCard(sport, index), index * 200);  // Animación escalonada
  });
</script>
