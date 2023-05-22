<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="build/css/index.css">
    <link rel="shortcut icon" href="/src/img/Logo.png" type="image/x-icon">
    <title>Document</title>
</head>
<body>
    <header class="header w-100">
      <nav class="navegacion display-flex centrado w-100">
        <picture class="logo" >
          <source srcset="build/img/Logo.webp" type="image/webp">
          <source srcset="build/img/Logo.avif" type="image/avif">
          <img src="build/img/Logo.png" alt="Logo Fitness">
        </picture>
        
        <div class="menu-desktop">
          <ul class="contenido-desk">
            <li class="contenido__item active"><a href="index.php">Inicio</a> </li>
            <li class="contenido__item"><a href="#informacion">Nosotros</a> </li>
            <li class="contenido__item"><a href="#contacto">Contacto</a></li>
            <button class="button-gris"><a href="/iniciosesion.php">Iniciar Sesion</a> </button>
          </ul>
        </div>
     
        <div class="container">  
          <input class="label-check" id="label-check" type="checkbox">
            <label for="label-check" class="hamburger-label">
              <div class="line1"></div>
              <div class="line2"></div>
              <div class="line3"></div>
              <label></label>
            </label>
        </div>
      </nav>
      <div id="contenido">
        <ul class="contenido" transition-style="in:wipe:down">
          <li class="contenido__item active">Inicio</li>
          <li class="contenido__item">Nosotros</li>
          <li class="contenido__item">Contacto</li>
          <button class="button-gris"><a href="/iniciosesion.php">Iniciar Sesion</a> </button>
        </ul>
      </div>
    
    </header>  
 

    <section class="hero">
      <div class="hero__contenido">
        <h2 class="hero__title titulo">¡Bienvenido a <span class="txt-resaltado">LiftLifeLab!</span></h2>
        <p class="hero__text">Descubre una nueva forma de alcanzar tus metas fitness. Nuestra app te ofrece una experiencia completa y personalizada para llevar un seguimiento de tu progreso, anotar tus rutinas y pesos, y mucho más</p>
      </div>
    </section>
  
    <section id="informacion">
      <h2 class="informacion__title titulo">Gestiona tu <span class="txt-resaltado-oscuro">entrenamiento</span>  de la mejor manera con LiftLifeLab</h2>
      <div class="informacion__contenido">
        <div class="caja">
          <picture class="caja__icono">
            <source srcset="build/img/entrenamiento.webp" type="img/webp">
            <source srcset="build/img/entrenamiento.avif" type="img/avif">
            <img src="build/img/entrenamiento.png" alt="icono entrenamiento">
          </picture>
          <h3>Organiza tu rutina</h3>
          <p>Nuestro objetivo es ayudarte a tener una rutina bien organizada que maximice tus resultados y te permita disfrutar de una experiencia de entrenamiento efectiva. ¡Comencemos juntos/as a organizar tu rutina y alcanzar tus metas de fitness!!</p>
        </div> <!-- .caja-->
        <div class="caja">
          <picture class="caja__icono">
            <source srcset="build/img/inteligencia.webp" type="img/webp">
            <source srcset="build/img/inteligencia.avif" type="img/avif">
            <img src="build/img/inteligencia.png" alt="icono inteligencias">
          </picture>
          <h3>Consejos de alimentacion</h3>
          <p>Aquí encontrarás consejos prácticos y basados en evidencia para mantener una alimentación saludable y equilibrada. Descubre cómo mejorar tu bienestar a través de una nutrición consciente y sabrosa. ¡Explora nuestros consejos ahora!</p>
        </div> <!-- .caja-->
        <div class="caja">
          <picture class="caja__icono">
            <source srcset="build/img/document.webp" type="img/webp">
            <source srcset="build/img/document.avif" type="img/avif">
            <img src="build/img/document.png" alt="icono checklist">
          </picture>
          <h3>Seguimiento del proceso</h3>
          <p>Establecer metas es esencial para lograr un progreso constante y alcanzar tus objetivos de fitness. Aquí te ofrecemos algunas claves importantes para que puedas definir metas efectivas y motivadoras que te ayudarán a alcanzar tus sueños de acondicionamiento físico.</p>
        </div> <!-- .caja-->
        <div class="caja">
          <picture class="caja__icono">
            <source srcset="build/img/musculo.webp" type="img/webp">
            <source srcset="build/img/musculo.avif" type="img/avif">
            <img src="build/img/musculo.png" alt="icono musculo">
          </picture>
          <h3>Entrena a otro nivel</h3>
          <p>Te brindaremos consejos y técnicas para maximizar tus resultados y alcanzar un rendimiento óptimo en tu entrenamiento. Descubre cómo superar tus límites y llevar tus capacidades físicas al siguiente nivel. ¡Explora nuestros consejos ahora y desafía tus límites!</p>
        </div> <!-- .caja-->
      </div>
    </section>

    <section id="contacto">
      <form class="formulario" action="">
        <fieldset>
            <legend>Contactanos</legend>

            <label for="nombre">Nombre</label>
            <input type="text" placeholder="Tu nombre" id="nombre">

            <label for="email">E-mail</label>
            <input type="email" placeholder="Tu email" id="email">

            <label for="telefono">Telefono</label>
            <input type="number" placeholder="Tu telefono" id="telefono">

            <label for="mensaje">Mensaje:</label>
            <textarea name="" id="mensaje" rows="10"></textarea>
        </fieldset>
        <input type="submit" value="enviar" class="boton-enviar">
      </form>
    </section>
  
    <footer id="footer">
      <div class="redes">
        
      </div>
      <p class="copy">copyright 
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-copyright" width="32" height="32" viewBox="0 0 24 24" stroke-width="2" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
          <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
          <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
          <path d="M14 9.75a3.016 3.016 0 0 0 -4.163 .173a2.993 2.993 0 0 0 0 4.154a3.016 3.016 0 0 0 4.163 .173" />
        </svg> | By Oviedo Marcos
      </p>
    </footer>
  <script src="build/js/bundle.js">
  
  </script>
</body>
</html>   