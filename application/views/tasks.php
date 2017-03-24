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
                <span id="task-color" data-color="<?=$task->colour?>" class="task-icon" style="color: #<?=$task->colour?>"></span>
                <span id="task-text" class="task-text"><?=$task->task?></span>
            </div>
            <!-- Bottom, task date, button.. -->
            <div class="task-bot">
                <div class="task-by">
                    By <span title="<?=$task->first_name?> <?=$task->last_name?>"><b><?=$task->username?></b></span> on <?=$date?>
                </div>
                <div class="taks-btn-xs">
                    <button type="button" class="task-mini-btn" onclick="completeTask('<?=$task->id?>')">Complete</button>
                    <button type="button" class="edit-mini-btn" data-toggle="modal" data-target="#editTask" onclick="catchAll(<?=$task->id?>)">Edit</button>
                </div>
                <div class="taks-btn-div">
                    <button type="button" class="task-btn" onclick="completeTask('<?=$task->id?>')">Complete</button>
                    <button type="button" class="edit-btn" data-toggle="modal" data-target="#editTask" onclick="catchAll('<?=$task->id?>')">Edit</button>
                </div>
            </div>
        </div> <!-- Task container -->

    <?php } ?>