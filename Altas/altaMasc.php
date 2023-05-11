<?php
if (!isset($_GET['enviar']) || empty($_GET['xip']) || empty($_GET['nombre']) || empty($_GET['genero']) || empty($_GET['especie']) || empty($_GET['raza']) || empty($_GET['fecha']) || empty($_GET['propietario']) || empty($_GET['veterinario']) || empty($_GET['historial'])) {
    header('Location: ../FormAlta/formProp.php');
} else {
    include_once "../conexion.php";
    $xip = $_GET['xip'];
    $nombre = $_GET['nombre'];
    $genero = $_GET['genero'];
    $especie = $_GET['especie'];
    $raza = $_GET['raza'];
    $fecha = $_GET['fecha'];
    $propietario = $_GET['propietario'];
    $veterinario = $_GET['veterinario'];
    $historial = $_GET['historial'];

    $sentencia = $mysqli->prepare("SELECT MAX(Id_Historial) AS maxID from Historial");
    $sentencia->execute();
    $resultado = $sentencia->get_result();
    $max = $resultado->fetch_assoc();

    if (!$max) {
        exit("No hay resultados para ese ID");
    } else {
        $NewIdHist = $max["maxID"] + 1;
        $sentencia1 = $mysqli->prepare("INSERT INTO Historial (Id_Historial, Historial) VALUES (?, ?)");
        $sentencia1->bind_param("is", $NewIdHist, $historial);
        $sentencia1->execute();
    }

    // Insertar en la tabla "mascota"
    $sentencia2 = $mysqli->prepare('INSERT INTO Mascota (Xip, Nom, genere, Especie, Raça, Data_Naixement, Propietari, Vet, Historial) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)');
    $sentencia2->bind_param('isssisisi', $xip, $nombre, $genero, $especie, $raza, $fecha, $propietario, $veterinario, $NewIdHist);
    $sentencia2->execute();

    header('Location: ../Tablas/tablaMasc.php');
    exit();
}
?>
