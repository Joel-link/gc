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

