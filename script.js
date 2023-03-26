const toggle = document.querySelector('.child-toggle input');
const nav = document.querySelector('nav ul');

toggle.addEventListener('click', function () {
  nav.classList.toggle('slide');
});