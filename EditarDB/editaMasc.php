<?php
include_once "../conexion.php";
include_once "../header.php";
if(!isset($_POST['enviar'])){
} else{
    $Xip=$_POST['Xip'];
    $nom=$_POST['nom'];
    $genere=$_POST['genere'];
    $Especie=$_POST['Especie'];
    $Raça=$_POST['Raça'];
	$Data_Naixement=$_POST['Data_Naixement'];
	$Propietari=$_POST['Propietari'];
	$Vet=$_POST['Vet'];
    $query=$mysqli->prepare('UPDATE Mascota SET Xip=?,nom=?,genere=?,Especie=?,Raça=?,Data_Naixement=?,Propietari=?,Vet=?');
    $query->bind_param('ssisi',$Xip,$nom,$genere,$Especie,$Raça,$Data_Naixement,$Propietari,$Vet);
    $query->execute();
    header('Location: ../index.php');
};

?>
<!DOCTYPE html>
<html>
<head>
	<title>Editar mascota</title>
	<link rel="stylesheet" href="../css/styles.css">
</head>
<body style="color: white;" class="formalta">
    <form action="../EditarAltas/eaMasc.php" method="POST">
    <div class="login-box">
    <h1>Editar Mascotas</h1>
    <div class="user-box">
        <label>XIP:</label><br>
        <input type="number" name="Xip" value="<?php echo $Mascota['Xip']; ?>"><br>
    </div>
    <div class="user-box">
        <label>Nombre:</label><br>
        <input type="text" name="nom" value="<?php echo $Mascota['nom']; ?>"><br>
    </div>
    <div class="user-box">
        <label>Genero:</label><br>
        <input type="text" name="genere" value="<?php echo $Mascota['genere']; ?>"><br>
    <div class="user-box">
        <label>Especie:</label><br>
        <input type="text" name="Especie" value="<?php echo $Mascota['Especie']; ?>"><br>
    </div>
    <div class="user-box">
        <label>Raza:</label><br>
        <input type="text" name="Raça" value="<?php echo $Mascota['Raça']; ?>"><br>
    </div>
	<div class="user-box">
        <label>Fecha de nacimiento:</label><br>
        <input type="text" name="Data_Naixement" value="<?php echo $Mascota['Data_Naixement']; ?>"><br>
    </div>
	<div class="user-box">
        <label>Propietario:</label><br>
        <input type="text" name="Propietari" value="<?php echo $Mascota['Propietari']; ?>"><br>
    </div>
	<div class="user-box">
        <label>Veterinario:</label><br>
        <input type="text" name="Vet" value="<?php echo $Mascota['Vet']; ?>"><br>
    </div>
    <button class="btn" style="color: white; border:none" name="enviar" type="submit">Enviar Datos</button>
    </form>
</body>
</html>
