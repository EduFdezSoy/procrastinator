/* 
 * The MIT License
 *
 * Copyright (c) 2016 - 2017, Eduardo Fernández
 *
 */

// 10 seconds to the ajax periodic call (its below)
var timer = 10000;
// Ajax periodic calls (ajax function is in views/main.php)
var ajaxInterval = setInterval(ajaxCall, timer);

// change a var value for AJAX call
function tabNum(n) {
    clearInterval(ajaxInterval); // stop making calls
    window.tab = n;
    ajaxCall();
    ajaxInterval = setInterval(ajaxCall, timer);
}

// complete a task using AJAX
function completeTask(n) {
    var tid = n;
    clearInterval(ajaxInterval); // stop making calls

    // do the XMLHttpRequest
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else {
        // code for IE6, IE5 (someone still using them?)
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            console.log("Complete task: OK");
        }
    };
    xmlhttp.open("GET", baseurl + "dowithtask/complete/" + tid, true);
    xmlhttp.send();

    // Update task list in time and restart auto-updater
    ajaxCall();
    ajaxInterval = setInterval(ajaxCall, timer);
}

// undo a completed task using AJAX
function undoTask(n) {
    var tid = n;
    clearInterval(ajaxInterval); // stop making calls

    // do the XMLHttpRequest
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else {
        // code for IE6, IE5 (someone still using them?)
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            console.log("Undo task: OK");
        }
    };
    xmlhttp.open("GET", baseurl + "dowithtask/undo/" + tid, true);
    xmlhttp.send();

    // Update task list in time and restart auto-updater
    ajaxCall();
    ajaxInterval = setInterval(ajaxCall, timer);
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

// generate a random color for the "add task" modal
function colorGen() {
    var text = '#';
    var charset = 'ABCDEF0123456789';

    for (var i = 0; i < 6; i++)
        text += charset.charAt(Math.floor(Math.random() * charset.length));

    document.getElementById('inColor').value = text;
    document.getElementById('inColor2').value = text;
}

// clear textarea from the form when closed
function eraseText() {
    document.getElementById('addtasktextarea').value = '';
    document.getElementById('edittasktextarea').value = '';
    document.getElementById('edit-id').value = '';
}

// copy tab id and paste in the form (to make the first form tab visible always be the selected)
function catch_tab(tab_id) {
    document.getElementById('tabselect').value = tab_id;
    document.getElementById('tabselect2').value = tab_id;
}

// send add task form
$('#addtaskform').submit(function(ev) {
    $.ajax({
        type: $('#addtaskform').attr('method'),
        url: $('#addtaskform').attr('action'),
        data: $('#addtaskform').serialize(),
        success: function(data) {
            ajaxCall();
            $('#addTask').modal('hide');
            eraseText();
        }
    });

    ev.preventDefault();
});

// copy task data to edit it in the form
function catchAll(id) {
    // catch the task things to paste into the form
    var taskContainer = document.getElementById(id);

    var task = document.getElementById(id).getElementById('task-text').innerHTML;
    var color = taskContainer.getElementById('task-color').getAttribute('data-color');

    // paste data into the form
    document.getElementById('edit-id').value = id;
    document.getElementById('addtasktextarea').value = task;
    document.getElementById('inColor2').value = color;
}


// esta funcion copia de un elemento a otro el valor para abrir el editor de la tarea
function coge_id(element) {
    // coge el id de la tarea en el click
    var tarea_id = element.id;
    // con el id pilla la tarea con ese name
    var tarea = document.getElementsByName(tarea_id)[0].innerHTML;
    // todo esto es na mas que para el color
    var color_element = document.getElementById(tarea_id).getElementsByClassName('col-xs-2')[0];
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






/////// OLD BUT GOLD, no lo estoy usando, puede servir ///////


// script que oculta los elementos de id mensaje a los 3 segundos
// setTimeout("document.getElementById(\"mensaje\").style.display = \"none\"", 3000);

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