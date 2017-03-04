/* 
 * The MIT License
 *
 * Copyright (c) 2016 - 2017, Eduardo Fernández
 *
 */

// Ajax periodic calls (ajax function is in views/main.php)
var ajaxInterval = setInterval(ajaxCall, 10000); // Time: 10s

// change a var value for AJAX call
async function tabNum(n) {
    clearInterval(ajaxInterval);
    window.tab = n;
    ajaxCall();
    await sleep(1000);
    var ajaxInterval = setInterval(ajaxCall, 10000); // Time: 10s
}

// change .active clas from tabs
var selector, elems, makeActive;

selector = '#tabs li';

elems = document.querySelectorAll(selector);

makeActive = function() {
    for (var i = 0; i < elems.length; i++)
        elems[i].classList.remove('active');

    this.classList.add('active');
};

for (var i = 0; i < elems.length; i++)
    elems[i].addEventListener('mousedown', makeActive);

// script que oculta los elementos de id mensaje a los 3 segundos
setTimeout("document.getElementById(\"mensaje\").style.display = \"none\"", 3000);

// este script solo te deja meter numeros en un input donde metas onkeypress="return valida(event)"
function writenum(e) {
    tecla = (document.all) ? e.keyCode : e.which;
    //Tecla de retroceso para borrar, siempre la permite
    if (tecla == 8) {
        return true;
    }
    // Patron de entrada, en este caso solo acepta numeros
    patron = /[]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}
// script para mostrar menu de selecion de fecha y hora
$(function() {
    $('#datetimepicker1').datetimepicker({
        format: 'DD/MM/YYYY H:mm',
        locale: 'es'
    });
});
$(function() {
    $('#datetimepicker2').datetimepicker({
        format: 'DD/MM/YYYY',
        locale: 'es'
    });
});

// script contador (hacia atrás) de minutos y segundos (ids JScuentaMin y JScuentaSeg) AUN NO FUNCIONA CORRECTAMENTE
/* $tiempom = document.getElementById("JScuentaMin").innerHTML;
 * $tiempos = document.getElementById("JScuentaSeg").innerHTML;
 * 
 *  function cuenta() {
 *  
 *  	document.getElementById("JScuentaSeg").innerHTML = $tiempos;
 *  	
 *  	if(($tiempos == 0) && ($tiempom > 0)) {
 *  		$tiempom--;
 *  		document.getElementById("JScuentaMin").innerHTML = $tiempom;
 *  		$tiempos = 60;
 *  	}
 *  	if (($tiempos == -1) && ($tiempom == 0)) {
 *  		clearInterval($cuentaSeg);
 *  		document.getElementById("JScuentaMin").innerHTML = "";
 *  		document.getElementById("JScuentaSeg").innerHTML = "Tiempo Acabado";
 *  	}
 *  	$tiempos--;	
 *  }
 * 
 * $CuentaSeg = setInterval("cuenta()", 1000);
 */

// esta funcion copia de un elemento a otro el valor para abrir el editor de la tarea
function coge_id(element) {
    // coge el id de la tarea en el click
    var tarea_id = element.id;
    // con el id pilla la tarea con ese name
    var tarea = document.getElementsByName(tarea_id)[0].innerHTML;
    // todo esto es na mas que para el color
    var color_element = document.getElementById(tarea_id).getElementsByClassName("col-xs-2")[0];
    style = window.getComputedStyle(color_element),
        tarea_color = style.getPropertyValue('background-color');
    // coge el id de la categoria y la recorta para que sea solo el numero (id de la categoria)
    var categoria = document.getElementsByName(tarea_id)[0].parentNode.parentNode.parentNode.parentNode.id;
    var categoria_id = categoria.substr(1);
    // y la imprime en el formilario que se abre
    document.getElementById("JScoge_id").setAttribute("value", tarea_id);
    document.getElementById("JScoge_tarea").innerHTML = tarea;
    document.getElementById("JScoge_color").style.backgroundColor = tarea_color;
    document.getElementById("JScoge_cat").children[0].children[categoria_id - 1].setAttribute("selected", "selected");
}