const menuButton = document.querySelector('#hamburger');
const navMenu = document.querySelector('#navmenu');

menuButton.addEventListener('click', function() {
          menuButton.classList.toggle('menubutton-active');
          navMenu.classList.toggle('hidden')
});

