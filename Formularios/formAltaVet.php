<!--Formulario para dar de alta a los propiertarios-->
<link rel="stylesheet" href="../css/styles.css">
<?php 
include_once "../header.php";
include_once "../conexion.php";
?>
<body class="formalta">
    <form action="../Altas/altaDBVet.php" method="POST">
        <div class="login-box">
        <h2>Registrar veterinario</h2>
        <div class="user-box">
            <input type="text" name="Id" required>
            <label for="Id">ID</label>
        </div>
        <div class="user-box">
            <input type="text" name="Nom" required>
            <label for="Nom">Nombre</label>
        </div>
        <div class="user-box">
            <input type="number" name="Telf" required>
            <label for="Telf">Telefono</label>
        </div>
        <div class="user-box">
            <input type="text" name="Especialitat" required>
            <label for="Especialitat">Especialitat</label>
        </div>
        <div class="user-box">
            <input type="text" name="Data_Contracte" required>
            <label for="Data_Contracte"> Data_Contracte</label>
        </div>
        <div class="user-box">
            <input type="number" name="Salari" required>
            <label for="Salari">Salario</label>
        </div>
        <button class="btn" style="color: white; border:none" name="enviar" type="submit">Enviar Datos</button>
    </form>
</body>