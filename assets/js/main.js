/* 
 * The MIT License
 *
 * Copyright 2016 EduFdezSoy, (Eduardo Fernandez).
 *
 * @link https://twitter.com/EduFdezSoy
 * @mail edufdezsoy@gmail.com
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

// script que oculta los elementos de id mensaje a los 3 segundos
setTimeout("document.getElementById(\"mensaje\").style.display = \"none\"",3000);

// este script solo te deja meter numeros en un imput donde metas onkeypress="return valida(event)"
function writenum(e){
    tecla = (document.all) ? e.keyCode : e.which;
    //Tecla de retroceso para borrar, siempre la permite
    if (tecla==8){
        return true;
    }
    // Patron de entrada, en este caso solo acepta numeros
    patron =/[]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}
// script para mostrar menu de selecion de fecha y hora
$(function () {
                $('#datetimepicker1').datetimepicker({
                    format: 'DD/MM/YYYY H:mm',
                    locale: 'es'
                });
            });
$(function () {
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
    document.getElementById("JScoge_cat").children[0].children[categoria_id-1].setAttribute("selected", "selected");
}