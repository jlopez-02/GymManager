$(document).ready(function () {
  autoResizeTextArea();
  active_link();
});

function autoResizeTextArea() {
  $(document).ready(function () {
    // Obtener el elemento textarea
    var textarea = $("textarea");

    // Establecer su altura inicial
    textarea.height(textarea[0].scrollHeight + "px");

    // Configurar el evento de cambio de texto
    textarea.on("input", function () {
      // Establecer la altura del textarea en función de su contenido
      textarea.height("auto").height(this.scrollHeight + "px");
    });
  });
}

function active_link() {
  const currentLocation = location.href;
  const menuItem = document.querySelectorAll("a:not(.app_logo)");
  const menuLength = menuItem.length;

  for (let i = 0; i < menuLength; i++) {
    if (menuItem[i].href === currentLocation) {
      menuItem[i].className = "active-link";
    }
  }
}
