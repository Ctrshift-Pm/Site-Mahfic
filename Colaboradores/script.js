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
  function scroll_down(){
    window.scrollTo(0,document.body.scrollHeight);
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