<link rel="stylesheet" href="../css/styles.css">
<?php 
include_once "../header.php";
include_once "../conexion.php";
?>
<body class="formalta">
    <form action="../Altas/altaRaza.php" method="POST">
        <div class="login-box">
        <h2>Registrar raza</h2>
        <div class="user-box">
            <input type="text" name="id" required>
            <label for="id">ID</label>
        </div>
        <div class="user-box">
            <input type="text" name="nom" required>
            <label for="nom">Nombre</label>
        </div>
        <div class="user-box">
            <input type="number" name="alçada" required>
            <label for="alçada">Alçada</label>
        </div>
        <div class="user-box">
            <input type="number" name="pes" required>
            <label for="pes">Pes</label>
        </div>
        <div class="user-box">
            <input name="caracter" required></input>
            <label for="caracter">Caracter</label>
        </div>
        <button class="btn" style="color: white; border:none" name="enviar" type="submit">Enviar Datos</button>
        <button class="btn" style="color: white; border:none"><a class="btn" style="color: white; border:none" href="../index.php">Volver</a></button>
    </form>
</body>
