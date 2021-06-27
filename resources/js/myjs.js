/* logout */

const logout = document.getElementById('logoutBtn');
if (logout) {
    logout.addEventListener('click', (e) => {
        e.preventDefault();
        const form = document.getElementById('logoutForm').submit();
    });
}

/* Initialize Swiper  */

var swiper = new Swiper(".mySwiper", {
    effect: "cube",
    grabCursor: true,
    cubeEffect: {
      shadow: true,
      slideShadows: true,
      shadowOffset: 20,
      shadowScale: 0.94,
    },
    pagination: {
      el: ".swiper-pagination",
    },
  });

  /* scroll reveal */

  ScrollReveal().reveal('.headline', { duration: 1500, delay: 500, distance: '80px', interval: 600, easing: 'cubic-bezier(0.5, 0, 0, 0.7)' });

  