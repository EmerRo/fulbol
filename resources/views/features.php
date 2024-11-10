<section class="py-20 bg-[#1E293B]">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center text-white mb-12">
            ¿Por qué elegir Deporstar?
        </h2>
        <div class="grid md:grid-cols-3 gap-8">
            <?php
            $features = [
                [
                    'icon' => '<svg class="h-12 w-12 text-[#38BDF8]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M3 3h2v7H3V3zm5 5h2v9H8V8zm5 3h2v6h-2v-6zm5 2h2v4h-2v-4z"/></svg>',
                    'title' => 'Estadísticas en tiempo real',
                    'description' => 'Accede a estadísticas detalladas y actualizadas al instante de tus deportes y equipos favoritos.'
                ],
                [
                    'icon' => '<svg class="h-12 w-12 text-[#38BDF8]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M4 6h16M4 10h16M4 14h8"/></svg>',
                    'title' => 'Análisis avanzados',
                    'description' => 'Obtén insights profundos con nuestros análisis avanzados de rendimiento de equipos y jugadores.'
                ],
                [
                    'icon' => '<svg class="h-12 w-12 text-[#38BDF8]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M17 20h5v-1a4 4 0 00-8 0v1h5zM9 12H4a4 4 0 00-4 4v4h5a5 5 0 0110 0h5v-4a4 4 0 00-4-4H9zM17 8h-2a2 2 0 00-4 0H9a4 4 0 014-4 4 4 0 014 4z"/></svg>',
                    'title' => 'Comunidad de fanáticos',
                    'description' => 'Conecta con otros aficionados, comparte opiniones y participa en discusiones apasionantes.'
                ]
            ];

            foreach ($features as $feature) {
                echo '<div class="bg-[#0F172A] p-6 rounded-lg text-white hover:shadow-xl transition-shadow duration-300">';
                echo '<div class="mb-4">' . $feature['icon'] . '</div>';
                echo '<h3 class="text-xl font-semibold mb-2">' . $feature['title'] . '</h3>';
                echo '<p class="text-gray-400">' . $feature['description'] . '</p>';
                echo '</div>';
            }
            ?>
        </div>
    </div>
</section>
