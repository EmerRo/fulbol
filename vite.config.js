import { defineConfig } from 'vite';
import vue from '@vitejs/plugin-vue'; // Si estás usando Vue, o puedes omitirlo si no lo usas

export default defineConfig({
  plugins: [vue()], // Solo si estás usando Vue
  build: {
    outDir: 'public/build', // Especifica que los archivos de producción deben guardarse en public/build
    manifest: true, // Asegúrate de que el manifest.json se genere
  },
  server: {
    proxy: {
      '/app': 'http://localhost',
    },
  },
});
