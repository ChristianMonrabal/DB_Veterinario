<?php
include_once "../conexion.php";
include_once "../header.php";

if(isset($_POST['enviar'])){
    $Xip=$_POST['Xip'];
    $nom=$_POST['nom'];
    $genere=$_POST['genere'];
    $Especie=$_POST['Especie'];
    $Raça=$_POST['Raça'];
    $Data_Naixement=$_POST['Data_Naixement'];
    $Propietari=$_POST['Propietari'];
    $Vet=$_POST['Vet'];

    // Validamos los datos del formulario
    if(empty($Xip) || empty($nom) || empty($genere) || empty($Especie) || empty($Raça) || empty($Data_Naixement) || empty($Propietari) || empty($Vet)){
        echo "Error: Por favor complete todos los campos.";
    } else{
        $query=$mysqli->prepare('UPDATE Mascota SET nom=?,genere=?,Especie=?,Raça=?,Data_Naixement=?,Propietari=?,Vet=? WHERE Xip=?');
        $query->bind_param('ssissssi',$nom,$genere,$Especie,$Raça,$Data_Naixement,$Propietari,$Vet,$Xip);
        if($query->execute()){
            header('Location: ../Tablas/tablaMasc.php');
        } else{
            echo "Error: No se pudo actualizar la mascota. Por favor intente nuevamente.";
        }
    }
} else{
    echo "Error: No se recibieron los datos del formulario.";
}
?>