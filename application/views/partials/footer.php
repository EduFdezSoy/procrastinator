<?php
// Copyright (c) 2016 - 2017, Eduardo Fernández
?>

        <div class="container-fluid no-selec">
            <footer id="footer">
                <p>&copy; 2016 - 2017, Eduardo Fernández</p>
                <?php if(ENVIRONMENT !== 'production'){ ?>
                    <p>Rendered in <strong>{elapsed_time}</strong> sec</p>
                <?php } ?>
            </footer>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
        <script src="<?=base_url()?>assets/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/js/main.js" type="text/javascript"></script>
        <link href="<?=base_url()?>assets/css/datetimepicker.min.css" rel="stylesheet" type="text/css"/>
        <script src="<?=base_url()?>assets/js/moments.min.js" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/js/datetimepicker.min.js" type="text/javascript"></script>
    </body>
</html>