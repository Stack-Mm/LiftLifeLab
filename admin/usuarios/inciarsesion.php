<?php  header('Content-Type: text/html; charset=UTF-8');
    // Base de Datos
    require '../../includes/config/database.php';
    $db = conectarDB();

    // Recuperar los datos del formulario
    $email = $_POST['email'];
    $contrasena = $_POST['contrasena'];
    
    // Verificar si el usuario ya existe
    $stmt = $db->prepare("SELECT * FROM usuarios WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    

    if ($result->num_rows > 0) {
    $usuario = $result->fetch_assoc();

    if (password_verify($contrasena, $usuario['contrasena'])) {
        header("Location: ../../paneldeusuario.php");
        exit;
    } else {
      header("Location: /iniciosesion.php");
      exit;
      // La contraseña es incorrecta
      // Muestra un mensaje de error o redirige al usuario al formulario de inicio de sesión
    } 
    } else {
      header("Location: /iniciosesion.php");
      exit;

  // El usuario no existe
  // Muestra un mensaje de error o redirige al usuario al formulario de inicio de sesión
}
?>
    
    
