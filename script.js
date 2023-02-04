const form = document.getElementById("form");
const menuToggle = document.querySelector('.menu-toggle');
const navigation = document.querySelector('nav');

menuToggle.addEventListener('click', function() {
  navigation.classList.toggle('menu-active');
});
