<?php include_once "../header.php";
include_once "../conexion.php";
?>
<div class="form-control border">
    <div class="col-12">
        <form action="../Altas/altaMasc.php">
            <div class="mb-3">
                <label for="descripcion">Xip</label>
                <input type="number" name="xip" id="xip" class="form-control" placeholder="Xip" >
            </div>
            <div class="mb-3">
                <label for="descripcion">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre" >
            </div>
            <div class="form-group">
                <label>Genero</label>
            </div>

            <div class="form-check form-check-inline">
                <label class="form-check-label" for="m">M</label>
                <input class="form-check-input" type="radio" name="genero" id="m" value="M" >
            </div>

            <div class="form-check form-check-inline">
                <label class="form-check-label" for="f">F</label>
                <input class="form-check-input" type="radio" name="genero" id="f" value="F">
            </div>

            <div class="form-group">
                <label>Especie</label>
            </div>

            <div class="form-check form-check-inline">
                <label class="form-check-label" for="gos">Gos</label>
                <input class="form-check-input" type="radio" name="especie" id="gos" value="Gos" >
            </div>

            <div class="form-check form-check-inline">
                <label class="form-check-label" for="gat">Gat</label>
                <input class="form-check-input" type="radio" name="especie" id="gat" value="Gat">
            </div>

            <div class="mb-3">
                <label for="descripcion">Raza</label>
                <select name="raza" id="raza" class="form-select from-select-sm" aria-label=".form-select-sm example" >
                <option disabled selected>Seleciona Raza</option>
                <?php
                $query="SELECT * FROM raça";
                $resultado=$mysqli->query($query);
                $razas=$resultado->fetch_all(MYSQLI_ASSOC);
                foreach ($razas as $raza) {
                    echo "<option value='".$raza["Id"]."'>".$raza["Nom"]."</option>";
                }
                ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="fecha">Fecha Nacimiento</label></br>
                <input type="date" name="fecha" id="fecha"  max="<?= date('Y-m-d'); ?>" >
            </div>

            <div class="form-group">
                <label for="descripcion">Propietario</label>
                <select name="propietario" id="propietario" class="form-select from-select-sm" aria-label=".form-select-sm example" >
                <option disabled selected>Seleciona Propietario</option>
                <?php
                $query="SELECT * FROM propietari";
                $resultado=$mysqli->query($query);
                $propietarios=$resultado->fetch_all(MYSQLI_ASSOC);
                foreach ($propietarios as $propietario) {
                    echo "<option value='".$propietario["DNI"]."'>".$propietario["Nom"]."</option>";
                }
                ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="descripcion">Veterinario</label>
                <select name="veterinario" id="veterinario" class="form-select from-select-sm" aria-label=".form-select-sm example">
                <option disabled selected>Seleciona Veterinario</option>
                <?php
                $query="SELECT * FROM veterinari";
                $resultado=$mysqli->query($query);
                $veterinarios=$resultado->fetch_all(MYSQLI_ASSOC);
                foreach ($veterinarios as $veterinario) {
                    echo "<option value='".$veterinario["Id"]."'>".$veterinario["Nom"]."</option>";
                }
                ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="descripcion">Historial</label>
                <input type="text" name="historial" id="historial" class="form-control" placeholder="dd/mm/aa motivo visita" >
            </div>
            <div class="mb-3">
                <button class="btn btn-success" name="enviar" type="submit">Guardar</button>
                <button type="button" class="btn btn-success" onclick="history.back()">Volver</button>
            </div>
        </form>
    </div>
</div>

