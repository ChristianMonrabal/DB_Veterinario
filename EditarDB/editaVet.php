<!--Formulario para editar los datos de un veterinario-->
<link rel="stylesheet" href="../css/styles.css">
<?php 
include_once "../header.php";
include_once "../conexion.php";
// Recuperamos el ID del veterinario a editar
if(isset($_GET['Id'])){
    $Id = $_GET['Id'];
    // Buscamos los datos del veterinario en la base de datos
    $query = $mysqli->prepare("SELECT * FROM Veterinari WHERE Id=?");
    $query->bind_param('i', $Id);
    $query->execute();
    $result = $query->get_result();
    $veterinario = $result->fetch_assoc();
}
?>
<body class="formalta">
    <form action="../EditarAltas/eaVet.php" method="POST">
        <div class="login-box">
        <h2>Editar datos del veterinario</h2>
        <div class="user-box">
            <input type="text" name="Id" required value="<?php echo $veterinario['id']; ?>">
            <label for="Id">Id</label>
        <div class="user-box">
            <input type="text" name="Nom" required value="<?php echo $veterinario['Nom']; ?>">
            <label for="Nom">Nombre</label>
        </div>
        <div class="user-box">
            <input type="number" name="Telf" required value="<?php echo $veterinario['Telf']; ?>">
            <label for="Telf">Telefono</label>
        </div>
        <div class="user-box">
            <input type="text" name="Especialitat" required value="<?php echo $veterinario['Especialitat']; ?>">
            <label for="Especialitat">Especialitat</label>
        </div>
        <div class="user-box">
            <input type="text" name="Data_Contracte" required value="<?php echo $veterinario['Data_Contracte']; ?>">
            <label for="Data_Contracte">Data_Contracte</label>
        </div>
        <div class="user-box">
            <input type="number" name="Salari" required value="<?php echo $veterinario['Salari']; ?>">
            <label for="Salari">Salario</label>
        </div>
        <button class="btn" style="color: white; border:none" name="enviar" type="submit">Actualizar Datos</button>
    </form>
</body>