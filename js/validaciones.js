function validacion() {
    // Validar Xip
    var campo = document.getElementById("xip");
    var wCampo = document.getElementById("wxip");
    wCampo.innerText="";
    if( campo.value == null || campo.value.length == 0 || isNaN(campo.value) ) {
    wCampo.innerText="Debes rellenar el campo Xip con un dato numerico";
    campo.focus();
    return false;
    }

    // Validar Nombre
    campo = document.getElementById("nombre");
    wCampo = document.getElementById("wnombre");
    wCampo.innerText="";
    if( campo.value == null || campo.value.length == 0 || /^\s+$/.test(campo.value) ) {
    wCampo.innerText="Debes rellenar el campo con un Nombre";
    campo.focus();
    return false;
    }
    
    // Validar Genero
    var genero = document.getElementsByName("genero");
    var generoSeleccionado = false;
    for (var i = 0; i < genero.length; i++) {
        if (genero[i].checked) {
            generoSeleccionado = true;
        }
    }
    if (!generoSeleccionado) {
        document.getElementById("wgenero").innerHTML = "Debe seleccionar un genero";
        return false;
    } else {
        document.getElementById("wgenero").innerHTML = "";
    }
    
    // Validar Especie
    var especie = document.getElementsByName("especie");
    var especieSeleccionada = false;
    for (var i = 0; i < especie.length; i++) {
        if (especie[i].checked) {
            especieSeleccionada = true;
        }
    }
    if (!especieSeleccionada) {
        document.getElementById("wespecie").innerHTML = "Debe seleccionar una especie";
        return false;
    } else {
        document.getElementById("wespecie").innerHTML = "";
    }
    
    // Validar Raza
    var raza = document.getElementById("raza").selectedIndex;
    if (raza == null || raza == 0) {
        document.getElementById("wraza").innerHTML = "Debe seleccionar una raza";
        return false;
    } else {
        document.getElementById("wraza").innerHTML = "";
    }
    
    //Validar fecha 
    var fecha = document.getElementById("fecha").value;
    var valores = fecha.split("-");
    var ano = valores[0];
    var mes = valores[1] - 1; // Restamos 1 porque los meses en JS van de 0 a 11
    var dia = valores[2];
    var valor = new Date(ano, mes, dia);
    if (isNaN(valor) || valor > new Date()) {
        document.getElementById("wfecha").innerHTML = "Debe ingresar una fecha de nacimiento válida";
        return false;
    } else {
        document.getElementById("wfecha").innerHTML = "";
    }

    // Validar Propietario
    var propietario = document.getElementById("propietario").selectedIndex;
    if (propietario == null || propietario == 0) {
        document.getElementById("wpropietario").innerHTML = "Debe seleccionar un propietario";
        return false;
    } else {
        document.getElementById("wpropietario").innerHTML = "";
    }
    
    
    // Validar Veterinario
    var veterinario = document.getElementById("veterinario").selectedIndex;
    if (veterinario == null || veterinario == 0) {
        document.getElementById("wveterinario").innerHTML = "Debe seleccionar un propietario";
        return false;
    } else {
        document.getElementById("wveterinario").innerHTML = "";
    }
    
    //Historial
    var historial = document.getElementById("historial").value;
    if (historial == null || historial.length == 0 || /^\s+$/.test(historial)) {
        document.getElementById("whistorial").innerHTML = "Debe ingresar un historial válido";
        return false;
    } else {
        document.getElementById("whistorial").innerHTML = "";
    }

    return true;
}
function resetFieds(){

}