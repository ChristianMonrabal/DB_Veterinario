<?php 
include_once "../header.php";
include_once "../conexion.php";
if (!isset($_POST['enviar']) || empty($_POST['Xip']) || empty($_POST['nom']) || empty($_POST['genere']) || empty($_POST['Especie']) || empty($_POST['Raça']) || empty($_POST['Data_Naixement']) || empty($_POST['Propietari']) || empty($_POST['Vet']) || empty($_POST['Historial'])) {
    // Si algún campo del formulario está vacío, no hacemos nada
} else {
   // Si se han completado todos los campos obligatorios, se procede a insertar los datos en la base de datos
}
$id_mascota = $mysqli->insert_id;
$Id_Historial = $_POST['Id_Historial'];
$Historial = $_POST['Historial'];
$query = $mysqli->prepare('INSERT INTO Historial (Id_Historial, Historial) VALUES (?,?)');
$query->bind_param('is', $Id_Historial, $Historial);
$query->execute();
$Xip = $_POST['Xip'];
$nom = $_POST['nom'];
$genere = $_POST['genere'];
$Especie = $_POST['Especie'];
$Raça = $_POST['Raça'];
$Data_Naixement = $_POST['Data_Naixement'];
$Propietari = $_POST['Propietari'];
$Vet = $_POST['Vet'];
$query = $mysqli->prepare('INSERT INTO Mascota (Xip,nom,genere,Especie,Raça,Data_Naixement,Propietari,Vet) VALUES (?,?,?,?,?,?,?,?)');
$query->bind_param('isssisii', $Xip, $nom, $genere, $Especie, $Raça, $Data_Naixement, $Propietari, $Vet);
$query->execute();

header('Location: ../Tablas/tablaMasc.php');