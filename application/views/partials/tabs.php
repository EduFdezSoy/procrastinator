<?php
// Copyright (c) 2016 - 2017, Eduardo Fernández
 ?>
 <div class="tabs-container">
    <ul id="tabs">

        <?php foreach ($tabs as $tab) { ?>
        
            <li <? if($tab->order==1){echo 'class="active"';}?> id="Tab-<?=$tab->id?>" onclick="tabNum(<?=$tab->id?>); catch_tab("<?=$tab->id?>");"><a href="#"><?=$tab->name?></a></li>
            
        <?php } ?>

            <li id="Tab-completed" onclick="tabNum(0)"><a href="#">Completed</a></li>
    </ul>
</div>