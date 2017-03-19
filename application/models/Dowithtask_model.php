<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
*
* Name:		Dowithtask Model
*
* Author:	Eduardo Fernandez
*			yo@edufdezsoy.es
*			@EduFdezSoy
*
*
* Location:	http://github.com/edufdezsoy/procrastinator
*/

class Dowithtask_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	// add_task: add a new task into db
	public function add_task($user, $task, $tab, $color)
	{
		// get date and time
		$timedate = date ('Y\-m\-d G\-i\-s');

		// remove the # from the color code
		$color = str_replace("#", "", $color);

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

	// complete_task: complete a task and insert "completed" new data
	public function complete_task($id, $user)
	{
		// get date and time
		$timedate = date ('Y\-m\-d G\-i\-s');

		// update task table, change status to "1" (completed)
		$data = array('status' => 1);
		$this->db->where('id', $id);
		$this->db->update('tasks', $data);

		// insert "completed" info into table
		$data = array(
			'task_id' => $id,
			'user_id' => $user,
			'date' => $timedate
		);

		$this->db->insert('completed_tasks', $data);
	}

	// undo_task: undo a task and delete "completed" data
	public function undo_task($id)
	{
		// get date and time
		$timedate = date ('Y\-m\-d G\-i\-s');

		// update task table, change status to "0" (incompleted)
		$data = array('status' => 0);
		$this->db->where('id', $id);
		$this->db->update('tasks', $data);

		// remove "completed" info from table
		$this->db->where('task_id', $id);
		$this->db->delete('completed_tasks');
	}

	// edit_task: edit a task
	public function edit_task($id, $task, $tab, $color)
	{
		// remove the # from the color code
		$color = str_replace("#", "", $color);

		// edit the task from the table
		$data = array(
			'task'		=> $task,
			'tab_id'	=> $tab,
			'date'		=> $timedate,
			'colour'	=> $color
		);
		$this->db->where('id', $id)
		$this->db->update('tasks', $data);
	}
}