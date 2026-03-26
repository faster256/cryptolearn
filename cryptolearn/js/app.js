// /js/app.js — тепер лише Mobile Menu controls

document.addEventListener('DOMContentLoaded', () => {
  // === MOBILE MENU ===
  const mmBtn = document.getElementById('mobile-menu-btn');
  const mm = document.getElementById('mobile-menu');
  if (mmBtn && mm) {
    mmBtn.addEventListener('click', () => mm.classList.toggle('hidden'));
  }
});