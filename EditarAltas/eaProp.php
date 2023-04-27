<?php 
include_once "../conexion.php";

if(isset($_POST['enviar'])){
    $DNI=$_POST['dni'];
    $Nom=$_POST['nombre'];
    $Adreça=$_POST['direccion'];
    $Telf=$_POST['telefono'];
    $Mail=$_POST['correo'];

    // Validamos los datos del formulario
    if(empty($DNI) || empty($Nom) || empty($Adreça) || empty($Telf) || empty($Mail)){
        echo "Error: Por favor complete todos los campos.";
    } else{
        $query=$mysqli->prepare('UPDATE propietari SET Nom=?,Adreça=?,Telf=?,Mail=? WHERE DNI=?');
        $query->bind_param('ssisi',$Nom,$Adreça,$Telf,$Mail,$DNI);
        if($query->execute()){
            header('Location: ../index.php');
        } else{
            echo "Error: No se pudo actualizar el propietario. Por favor intente nuevamente.";
        }
    }
} else{
    echo "Error: No se recibieron los datos del formulario.";
}
?>
