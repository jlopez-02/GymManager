$(document).ready(function () {
    autoResizeTextArea();
});

function autoResizeTextArea() {
    $(document).ready(function() {
        // Obtener el elemento textarea
        var textarea = $("textarea");
      
        // Establecer su altura inicial
        textarea.height(textarea[0].scrollHeight + "px");
      
        // Configurar el evento de cambio de texto
        textarea.on("input", function() {
          // Establecer la altura del textarea en función de su contenido
          textarea.height("auto").height(this.scrollHeight + "px");
        });
      });
}
