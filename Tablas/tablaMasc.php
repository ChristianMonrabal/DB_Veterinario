<?php
include_once "../header.php";
include "../conexion.php";
$query = "SELECT m.*, r.nom as raza, p.nom as propietario, v.nom as veterinario, h.* 
FROM mascota m 
INNER JOIN raça r ON m.Raça = r.id 
INNER JOIN propietari p ON m.Propietari = p.DNI 
INNER JOIN veterinari v ON m.Vet = v.id 
INNER JOIN historial h ON m.Historial = h.Id_Historial";
$result = $mysqli->query ($query);
?>
<!--Navbar-->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
<div class="container-fluid">
    <a class="navbar-brand" href="#">Altas</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="../FormAlta/formMasc.php">Mascota</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="../FormAlta/formProp.php">Propietario</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="../FormAlta/formVet.php">Veterinario</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="../FormAlta/formRaza.php">Raza</a>
        </li>
    </div>
    <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
    <a class="navbar-brand" href="#">Tablas</a>
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="../Tablas/tablaMasc.php">Mascota</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="../Tablas/tablaProp.php">Propietario</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="../Tablas/tablaVet.php">Veterinario</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="../Tablas/tablaRaza.php">Raza</a>
        </li>
    </div>
    <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
    <a class="navbar-brand" href="#">Editar</a>
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="../FormEditar/formMasc.php">Mascota</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="../FormEditar/formProp.php">Propietario</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="../FormEditar/formVet.php">Veterinario</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="../FormEditar/formRaza.php">Raza</a>
        </li>
    </div>
</div>
</nav>
<table class="table table-dark table-striped table-hover">
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
                        $fila=$fila."<td><a href='../FormEditar/formMasc.php".$row["xip"]."' class='btn btn-primary btn-sm my-2'>Editar</a></td>";
                        $fila=$fila."<td><a href='../Eliminar/eliminar.php' onclick='alertaBorrar(".$row["Xip"].")' class='btn btn-danger btn-sm my-2'>Eliminar</a></td></tr>";
                        echo $fila;
                    }
                }
                ?>