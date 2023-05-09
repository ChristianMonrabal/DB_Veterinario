<?php
include_once "../conexion.php";

if(isset($_POST['enviar'])){
    $Id = $_POST['Id'];
    $Nom = $_POST['Nom'];
    $Telf = $_POST['Telf'];
    $Especialitat = $_POST['Especialitat'];
    $Data_Contracte = $_POST['Data_Contracte'];
    $Salari = $_POST['Salari'];

    // Validamos los datos del formulario
    if(empty($Nom) || empty($Telf) || empty($Especialitat) || empty($Data_Contracte) || empty($Salari)){
        echo "Error: Por favor complete todos los campos.";
    } else{
        $query=$mysqli->prepare('UPDATE Veterinari SET Nom=?, Telf=?, Especialitat=?, Data_Contracte=?, Salari=? WHERE Id=?');
        $query->bind_param('sisssi', $Nom, $Telf, $Especialitat, $Data_Contracte, $Salari, $Id);
        if($query->execute()){
            header('Location: ../Tablas/tablaVet.php');
        } else{
            echo "Error: No se pudo actualizar el veterinario. Por favor intente nuevamente.";
        }
    }
} else{
    echo "Error: No se recibieron los datos del formulario.";
}
?>
