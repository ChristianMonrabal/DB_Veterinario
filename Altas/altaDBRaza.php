<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if(!isset($_POST['enviar']) || empty($_POST['id'])|| empty($_POST['nom'])|| empty($_POST['alçada'])|| empty($_POST['pes'])|| empty($_POST['caracter'])){

} else{
    include_once "../conexion.php";
    $id=$_POST['id'];
    $nom=$_POST['nom'];
    $alçada=$_POST['alçada'];
    $pes=$_POST['pes'];
    $caracter=$_POST['caracter'];
    $query=$mysqli->prepare('INSERT INTO raça (id,nom,alçada,pes,caracter) VALUES (?,?,?,?,?)');
    $query->bind_param('isdds',$id,$nom,$alçada,$pes,$caracter);
    $query->execute();
    header('Location: ../index.php');
};
?>
