<?php
// Copyright (c) 2016 - 2017, Eduardo Fernández
 ?>
    <ul id="tabs" class="col-md-offset-2 col-md-8">

        <?php foreach ($tabs as $tab) { ?>
        
            <li <? if($tab->order==1){echo 'class="active"';}?> id="Tab-<?=$tab->id?>"><a href="#"><?=$tab->name?></a></li>
            
        <?php } ?>

    </ul>