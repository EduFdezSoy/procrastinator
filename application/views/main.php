<?php
// Copyright (c) 2016 - 2017, Eduardo Fernández
?>
<script>
// AJAX request
if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("taskslist").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","https://proteus.edufdezsoy.es/procrastinator/index.php/prajax?f=1",true);
        xmlhttp.send();
setInterval(function(){
if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("taskslist").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","https://proteus.edufdezsoy.es/procrastinator/index.php/prajax?f=1",true);
        xmlhttp.send();
}, 10000);
</script>

<div id="taskslist">
    Loading...
</div>