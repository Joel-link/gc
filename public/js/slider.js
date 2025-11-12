document.addEventListener('DOMContentLoaded', function () {
  const slides = document.querySelectorAll('.custom-slider .slide');
  let current = 0;

  function showSlide(index) {
    slides.forEach((slide, i) => {
      slide.classList.toggle('active', i === index);
    });
  }

  function nextSlide() {
    current = (current + 1) % slides.length;
    showSlide(current);
  }

  showSlide(current);
  setInterval(nextSlide, 3500); // Change every 3 seconds
});
