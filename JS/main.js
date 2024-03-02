document.addEventListener("DOMContentLoaded", () => {
  const btn = document.querySelector("#btn-mobile");
  const nav = document.querySelector("#navbar-user");
  let bool = true;
  const hidden = () => {
    nav.style.display = "none";
  };
  hidden();
  btn.addEventListener("click", () => {
    if (bool) {
      nav.style.display = "block";
      bool = false;
    } else {
      hidden();
      bool = true;
    }
  });
  window.addEventListener("resize", () => {
    if (nav.style.display === "block") {
      hidden();
      bool = true;
    }
  });
  const cargar = () => {
    //instancia
    var xhr = new XMLHttpRequest();
    //ENLACE TXT
    xhr.open("GET", "bbdd/hopper.txt", true);
    //manejo de la carga
    xhr.onload = function () {
      if (this.status == 200) {
        var contenido = xhr.responseText;
        var contenidoDiv = document.getElementById("contenido");
        contenidoDiv.textContent = contenido;
      }
    };
    //enviar solicitut
    xhr.send();
  };

});
