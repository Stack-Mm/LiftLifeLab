<?php 
    header('Content-Type: text/html; charset=UTF-8');
    // Base de Datos
    require '../../includes/config/database.php';
    $db = conectarDB();

    // echo "<pre>";
    // var_dump($db);
    // echo "</pre>";
    // echo "<pre>";
    // var_dump($_POST);
    // echo "</pre>";
    // exit;
    //Consultar la base de datos para obtener los usuarios


    

    // Recuperar los datos del formulario
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $contrasena = $_POST['contrasena'];

    // Hashear la contraseña
    $contrasenaHasheada = password_hash($contrasena, PASSWORD_DEFAULT);
    
    // Verificar si el usuario ya existe
    $consulta = "SELECT email FROM usuarios WHERE email = ?";
    $statement = $db->prepare($consulta);
    $statement->bind_param('s', $email);
    $statement->execute();
    $statement->store_result();

    if ($statement->num_rows > 0) {
        echo 'El usuario ya está registrado';
        // Aquí puedes redirigir al usuario a otra página o realizar alguna otra acción apropiada
    } else {
        // Continuar con la inserción
        // ...
    }

    // Insertar los datos en la base de datos
    $sql = "INSERT INTO usuarios (nombre, apellido, email, contrasena) VALUES ('$nombre', '$apellido', '$email', '$contrasenaHasheada')";

    if ($db->query($sql) === TRUE) {
        header("Location: ../../paneldeusuario.php");
        exit; // Es importante salir del script después de redirigir
    } else {
        echo 'Error al insertar los datos: ' . $db->error;
    }

    // Cerrar la conexión
    $db->close();
    ?>