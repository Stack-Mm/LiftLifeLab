document.addEventListener('DOMContentLoaded', () => {
  // Obtener los elementos que necesitamos
  const boton = document.getElementById('label-check');
  const contenido = document.getElementById('contenido');

  // Agregar un evento click a la etiqueta label
  boton.addEventListener('click', () => {
    // Alternar la clase "oculto" del contenido
    contenido.classList.toggle('oculto');
  });
});
