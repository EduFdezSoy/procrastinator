<?php
// Copyright (c) 2016 - 2017, Eduardo Fernández
 ?>

    <?php foreach ($tasks as $task) { ?>
    
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
                    By <span title="<?=$task->first_name?> <?=$task->last_name?>"><b><?=$task->username?></b></span> on <?=$task->date?>
                </div>
                <div class="taks-btn-xs">
                    <button class="task-mini-btn">Complete</button>
                </div>
                <div class="taks-btn-div">
                    <button class="task-btn">Complete</button>
                </div>
            </div>
        </div> <!-- Task container -->
        
    <?php } ?>
    <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>