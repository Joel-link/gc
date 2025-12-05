
document.addEventListener("DOMContentLoaded", function() {
    const slides = document.querySelectorAll(".highlight-slider .slide");
    let i = 0;

    setInterval(() => {
        slides[i].classList.remove("active");
        i = (i + 1) % slides.length;
        slides[i].classList.add("active");
    }, 4000);
});
