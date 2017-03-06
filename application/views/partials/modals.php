<?php
// Copyright (c) 2016 - 2017, Eduardo Fernández
?>

<!-- Bottom right corner button to add tasks -->
<button type="button" class="add-task-btn" data-toggle="modal" data-target="#addTask" onclick="colorGen()">+</button>

<!-- Modal for adding tasks -->
<div class="modal fade" id="addTask" tabindex="-1" role="dialog" aria-labelledby="addTasksModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h5 class="modal-title" id="addTasksModal">Create task</h5>
      </div>
      <div class="modal-body">
      <!-- form -->
        <form id="addtaskform" action="dowithtask" method="POST" name="taskform" class="form-horizontal" role="form">
            <!-- This input will say to the server what are we doing with this form -->
            <input type="hidden" value="ADD" name="do"/>
            <textarea id="addtasktextarea" rows="3" class="form-control" placeholder="task to do and blah, blah..." name="task" required autofocus autocomplete="off"></textarea>
            <div class="form-group">
                <label class="col-sm-push-2 col-xs-2 control-label">Tab</label>
                <div class="col-sm-push-2 col-xs-4">
                    <select class="form-control" name="tab" id="contenedor">

                        <?php foreach ($tabs as $tab) { ?>

                            <option value="<?=$tab->id?>"><?=$tab->name?></option>

                        <?php } ?>

                    </select> 
                </div>
                <br>
                <br>
                <div class="form-group">
                    <label class="col-xs-push-2 col-xs-2 control-label">Color</label>
                    <div class="col-xs-push-2 col-xs-7">
                      <div class="row">
                        <input id="inColor" name="color" value="#2196f3" type="color">
                        <div class="repeat-btn" onclick="colorGen()"><span class="repeat-btn-icon"></span></div>
                      </div>
                    </div>
                </div>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="eraseText()">Close</button>
        <input type="submit" form="addtaskform" value="Add task" class="btn btn-primary"/>
      </div>
    </div>
  </div>
</div>