// Galeria de imagens modal
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
  
  
// Ligar a barra no celular
var BarraLateral = document.getElementById("BarraLateral");
  
function w3_open() {
  if (BarraLateral.style.display === 'block') {
    BarraLateral.style.display = 'none';
  } else {
    BarraLateral.style.display = 'block';
  }
}

window.requestAnimFrame = (function(){
  return  window.requestAnimationFrame       ||
  window.webkitRequestAnimationFrame ||
  window.mozRequestAnimationFrame    ||
  function( callback ){
    window.setTimeout(callback, 1000 / 60);
  };
})();


function scrollToY(scrollTargetY, speed, easing) {
// scrollTargetY: O alvo scrollY da janela
// speed: tempo em pixels por segundo
// easing: equação de easing pra usar

var scrollY = window.scrollY,
scrollTargetY = scrollTargetY || 0,
speed = speed || 2000,
easing = easing || 'easeOutSine',
currentTime = 0;

//tempo min .1, tempo max .8 seconds
var time = Math.max(.1, Math.min(Math.abs(scrollY - scrollTargetY) / speed, .8));

var PI_D2 = Math.PI / 2,
easingEquations = {
    easeOutSine: function (pos) {
        return Math.sin(pos * (Math.PI / 2));
    },
    easeInOutSine: function (pos) {
        return (-0.5 * (Math.cos(Math.PI * pos) - 1));
    },
    easeInOutQuint: function (pos) {
        if ((pos /= 0.5) < 1) {
            return 0.5 * Math.pow(pos, 5);
        }
        return 0.5 * (Math.pow((pos - 2), 5) + 2);
    }
};

function tick() {
currentTime += 1 / 60;

var p = currentTime / time;
var t = easingEquations[easing](p);

if (p < 1) {
    requestAnimFrame(tick);

    window.scrollTo(0, scrollY + ((scrollTargetY - scrollY) * t));
} else {
    console.log('scroll feito');
    window.scrollTo(0, scrollTargetY);
}
}

tick();
}

  // Fechar a barra do lado com close no mobile
function w3_close() {
    BarraLateral.style.display = "none";
}
  
// Animações das imagens
const sr = ScrollReveal();
sr.reveal('.scroll-img', {
  duration: 1000, 
  origin: 'bottom', 
  distance: '50px', 
  delay: 300, 
});
sr.reveal('.scroll-img2', {
  duration: 1000, 
  origin: 'left', 
  distance: '50px', 
  delay: 300, 
});