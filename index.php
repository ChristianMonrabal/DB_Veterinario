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
$query = "SELECT * from Mascota";
$result = $mysqli->query ($query);
?>
<table id="miTabla2" style="display:none" class="table table-dark table-striped table-hover">
<thead>
    <tr>
    <th>Xip</th>
    <th>Nombre</th>
    <th>Genero</th>
    <th>Especie</th>
    <th>Propietario</th>
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
        $fila=$fila."<td>" . $row["Propietari"] . "</td>";
        $fila=$fila."<td><a href='./EditarDB/editaMasc.php".$row["Mascota"]."' class='btn btn-primary btn-sm my-2'>Editar</a></td>";
        $fila=$fila."<td><a href='#' onclick='alertaBorrar(".$row["Mascota"].")' class='btn btn-danger btn-sm my-2'>Eliminar</a></td></tr>";
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