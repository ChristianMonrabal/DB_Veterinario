<link rel="stylesheet" href="../css/styles.css">
<?php 
include_once "../conexion.php";
include_once "../header.php";
if(!isset($_POST['enviar'])){
    $DNI=$_GET['dni'];
    $query=$mysqli->prepare('SELECT * FROM propietari WHERE DNI=?');
    $query->bind_param('i',$DNI);
    $query->execute();
    $result=$query->get_result();
    $propietari=$result->fetch_assoc();
} else{
    $DNI=$_POST['dni'];
    $Nom=$_POST['nombre'];
    $Adreça=$_POST['direccion'];
    $Telf=$_POST['telefono'];
    $Mail=$_POST['correo'];
    $query=$mysqli->prepare('UPDATE propietari SET Nom=?,Adreça=?,Telf=?,Mail=? WHERE DNI=?');
    $query->bind_param('ssisi',$Nom,$Adreça,$Telf,$Mail,$DNI);
    $query->execute();
    header('Location: ../index.php');
};

?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar Propietario</title>
</head>
<body style="color: white;" class="formalta">
    <form action="../EditarAltas/eaProp.php" method="POST">
    <div class="login-box">
    <h1>Editar Propietario</h1>
    <div class="user-box">
        <label>DNI:</label><br>
        <input type="text" name="dni" value="<?php echo $propietari['DNI']; ?>"><br>
    </div>
    <div class="user-box">
        <label>Nombre:</label><br>
        <input type="text" name="nombre" value="<?php echo $propietari['Nom']; ?>"><br>
    </div>
    <div class="user-box">
        <label>Dirección:</label><br>
        <input type="text" name="direccion" value="<?php echo $propietari['Adreça']; ?>"><br>
    <div class="user-box">
        <label>Teléfono:</label><br>
        <input type="text" name="telefono" value="<?php echo $propietari['Telf']; ?>"><br>
    </div>
    <div class="user-box">
        <label>Correo:</label><br>
        <input type="text" name="correo" value="<?php echo $propietari['Mail']; ?>"><br>
    </div>
    <button class="btn" style="color: white; border:none" name="enviar" type="submit">Enviar Datos</button>
    <button class="btn" style="color: white; border:none"><a class="btn" style="color: white; border:none" href="../index.php">Volver</a></button>
    </form>
</body>
</html>
