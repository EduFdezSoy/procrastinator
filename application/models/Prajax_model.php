<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Name:  Procrastinator Ajax Model
*
* Author:  Eduardo Fernandez
* 		   yo@edufdezsoy.es
*	  	   @EduFdezSoy
*
*
* Location: http://github.com/edufdezsoy/procrastinator
*/

class Prajax_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    // pr_tasks: load tasks for the main page of procrastinator
	public function pr_tasks($tab)
	{
            // catch the data from the db and store into $result, then return $result
           $this->db->select('tasks.id, tasks.task, tasks.date, tasks.colour, tasks.tab_id, u2.username, u2.first_name, u2.last_name, tasks.priority');
           $this->db->from('tasks');
           $this->db->join('users u2', 'tasks.user_id = u2.id', 'left');
           $this->db->where('tasks.status = 0 and tasks.tab_id =' $tab);
           $sql = $this->db->get();
           $result = $sql->result();
           return $result;
	}
    // pr_completed_tasks: load completed tasks
	public function pr_completed_tasks()
	{
            // catch the data from the db and store into $result, then return $result
           $this->db->select('tasks.id, tasks.task, tasks.date, tasks.colour, tasks.tab_id, u2.username, u2.first_name, u2.last_name, tasks.priority');
           $this->db->from('tasks');
           $this->db->join('users u2', 'tasks.user_id = u2.id', 'left');
           $this->db->where('tasks.status = 1');
           $sql = $this->db->get();
           $result = $sql->result();
           return $result;
	}
}