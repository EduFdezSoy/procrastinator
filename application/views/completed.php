<?php
// Copyright (c) 2016 - 2017, Eduardo Fernández

     foreach ($tasks as $task) { 

        // change time and date to only date in the format we want
        $date = date($dateformat, strtotime($task->date));
        $c_date = date($dateformat, strtotime($task->c_date));
    ?>

        <!-- Task container -->
        <div class="task-container" id="<?=$task->id?>">
            <!-- Top, task -->
            <div class="task-top">
                <span class="task-icon" style="color: #<?=$task->colour?>"></span>
                <span class="task-text"><?=$task->task?></span>
            </div>
            <!-- Bottom, task date, button.. -->
            <div class="task-bot">
                <div class="task-by">
                    By <span title="<?=$task->u1first_name?> <?=$task->u1last_name?>"><b><?=$task->u1username?></b></span> on <?=$date?>, 
                    completed by <span title="<?=$task->u2first_name?> <?=$task->u2last_name?>"><b><?=$task->u2username?></b></span> on <?=$c_date?>
                </div>
                <div class="taks-btn-xs">
                    <a href="dowithtask/undo/<?=$task->id?>" class="task-completed-mini-btn">Undo</a>
                </div>
                <div class="taks-btn-div">
                    <a href="dowithtask/undo/<?=$task->id?>" class="task-completed-btn">Undo</a>
                </div>
            </div>
        </div> <!-- Task container -->

    <?php } ?>