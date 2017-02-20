<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Name:  Procrastinator Ajax Model
*
* Author:  Eduardo Fernandez
* 		   edufdezsoy@gmail.com
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

	public function pr_tasks()
	{
           $this->db->select('tasks.id, tasks.task, tasks.date, tasks.colour, tasks.tab_id, u2.username, u2.first_name, u2.last_name, task.priority');
           $this->db->from('tasks');
           $this->db->join('users u2', 'tasks.user_id = u2.id', 'left');
           $this->db->where('tasks.status = 0');
           $sql = $this->db->get();
           $result = $sql->result();
           return $result;
	}
}