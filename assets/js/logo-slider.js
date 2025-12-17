document.addEventListener('DOMContentLoaded', function () {
  const logoSlider = new Swiper('.logo-slider', {
    slidesPerView: 3,
    spaceBetween: 30,
    loop: true,
    speed: 3000, // Smooth continuous scroll speed
    autoplay: {
      delay: 0,
      disableOnInteraction: false,
    },
    allowTouchMove: false, // Disable touch for continuous scroll effect
    breakpoints: {
      640: {
        slidesPerView: 4,
        spaceBetween: 40,
      },
      768: {
        slidesPerView: 5,
        spaceBetween: 50,
      },
      1024: {
        slidesPerView: 6,
        spaceBetween: 60,
      },
    },
  });
});
