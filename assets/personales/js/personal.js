//SOLO NÚMEROS ENTEROS CON UN PUNTO
function limpiarNumeroConPunto(obj) {
    /* El evento "change" sólo saltará si son diferentes */
    obj.value = obj.value.replace(/[^\d\.\-]/g, '');
    var puntosArray = obj.value.split(".");
    var signoArray = obj.value.split("-");
    if (puntosArray.length > 2) {
        //alert("Tiene muchos Puntos");
        obj.value = obj.value.substring(0, obj.value.length - 1)
    }
    if (signoArray.length > 2) {
        //alert("Tiene muchos -");
        obj.value = obj.value.substring(0, obj.value.length - 1)
    }
}
$(document).ready(function () {
    //Código que se ejecutará al cargar la página
    //$('.teal').text('hola');

});