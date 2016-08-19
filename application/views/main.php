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
    
    <div id="botones" class="container raton-normal no-selec" style="padding-bottom: 20px;">
        
        <!-- botones para abrir los modals -->
        
        <!-- screen = xs -->
        <div class="btn-group hidden-sm hidden-md hidden-lg">
            <button type="button" class="btn-xs btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="caret"></span>
            </button>
            <button type="button" class="btn-xs btn-primary" data-toggle="modal" data-target="#tarea" style="margin-left: -4px;">Add Task</button>
            <ul class="dropdown-menu raton-senala">
                <li><a data-toggle="modal" data-target="#programada">A&ntilde;adir tarea programada</a></li>
                <li><a data-toggle="modal" data-target="#periodica">A&ntilde;adir tarea peri&oacute;dica</a></li>
            </ul>
            <a href="<?=base_url('completed')?>"><button type="button" class="btn-xs btn-success">Completed Tasks</button></a>
        </div>
        
        <!-- screen => sm -->
        <div class="btn-group hidden-xs ">
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="caret"></span>
            </button>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tarea">Add Task</button>
            <ul class="dropdown-menu raton-senala">
                <li><a data-toggle="modal" data-target="#programada">A&ntilde;adir tarea programada</a></li>
                <li><a data-toggle="modal" data-target="#periodica">A&ntilde;adir tarea peri&oacute;dica</a></li>
            </ul>
            <a href="<?=base_url('completed')?>"><button type="button" class="btn btn-success">Completed Tasks</button></a>
        </div>
        
    </div>
    
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