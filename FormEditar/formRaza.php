<?php 
include_once "../conexion.php";
include_once "../header.php";
if(!isset($_POST['enviar'])){
    $id=$_GET['id'];
    $query=$mysqli->prepare('SELECT * FROM raça WHERE id=?');
    $query->bind_param('i',$id);
    $query->execute();
    $result=$query->get_result();
    $raça=$result->fetch_assoc();
} else{
    $id=$_POST['id'];
    $nom=$_POST['nom'];
    $alçada=$_POST['alçada'];
    $pes=$_POST['pes'];
    $caracter=$_POST['caracter'];
    $query=$mysqli->prepare('UPDATE raça SET nom=?,alçada=?,pes=?,caracter=? WHERE id=?');
    $query->bind_param('sddsi',$nom,$alçada,$pes,$caracter,$id);
    $query->execute();
    header('Location: ../index.php');
};
?>

<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="../css/styles.css">
<head>
    <title>Editar Raza</title>
</head>
<body style="color: white;" class="formalta">
    <form action="../EditarAltas/eaRaça.php" method="POST">
    <div class="login-box">
    <h1>Editar Raza</h1>
    <div class="user-box">
        <label>ID:</label><br>
        <input type="text" name="id" value="<?php echo $raça['id']; ?>"><br>
    </div>
    <div class="user-box">
        <label>Nombre:</label><br>
        <input type="text" name="nom" value="<?php echo $raça['nom']; ?>"><br>
    </div>
    <div class="user-box">
        <label>Altura:</label><br>
        <input type="text" name="alçada" value="<?php echo $raça['alçada']; ?>"><br>
    </div>
    <div class="user-box">
        <label>Peso:</label><br>
        <input type="text" name="pes" value="<?php echo $raça['pes']; ?>"><br>
    </div>
    <div class="user-box">
        <label>Carácter:</label><br>
        <input type="text" name="caracter" value="<?php echo $raça['caracter']; ?>"><br>
    </div>
    <button class="btn" style="color: white; border:none" name="enviar" type="submit">Enviar Datos</button>
    <button class="btn" style="color: white; border:none"><a class="btn" style="color: white; border:none" href="../index.php">Volver</a></button>
    </form>
</body>
</html>
