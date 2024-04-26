document.addEventListener("DOMContentLoaded", function() {
    let links = document.querySelectorAll('a[href^="#"]');
    links.forEach(link => {
        link.addEventListener("click", function(event) {
            event.preventDefault();
            let targetId = this.getAttribute("href");
            let targetElement = document.querySelector(targetId);
            targetElement.scrollIntoView({ behavior: "smooth", block: "start" });
        });
    });
});

window.addEventListener('scroll', function() {
    var scrollPosition = window.scrollY;
    var scrollToTopButton = document.querySelector('.scroll-to-top');

    if (scrollPosition > 300) {
      scrollToTopButton.style.display = 'block';
    } else {
      scrollToTopButton.style.display = 'none';
    }
  });

  function scrollToTop() {
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  }

  var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  slides[slideIndex-1].style.display = "block";  
  setTimeout(showSlides, 5000); 
}
