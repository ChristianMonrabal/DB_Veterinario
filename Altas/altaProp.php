<!--Validamos los datos del formAlta.php y lo insertamos en la tabla-->
<?php 
if(!isset($_POST['enviar'])|| empty($_POST['dni'])|| empty($_POST['nombre'])|| empty($_POST['direccion'])|| empty($_POST['telefono'])|| empty($_POST['correo'])){
} else{
    include_once "../conexion.php";
    $DNI=$_POST['dni'];
    $Nom=$_POST['nombre'];
    $Adreça=$_POST['direccion'];
    $Telf=$_POST['telefono'];
    $Mail=$_POST['correo'];
    $query=$mysqli->prepare('INSERT INTO propietari (DNI,Nom,Adreça,Telf,Mail) VALUES (?,?,?,?,?)');
    $query->bind_param('issis',$DNI,$Nom,$Adreça,$Telf,$Mail);
    $query->execute();
    header('Location: ../Tablas/tablaProp.php');
};
?>
