<?php
// Copyright (c) 2016 - 2017, Eduardo Fernández
?>
<script>
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

<!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>
<script type="text/javascript">
   var auto_refresh = setInterval(
      function ()
      {
         $('#load_tweets').load('<?=base_url()?>index.php/prajax?f=1').fadeIn("slow");
      }, 1000); // refresh every 10000 milliseconds
</script>
-->
<div id="taskslist">
    Loading...
</div>