<?php
if (empty($_GET['id'])) {
    header('Location: ../Tablas/tablaProp.php');
} else {
    include_once "../conexion.php";
    $id = $_GET['id'];
    $query = $mysqli->prepare('DELETE FROM propietari WHERE DNI = ?');
    $query->bind_param('i', $id);
    $query->execute();
    $query->close();
    $mysqli->close();
    header('Location: ../Tablas/tablaProp.php');
    exit;
}
?>
