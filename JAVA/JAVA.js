var container1 = document.getElementById('container1');
setTimeout(function() {
container1.classList.add('cerrar');
  document.body.style.overflowY= "visible";// despueés de cargar le devolvemos el scroll
}, 900);