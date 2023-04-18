// const background = document.querySelector('.wrapper');
// const content = document.querySelector('body');
// const threshold = 0.1; // Pourcentage de hauteur de la fenêtre d'affichage pour que la couleur de fond change

// const colorHandler = (entries) => {
//   const percentage = entries[0].intersectionRatio;
//   const hue = 360 * percentage; // la variable hue change en fonction de la position de défilement
  
//   background.style.backgroundColor = `hsl(${hue}, 100%, 50%)`;
// };

// const observer = new IntersectionObserver(colorHandler, {
//   threshold: threshold
// });

// observer.observe(content);


let prevScrollpos = window.pageYOffset;
window.onscroll = function() {
  let currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("navbar").style.top = "0";
  } else {
    document.getElementById("navbar").style.top = "-100px";
  }
  prevScrollpos = currentScrollPos;
}
