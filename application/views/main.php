<?php

/* 
MIT License

Copyright (c) 2016 Eduardo Fernández

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
*/
echo "looks like it work";
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