
  // Function om de diavoorstelling te initialiseren
  function startSlideshow(container) {
    let slideIndex = 0;
    const slides = container.querySelectorAll('img');
    const caption = container.querySelector('.caption');

    function showSlide(n) {
      if (n >= slides.length) {
        slideIndex = 0;
      } else if (n < 0) {
        slideIndex = slides.length - 1;
      }

      slides.forEach((slide) => (slide.style.display = 'none'));
      slides[slideIndex].style.display = 'block';

      caption.textContent = slides[slideIndex].alt;
    }

    function nextSlide() {
      showSlide((slideIndex += 1));
    }

    function prevSlide() {
      showSlide((slideIndex -= 1));
    }

    showSlide(slideIndex);


    // Automatische diavoorstelling starten (elke 3 seconden)
    setInterval(nextSlide, 5000);
  }

  // Roep startSlideshow aan voor elke slideshow-container
  document.querySelectorAll('.slideshow').forEach(startSlideshow);


  const hamburger = document.querySelector(".hamburger");
const navLinks = document.querySelector(".nav-links");
const links = document.querySelectorAll(".nav-links li");

hamburger.addEventListener('click', ()=>{
   //Animate Links
    navLinks.classList.toggle("open");
    links.forEach(link => {
        link.classList.toggle("fade");
    });

    //Hamburger Animation
    hamburger.classList.toggle("toggle");
});

let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  setTimeout(showSlides, 5000); // Change image every 2 seconds
}
  