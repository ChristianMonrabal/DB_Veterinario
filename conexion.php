<!--Archivo donde creamos la conexión a la base de datos PHP--> 
<?php
$mysqli=new mysqli('localhost','root','','vets');

if($mysqli->connect_errno){
    printf("error en la conexión:%s\n",$mysqli->connect_error);
    exit();
}