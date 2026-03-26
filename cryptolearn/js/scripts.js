document.addEventListener('DOMContentLoaded', function () {
  const menu = document.querySelector('nav');
  menu.addEventListener('click', () => {
    menu.classList.toggle('open');
  });
});
