<!--Archivo donde vemos los datos de las tablas de la database-->
<!--Tabla Propietarios-->
<h2 onclick="toggleTable()">Tabla Propietarios</h2>
<?php
include_once "header.php";
include "conexion.php";
$query = "SELECT * from propietari";
$result = $mysqli->query ($query);
?>
<table id="miTabla" style="display:none" class="table table-dark table-striped table-hover">
<thead>
    <tr>
    <th>DNI</th>
    <th>Nombre</th>
    <th>Dirección</th>
    <th>Teléfono</th>
    <th>Email</th>
    <th>Editar</th>
    <th>Eliminar</th>
</tr>
</thead>

<tbody>
    <?php
    if ($result->num_rows > 0) {
    while($row = $result->fetch_array()) {
        $fila="<tr>";
        $fila=$fila."<td>" . $row["DNI"] . "</td>";
        $fila=$fila."<td>" . $row["Nom"] . "</td>";
        $fila=$fila."<td>" . $row["Adreça"] . "</td>";
        $fila=$fila."<td>" . $row["Telf"] . "</td>";
        $fila=$fila."<td>" . $row["Mail"] . "</td>";
        $fila=$fila."<td><a href='./EditarDB/editaProp.php".$row["propietari"]."' class='btn btn-primary btn-sm my-2'>Editar</a></td>";
        $fila=$fila."<td><a href='#' onclick='alertaBorrar(".$row["propietari"].")' class='btn btn-danger btn-sm my-2'>Eliminar</a></td></tr>";
        echo $fila;
        }
    }
?>
</tbody>
</table>
<a href= "./Formularios/formAltaProp.php" class="btn btn-primary my-2">Alta Propietario</a>

<!--Tabla Mascota-->
<h2 onclick="toggleTable2()">Tabla Mascotas</h2>
<?php
$query = "SELECT m.*, r.nom as raza, p.nom as propietario, v.nom as veterinario, h.* 
FROM mascota m 
INNER JOIN raça r ON m.Raça = r.id 
INNER JOIN propietari p ON m.Propietari = p.DNI 
INNER JOIN veterinari v ON m.Vet = v.id 
INNER JOIN historial h ON m.Historial = h.Id_Historial";
$result = $mysqli->query ($query);
?>
<table id="miTabla2" style="display:none" class="table table-dark table-striped table-hover">
<thead>
    <tr>
    <th>Xip</th>
    <th>Nombre</th>
    <th>Genero</th>
    <th>Especie</th>
    <th>Raza</th>
    <th>Fecha de nacimiento</th>
    <th>Propietario</th>
    <th>Veterinario</th>
    <th>Historial</th>
    <th>Editar</th>
    <th>Eliminar</th>
</tr>
</thead>
<tbody>
<?php
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_array()) {
                        $fila="<tr>";
                        $fila=$fila."<td>" . $row["Xip"] . "</td>";
                        $fila=$fila."<td>" . $row["nom"] . "</td>";
                        $fila=$fila."<td>" . $row["genere"] . "</td>";
                        $fila=$fila."<td>" . $row["Especie"] . "</td>";
                        $fila=$fila."<td>" . $row["raza"] . "</td>";
                        $fila=$fila."<td>" . $row["Data_Naixement"] . "</td>";
                        $fila=$fila."<td>" . $row["propietario"] . "</td>";
                        $fila=$fila."<td>" . $row["veterinario"] . "</td>";
                        $fila=$fila."<td>" . $row["Historial"] . "</td>";
                        $fila=$fila."<td><a href='./EditarDB/editaMasc.php".$row["xip"]."' class='btn btn-primary btn-sm my-2'>Editar</a></td>";
                        $fila=$fila."<td><a href='#' onclick='alertaBorrar(".$row["Xip"].")' class='btn btn-danger btn-sm my-2'>Eliminar</a></td></tr>";
                        echo $fila;
                    }
                }
                ?>
<a href= "./Formularios/formAltaMasc.php" class="btn btn-primary my-2">Alta Mascota</a>

<!--Tabla Veterinario-->
<?php
$query = "SELECT * from Veterinari";
$result = $mysqli->query ($query);
?>
<table id="miTabla3" style="display:none" class="table table-dark table-striped table-hover">
<thead>
    <tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Telefono</th>
    <th>Especialidad</th>
    <th>Salario</th>
    <th>Editar</th>
    <th>Eliminar</th>
</tr>
</thead>
<tbody>
    <?php
    if ($result->num_rows > 0) {
    while($row = $result->fetch_array()) {
        $fila="<tr>";
        $fila=$fila."<td>" . $row["Id"] . "</td>";
        $fila=$fila."<td>" . $row["Nom"] . "</td>";
        $fila=$fila."<td>" . $row["Telf"] . "</td>";
        $fila=$fila."<td>" . $row["Especialitat"] . "</td>";
        $fila=$fila."<td>" . $row["Salari"] . "</td>";
        $fila=$fila."<td><a href='./EditarDB/editaVet.php".$row["Veterinari"]."' class='btn btn-primary btn-sm my-2'>Editar</a></td>";
        $fila=$fila."<td><a href='#' onclick='alertaBorrar(".$row["Veterinari"].")' class='btn btn-danger btn-sm my-2'>Eliminar</a></td></tr>";
        echo $fila;
        }
    }
?>
<h2 onclick="toggleTable3()">Tabla Veterinarios</h2>
<a href= "./Formularios/formAltaVet.php" class="btn btn-primary my-2">Alta Veterinario</a>

<!--Tabla Raza-->
<?php
$query = "SELECT * from raça";
$result = $mysqli->query ($query);
?>
<table id="miTabla4" style="display:none" class="table table-dark table-striped table-hover">
<thead>
    <tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Alzada</th>
    <th>Peso</th>
    <th>Caracter</th>
    <th>Editar</th>
    <th>Eliminar</th>
</tr>
</thead>
<tbody>
    <?php
    if ($result->num_rows > 0) {
    while($row = $result->fetch_array()) {
        $fila="<tr>";
        $fila=$fila."<td>" . $row["Id"] . "</td>";
        $fila=$fila."<td>" . $row["Nom"] . "</td>";
        $fila=$fila."<td>" . $row["Alçada"] . "</td>";
        $fila=$fila."<td>" . $row["Pes"] . "</td>";
        $fila=$fila."<td>" . $row["Caracter"] . "</td>";
        $fila=$fila."<td><a href='./EditarDB/editaRaça.php".$row["raça"]."' class='btn btn-primary btn-sm my-2'>Editar</a></td>";
        $fila=$fila."<td><a href='#' onclick='alertaBorrar(".$row["raça"].")' class='btn btn-danger btn-sm my-2'>Eliminar</a></td></tr>";
        echo $fila;
        }
    }
?>
<h2 onclick="toggleTable4()">Tabla Raza</h2>
<a href= "./Formularios/formAltaRaça.php" class="btn btn-primary my-2">Alta Raza</a>
</body>
</html>
<script src="./js/main.js"></script>