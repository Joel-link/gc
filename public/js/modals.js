document.addEventListener('DOMContentLoaded', function () {
  const openBtn = document.getElementById('openClientForm');
  const closeBtn = document.getElementById('closeClientForm');
  const modal = document.getElementById('clientFormModal');

  if (openBtn && modal && closeBtn) {
    openBtn.addEventListener('click', function (e) {
      e.preventDefault();
      modal.style.display = 'flex';
      document.body.style.overflow = 'hidden';
    });

    closeBtn.addEventListener('click', function () {
      modal.style.display = 'none';
      document.body.style.overflow = '';
    });

    window.addEventListener('click', function (e) {
      if (e.target === modal) {
        modal.style.display = 'none';
        document.body.style.overflow = '';
      }
    });
  }
});

/*----------------- modal discuter -----------------*/

document.addEventListener('DOMContentLoaded', function () {
  const openChatBtn = document.getElementById('openChatOptions');
  const closeChatBtn = document.getElementById('closeChatOptions');
  const chatModal = document.getElementById('chatOptionsModal');

  if (openChatBtn && chatModal && closeChatBtn) {
    openChatBtn.addEventListener('click', function (e) {
      e.preventDefault();
      chatModal.style.display = 'flex';
      document.body.style.overflow = 'hidden';
    });

    closeChatBtn.addEventListener('click', function () {
      chatModal.style.display = 'none';
      document.body.style.overflow = '';
    });

    window.addEventListener('click', function (e) {
      if (e.target === chatModal) {
        chatModal.style.display = 'none';
        document.body.style.overflow = '';
      }
    });
  }
});

/*----------------- modal dservice -----------------*/


let currentSlide = 0;

function openServicesPopup() {
  document.getElementById('servicesPopup').style.display = 'flex';
  document.body.style.overflow = 'hidden';
  updateSlider();
}

function closeServicesPopup() {
  document.getElementById('servicesPopup').style.display = 'none';
  document.body.style.overflow = 'auto';
}

function nextSlide() {
  const slides = document.querySelectorAll('.slide1');
  currentSlide = (currentSlide + 1) % slides.length;
  updateSlider();
}

function prevSlide() {
  const slides = document.querySelectorAll('.slide1');
  currentSlide = (currentSlide - 1 + slides.length) % slides.length;
  updateSlider();
}

function updateSlider() {
  const track = document.querySelector('.slider-track1');
  track.style.transform = `translateX(-${currentSlide * 100}%)`;
}

/*------------- à propos de nous -----------------*/


function openAboutPopup() {
  document.getElementById('aboutPopup').style.display = 'flex';
  document.body.style.overflow = 'hidden';
}

function closeAboutPopup() {
  document.getElementById('aboutPopup').style.display = 'none';
  document.body.style.overflow = 'auto';
}

/*------------ nos cibles ----------------*/

function openCiblesPopup() {
  document.getElementById('ciblesPopup').style.display = 'flex';
  document.body.style.overflow = 'hidden';
}

function closeCiblesPopup() {
  document.getElementById('ciblesPopup').style.display = 'none';
  document.body.style.overflow = 'auto';
}

/*------------- notre équipe -------------*/

function openEquipePopup() {
  document.getElementById('equipePopup').style.display = 'flex';
  document.body.style.overflow = 'hidden';
}

function closeEquipePopup() {
  document.getElementById('equipePopup').style.display = 'none';
  document.body.style.overflow = 'auto';
}


