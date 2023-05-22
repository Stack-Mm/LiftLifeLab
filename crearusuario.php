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
   <section class="form-container">
    <form class="form" method="POST" action="admin/usuarios/crear.php">
        <p class="form-title">Crea tu cuenta</p>
        <div class="input-container">
            <label for="nombre" class="label" >Nombre</label>
            <input type="text" placeholder="Juan" name="nombre" id="nombre" required>
            <span>
            </span>
         </div>
         <div class="input-container">
            <label for="apellido" class="label">Apellido</label>
            <input type="text" placeholder="Ramirez" name="apellido" id="apellido" required>
            <span>
            </span>
         </div>
         <div class="input-container">
            <label for="email" class="label">Email</label>
           <input type="email" placeholder="email@email.com" name="email" id="email" required>
           <span>
           </span>
        </div>
        <div class="input-container">
            <label for="contrasena" class="label">Contraseña</label>
           <input type="password" placeholder="contraseña" name="contrasena" id="contrasena" required>
         </div>
        <input type="submit" class="submit" value="Crear cuenta">
         
       <p class="signup-link">
         ¿Ya tienes cuenta?
         <a href="iniciosesion.php">Inicia Sesion</a>
       </p>
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