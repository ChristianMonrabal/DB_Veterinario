<!--Formulario para dar de alta a los propiertarios-->
<link rel="stylesheet" href="../css/styles.css">
<?php 
include_once "../header.php";
include_once "../conexion.php";
?>
<body class="formalta">
    <form action="../Altas/altaDB.php" method="POST">
        <div class="login-box">
        <h2>Registrar propietario</h2>
        <div class="user-box">
            <input type="text" name="dni" required>
            <label for="dni">DNI</label>
        </div>
        <div class="user-box">
            <input type="text" name="nombre" required>
            <label for="nom">Nombre</label>
        </div>
        <div class="user-box">
            <input type="text" name="direccion" required>
            <label for="direccion">Dirección</label>
        </div>
        <div class="user-box">
            <input type="number" name="telefono" required>
            <label for="telefono">Telefono</label>
        </div>
        <div class="user-box">
            <input type="email" name="correo" required>
            <label for="cor">Correo Electronico</label>
        </div>
        <button class="btn" style="color: white; border:none" name="enviar" type="submit">Enviar Datos</button>
    </form>
</body>