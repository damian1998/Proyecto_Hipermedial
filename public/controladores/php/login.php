<?php
    session_start();
    include '../../../config/conexion.php';

    $usuario=isset($_POST["correo"]) ? trim($_POST["correo"]):null;
    $contrasena=isset($_POST["contrasena"]) ? trim($_POST["contrasena"]):null;

    $sql = "SELECT * 
            FROM T_USUARIOS 
            WHERE usu_correo='$usuario' and 
            usu_password=MD5('$contrasena') and 
            usu_estado_elimina='N'";
    $result=$conn->query($sql);
    $row=mysqli_fetch_array($result);
    if($result->num_rows > 0){
        $_SESSION['isLogged']=TRUE;
        header("Location: ../../vista/index.html");
    }else{
        header("Location: ../../vista/login.html");
    }
?>