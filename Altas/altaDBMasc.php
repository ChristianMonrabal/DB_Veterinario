<!--Validamos los datos del formAlta.php y lo insertamos en la tabla-->
<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if(!isset($_POST['enviar']) || empty($_POST['Xip'])|| empty($_POST['nom'])|| empty($_POST['genere'])|| empty($_POST['Especie'])|| empty($_POST['Raça'])|| empty($_POST['Data_Naixement'])|| empty($_POST['Propietari'])|| empty($_POST['Vet'])){
} else{
    include_once "../conexion.php";
    $Xip=$_POST['Xip'];
    $nom=$_POST['nom'];
    $genere=$_POST['genere'];
    $Especie=$_POST['Especie'];
    $Raça=$_POST['Raça'];
    $Data_Naixement=$_POST['Data_Naixement'];
    $Propietari=$_POST['Propietari'];
    $Vet=$_POST['Vet'];
    $query=$mysqli->prepare('INSERT INTO Mascota (Xip,nom,genere,Especie,Raça,Data_Naixement,Propietari,Vet) VALUES (?,?,?,?,?,?,?,?)');
    $query->bind_param('isssisii',$Xip,$nom,$genere,$Especie,$Raça,$Data_Naixement,$Propietari,$Vet);
    $query->execute();
    header('Location: ../index.php');
};
?>