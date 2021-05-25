// UNDERLINE//

const nav_links = document.querySelectorAll(".nav-link");

nav_links.forEach((nav_link) =>{
    nav_link.addEventListener("click", (e)=>{
        underlinelink(e.target);
    })
})
 function underlinelink(elem){
     const underline = document.getElementById('underline');
     underline.style.left =`${elem.offsetLeft}px`;
     underline.style.width =`${elem.offsetWidth}px`;
 }


 // Reveal animation
 
 const sr = ScrollReveal({
    origin: 'top',
    distance: '20px',
    duration: 3000,
    reset: true
  });
  
  ScrollReveal().reveal('.aboutG', { origin: 'top' });
  ScrollReveal().reveal('.hero-text, .aboutD', { origin: 'bottom' });
 
  //COOKIE//

const cookieContainer = document.querySelector(".cookie-container");
const cookieButton = document.querySelector(".cookie-btn");

cookieButton.addEventListener("click", () => {
  cookieContainer.classList.remove("active");
  localStorage.setItem("cookieBannerDisplayed", "true");
});

setTimeout(() => {
  if (!localStorage.getItem("cookieBannerDisplayed")) {
    cookieContainer.classList.add("active");
  }
}, 2000);

  