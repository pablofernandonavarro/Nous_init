<?php 
session_start();
if (!empty($_POST)) {
     

     if (!empty($_POST['user']) && !empty($_POST['password'])) {
        $user = $_POST['user'];
        $password = $_POST['password'];
        $sql = $conn->query("SELECT * FROM USUARIOS WHERE nombre_usuario ='{$user}' and password = '{$password}'");
       if ($data = $sql->fetch_object()) {
        
        $_SESSION['usuario'] = [
            "id_usuario"        => $data->id_usuario,
            "nombre_usuario"    => $data->nombre_usuario,
            "nombre_completo"   => $data->nombre_completo,
            "correo_electronico"=> $data->correo_electronico,
            "telefono"          => $data->telefono,
            "rol"               => $data->rol,
            "password"          => $data->password,
            "fecha_creacion"    => $data->fecha_creacion,
            "ultimo_acceso"     => $data->ultimo_acceso,
            "activo"            => $data->activo
        ];
        
        
        header("Location: dashboard.php");
     
       } else {
           echo "<div class='alert alert-danger'> Acceso denegado</div>";
       }
       

    
     }else {
        echo "<div class='alert alert-danger'>no puede ingresar campos vacios</div>";
    
       
    }
  
}   
   
