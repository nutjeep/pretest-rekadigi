const toggle = document.querySelector('nav .toggle');
const navbar = document.querySelector('nav .navbar')

toggle.addEventListener('click', function(){
  toggle.classList.toggle('this-toggle');
  navbar.classList.toggle('this-navbar');
});