<?php
// Copyright (c) 2016 - 2017, Eduardo Fernández
 ?>

<ul class="nav nav-tabs">

    <?php foreach ($tabs as $tab) { ?>
    
        <li class="active"><a href="#"><?=$tab->name?></a></li>
        <li><a href="#">Menu 1</a></li>
        <li><a href="#">Menu 2</a></li>
        <li><a href="#">Menu 3</a></li>
    
        <!-- Task container -->
        <div class="task-container" id="<?=$task->id?>">

        
    <?php } ?>

</ul>
<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>