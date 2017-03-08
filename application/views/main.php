<?php
// Copyright (c) 2016 - 2017, Eduardo Fernández
?>

<script>
// Initialice and define tab to the ajax call
var tab = 1;
// Ajax request function
function ajaxCall()
{
    var num = window.tab;
    if (window.XMLHttpRequest)
    {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else {
        // code for IE6, IE5 (someone still using them?)
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function()
    {
        if (this.readyState == 4 && this.status == 200)
        {
            document.getElementById("taskslist").innerHTML = this.responseText;
        }
    };
    xmlhttp.open("GET","<?=base_url()?>prajax/tasks/"+num,true);
    xmlhttp.send();
}
// Ajax call
ajaxCall();
// Ajax periodic calls and tab function are in main.js
</script>

<!-- Here will be shown the result from the AJAX call -->
<div id="taskslist">
    Loading...
</div>