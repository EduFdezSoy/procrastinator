<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>

<?php if(isset($message)){ ?>
    <?=$message?>
 <?php } ?>

<div class="container">
    
<?php foreach ($tasks as $task) { ?>
    
    <div class="panel panel-default" class="well" id="<?=$task->id?>">
        <div class="panel-body">
            <span class="glyphicon glyphicon-certificate" style="font-size: 25px; vertical-align: middle; padding-right: 5px; color: #<?=$task->colour?>;"></span>
            <span style="vertical-align: middle;"><?=$task->task?></span>
        </div>
        <div class="panel-footer raton-normal">
            <div class="row">
                <div class="col-xs-9 col-md-10"  alt="<?=$task->first_name?>">
                    Por <span title="<?=$task->first_name?> <?=$task->last_name?>"><b><?=$task->username?></b></span> el <?=$task->date?>
                </div>
                <div class="col-xs-2 hidden-sm hidden-md hidden-lg" style="margin-left: -25px;">
                    <button class="btn btn-xs btn-success">Complete</button>
                </div>
                <div class="hidden-xs col-sm-2">
                    <button class="btn btn-success">Complete</button>
                </div>
            </div>
        </div>
    </div>
    
<?php } ?>

</div>