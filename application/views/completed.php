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

?>

<?php if(isset($message)){ ?>
    <?=$message?>
 <?php } ?>

<div class="container">
    
    <div id="botones" class="container raton-normal no-selec" style="padding-bottom: 20px;">
        
        <!-- botones para abrir los modals -->
        
        <!-- screen = xs -->
        <div class="hidden-sm hidden-md hidden-lg">
            <a href="<?=base_url('')?>"><button type="button" class="btn-xs btn-success">Tasks to do</button></a>
        </div>
        
        <!-- screen => sm -->
        <div class="hidden-xs ">
            <a href="<?=base_url('')?>"><button type="button" class="btn btn-success">Tasks to do</button></a>
        </div>
        
    </div>
    
<?php foreach ($c_tasks as $task) { ?>
    
    <div class="panel panel-default" class="well" id="<?=$task->task_id?>">
        <div class="panel-body">
            <span class="glyphicon glyphicon-certificate" style="font-size: 25px; vertical-align: middle; padding-right: 5px; color: #<?=$task->colour?>;"></span>
            <span style="vertical-align: middle;"><?=$task->task?></span>
        </div>
        <div class="panel-footer raton-normal">
            <div class="row">
                <div class="col-xs-9 col-md-10">
                    By <span title="<?=$task->u1first_name?> <?=$task->u1last_name?>"><b><?=$task->u1username?></b></span> on <?=$task->date?>
                    <br>
                    Completed by <span title="<?=$task->u2first_name?> <?=$task->u2last_name?>"><b><?=$task->u2username?></b></span>
                    
                    <?php
                    if($task->date == $task->c_date) {
                        echo 'the same day';
                    } else {
                        echo 'on '.$task->c_date;
                    }
                    ?>
                    
                </div>
                <div class="col-xs-2 hidden-sm hidden-md hidden-lg" style="margin-left: -25px; margin-top: 5px">
                    <button class="btn btn-xs btn-success">Complete</button>
                </div>
                <div class="hidden-xs col-sm-2" style="margin-top: 5px">
                    <button class="btn btn-success">Complete</button>
                </div>
            </div>
        </div>
    </div>
    
<?php } ?>

</div>