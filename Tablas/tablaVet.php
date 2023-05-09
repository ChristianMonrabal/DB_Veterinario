<?php
include_once "../header.php";
include "../conexion.php";
$query = "SELECT * from Veterinari";
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
        $fila=$fila."<td><a href='../FormEditar/formVet.php".$row["Veterinari"]."' class='btn btn-primary btn-sm my-2'>Editar</a></td>";
        $fila=$fila."<td><a href='#' onclick='alertaBorrar(".$row["Veterinari"].")' class='btn btn-danger btn-sm my-2'>Eliminar</a></td></tr>";
        echo $fila;
        }
    }
?>