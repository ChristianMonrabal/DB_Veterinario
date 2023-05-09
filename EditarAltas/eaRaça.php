<?php
include_once "../conexion.php";
if(isset($_POST['enviar'])){
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $alçada = $_POST['alçada'];
    $pes = $_POST['pes'];
    $caracter = $_POST['caracter'];
    $query = $mysqli->prepare('UPDATE raça SET nom=?, alçada=?, pes=?, caracter=? WHERE id=?');
    $query->bind_param('sddsi', $nom, $alçada, $pes, $caracter, $id);
    $query->execute();
    header('Location: ../Tablas/tablaRaza.php');
} else {
    header('Location: ../Tablas/tablaRaza.php');
}
?>
