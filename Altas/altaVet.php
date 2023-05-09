<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if(!isset($_POST['enviar']) || empty($_POST['Id'])|| empty($_POST['Nom'])|| empty($_POST['Telf'])|| empty($_POST['Especialitat'])|| empty($_POST['Data_Contracte'])|| empty($_POST['Salari'])){
} else{
    include_once "../conexion.php";
    $Id=$_POST['Id'];
    $Nom=$_POST['Nom'];
    $Telf=$_POST['Telf'];
    $Especialitat=$_POST['Especialitat'];
    $Data_Contracte=$_POST['Data_Contracte'];
    $Salari=$_POST['Salari'];
    $query=$mysqli->prepare('INSERT INTO Veterinari (Id,Nom,Telf,Especialitat,Data_Contracte,Salari) VALUES (?,?,?,?,?,?)');
    $query->bind_param('issisi',$Id,$Nom,$Telf,$Especialitat,$Data_Contracte,$Salari);
    $query->execute();
    header('Location: ../Tablas/tablaVet.php');
};
?>