export function showSuccessModal(message) {
    const modal = document.createElement('div');
    modal.innerHTML = `
        <div class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
            <div class="bg-[#1E293B] p-8 rounded-xl shadow-xl max-w-md w-full mx-4">
                <div class="text-center">
                    <div class="w-16 h-16 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-4">¡Correcto!</h3>
                    <p class="text-gray-300 mb-6">${message}</p>
                    <button onclick="window.location.href='/login'" class="bg-[#7C3AED] hover:bg-[#6D28D9] text-white px-6 py-2 rounded-md transition-colors">
                        Ir al inicio de sesión
                    </button>
                </div>
            </div>
        </div>
    `;
    document.body.appendChild(modal);
}
