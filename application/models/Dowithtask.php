<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Name:  Procrastinator Model
*
* Author:  Eduardo Fernandez
* 		   yo@edufdezsoy.es
*	  	   @EduFdezSoy
*
*
* Location: http://github.com/edufdezsoy/procrastinator
*/

class Pr_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    // add_task: add a new task into db
	public function add_task($user, $task, $tab, $color)
	{
        $timedate = date ('Y\-m\-d G\-i\-s');

        // add the new task into table
        $data = array(
            'user_id' => $user,
            'task' => $task,
            'tab_id' => $tab,
            'status' => 0,
            'date' => $timedate,
            'colour' => $color
        );

        $this->db->insert('tasks', $data);
	}

    // add_task: add a new task into db
	public function complete_task($id, $user)
	{
        $timedate = date ('Y\-m\-d G\-i\-s');

        // update task table, change status to "1" (completed)
        $update = array('status' => 1);
        $this->db->where('id', $id);
        $this->db->update('tasks' $update);

        // insert "completed" info into table
        $data = array(
            'task_id' => $id,
            'user_id' => $user,
            'date' => $timedate
        );

        $this->db->insert('completed_tasks', $data);
	}
}