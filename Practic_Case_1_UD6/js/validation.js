
/**
 * Prueba js en php.
 */

function verificarInput() {
    var hexadecimal = document.getElementById('valorHexadecimal').value;

    if(hexadecimal.length < 7) {
        alert("Debe ingresar 6 digitos");
        location.reload();
    }else{
        return false;
    }
}

console.log(document.getElementById('valorHexadecimal').value);