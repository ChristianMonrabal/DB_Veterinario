<!--Formulario para dar de alta a los propiertarios-->
<link rel="stylesheet" href="../css/styles.css">
<?php 
include_once "../header.php";
include_once "../conexion.php";
?>
<body class="formalta">
<form action="../Altas/altaDBMasc.php" method="POST">
    <div class="login-box">
        <h2>Registrar Mascota</h2>
        <div class="user-box">
            <input type="number" name="Xip" required>
            <label for="Xip">Xip</label>
        </div>
        <div class="user-box">
            <input type="text" name="nom" required>
            <label for="nom">Nombre</label>
        </div>
        <div class="user-box">
            <input type="text" name="genere" required>
            <label for="geenre">Genero</label>
        </div>
        <div class="user-box">
            <input type="text"  name="Especie" required>
            <label for="Especie">Especie</label>
        </div>
        <div class="user-box">
            <input type="text" name="Raça" required>
            <label for="Raça">Raza</label>
        </div>
        <div class="user-box">
            <input type="text" name="Data_Naixement" required>
            <label for="Data_Naixement">Nacimiento</label>
        </div>
        <div class="user-box">
            <input type="text" name="Propietari" required>  
            <label for="Propietari">Propietario</label>
        </div>
        <div class="user-box">
            <input type="text" name="Vet" required>
            <label for="Vet">Veterinario</label>
        </div>
        <button class="btn" style="color: white; border:none" name="enviar" type="submit">Enviar Datos</button>
    </form>
</body>