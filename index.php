<?php
include_once "header.php";
include "conexion.php";
?>
<link rel="stylesheet" href="./css/styles.css">
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
        <a class="nav-link active" aria-current="page" href="./FormAlta/formMasc.php">Mascota</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="./FormAlta/formProp.php">Propietario</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="./FormAlta/formVet.php">Veterinario</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="./FormAlta/formRaza.php">Raza</a>
        </li>
    </div>
    <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
    <a class="navbar-brand" href="#">Tablas</a>
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="./Tablas/tablaMasc.php">Mascota</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="./Tablas/tablaProp.php">Propietario</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="./Tablas/tablaVet.php">Veterinario</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="./Tablas/tablaRaza.php">Raza</a>
        </li>
    </div>
    <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
    <a class="navbar-brand" href="#">Editar</a>
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="./FormEditar/formMasc.php">Mascota</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="./FormEditar/formProp.php">Propietario</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="./FormEditar/formVet.php">Veterinario</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="./FormEditar/formRaza.php">Raza</a>
        </li>
    </div>
</div>
</nav>
<style>
    .fondo {
        width: 100vw;
        height: 100vh;
        object-fit: cover;
}
</style>
<img class="fondo" src="./img/background.jpeg">