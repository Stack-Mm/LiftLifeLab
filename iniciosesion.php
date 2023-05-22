
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
   <section class="form-container" >
    <form class="form" method="post" action="admin/usuarios/inciarsesion.php">
        <p class="form-title">Inicia Sesion en tu cuenta</p>
         <div class="input-container">
          <label for="email" class="label">Email</label>
           <input type="email" name="email" id="email" placeholder="Enter email" required>
       
           <span>
           </span>
       </div>
       <div class="input-container">
          <label for="contrasena" class="label">Contraseña</label>
          <input type="password" name="contrasena" id="contrasena" placeholder="Enter password" required>
         </div>
         
         <input type="submit" class="submit" value="Iniciar Sesion">
 
       <p class="signup-link">
         No tienes cuenta?
         <a href="crearusuario.html">Logeate</a>
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