<?php
// Copyright (c) 2016 - 2017, Eduardo Fernández

     foreach ($tasks as $task) { 

        // change time and date to only date in the format we want
        $date = date($dateformat, strtotime($task->date));
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
                    By <span title="<?=$task->first_name?> <?=$task->last_name?>"><b><?=$task->username?></b></span> on <?=$date?>
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