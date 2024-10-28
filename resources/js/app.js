import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

document.addEventListener('DOMContentLoaded', function () {
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    const menuOpenIcon = document.getElementById('menu-open-icon');
    const menuCloseIcon = document.getElementById('menu-close-icon');

    if (menuToggle) {
        menuToggle.addEventListener('click', function () {
            mobileMenu.classList.toggle('hidden'); // Mostrar/ocultar el menú
            menuOpenIcon.classList.toggle('hidden'); // Cambiar el ícono de menú
            menuCloseIcon.classList.toggle('hidden'); // Cambiar el ícono de cierre
        });
    }
});


window.openModal = function (id) {
    document.getElementById(id).classList.remove('hidden');
}

window.closeModal = function (id) {
    document.getElementById(id).classList.add('hidden');
}

// Función para abrir el modal de reserva
    window.openModalEx = function() {
        const modal = document.getElementById('modalReserva');
        modal.classList.remove('hidden');
        setTimeout(() => {
            modal.style.opacity = '1';
            modal.firstElementChild.classList.remove('scale-95');
            modal.firstElementChild.classList.add('scale-100');
        }, 10); // Retraso para que la transición funcione correctamente
    }

    window.closeModalEx = function() {
        const modal = document.getElementById('modalReserva');
        modal.style.opacity = '0';
        modal.firstElementChild.classList.remove('scale-100');
        modal.firstElementChild.classList.add('scale-95');
        setTimeout(() => {
            modal.classList.add('hidden');
        }, 300); // Espera a que la transición termine antes de ocultar el modal
    }


    window.closeModalOutside = function(event){
        // Verifica si el clic se realizó en el fondo del modal
        if (event.target.id === 'modalReserva') {
            closeModalEx();
        }
    }

    // Añade el event listener al modal
    document.getElementById('modalReserva').addEventListener('click', closeModalOutside);

// Función para abrir el modal de inicio de sesión

    document.addEventListener("DOMContentLoaded", () => {
        const openModalButton = document.getElementById("openLoginModal");
        const closeModalButton = document.getElementById("closeLoginModal");
        const modal = document.getElementById("loginModal");

        // Función para abrir el modal con transición
        openModalButton.addEventListener("click", () => {
            modal.classList.remove("hidden");
            setTimeout(() => {
                modal.classList.replace("opacity-0", "opacity-100");
            }, 10); // Un pequeño retraso para activar la transición
        });

        // Función para cerrar el modal con transición
        const closeModal = () => {
            modal.classList.replace("opacity-100", "opacity-0");
            setTimeout(() => {
                modal.classList.add("hidden");
            }, 300); // Tiempo que coincide con la duración de la transición
        };

        closeModalButton.addEventListener("click", closeModal);

        // Cerrar el modal si se hace clic fuera de él
        modal.addEventListener("click", (event) => {
            if (event.target === modal) {
                closeModal();
            }
        });
    });

    // Modal para movil
    document.addEventListener("DOMContentLoaded", () => {
        const openModalButton = document.getElementById("openLoginModal2");
        const closeModalButton = document.getElementById("closeLoginModal");
        const modal = document.getElementById("loginModal");

        // Función para abrir el modal con transición
        openModalButton.addEventListener("click", () => {
            modal.classList.remove("hidden");
            setTimeout(() => {
                modal.classList.replace("opacity-0", "opacity-100");
            }, 10); // Un pequeño retraso para activar la transición
        });

        // Función para cerrar el modal con transición
        const closeModal = () => {
            modal.classList.replace("opacity-100", "opacity-0");
            setTimeout(() => {
                modal.classList.add("hidden");
            }, 300); // Tiempo que coincide con la duración de la transición
        };

        closeModalButton.addEventListener("click", closeModal);

        // Cerrar el modal si se hace clic fuera de él
        modal.addEventListener("click", (event) => {
            if (event.target === modal) {
                closeModal();
            }
        });
    });




// Inicializa Flatpickr
// flatpickr("#fecha_hora", {
//     enableTime: true,
//     dateFormat: "Y-m-d H:i",
//     defaultDate: "today",
//     minDate: "today", // No permite seleccionar días anteriores
//     time_24hr: true, // Mostrar en formato de 24 horas
//     minuteIncrement: 30, // Incrementos de 30 minutos
//     altInput: true, // Campo alternativo más legible
//     altFormat: "F j, Y H:i", // Formato legible de fecha y hora
// });