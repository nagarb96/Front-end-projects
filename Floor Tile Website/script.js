// Smooth scrolling
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      e.preventDefault();
      document.querySelector(this.getAttribute('href')).scrollIntoView({
        behavior: 'smooth'
      });
    });
  });
  
  // Form submission
  const form = document.querySelector('form');
  form.addEventListener('submit', e => {
    e.preventDefault();
    // You can add code here to handle form submission, such as sending data to a server
    // For demonstration purposes, let's just display an alert message
    alert('Thank you for your message!');
    form.reset();
  });
  

  window.addEventListener('load', function() {
    // Initialize Swiper
    var swiper = new Swiper('.swiper-container', {
      loop: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
    });
  });
  
  // Initialize Swiper
var swiper = new Swiper('.swiper-container', {
    loop: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
  });
  
  window.addEventListener('load', function() {
    // Initialize Swiper
    var swiper = new Swiper('.swiper-container', {
      loop: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  });
  