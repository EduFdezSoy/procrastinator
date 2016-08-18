<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Name:  Procrastinator Model
*
* Author:  Eduardo Fernandez
* 		   edufdezsoy@gmail.com
*	  	   @EduFdezSoy
*
*
* Location: http://github.com/edufdezsoy/procrastinator
*/

class PR_model extends CI_Model
{
	public function pr_tasks()
	{
           $this->db->select('tasks.id, tasks.task, tasks.date, tasks.colour, tasks.tab_id, u2.username, u2.first_name, u2.last_name');
           $this->db->from('tasks');
           $this->db->join('users u2', 'tasks.user_id = u2.id', 'left');
           $this->db->where('tasks.status = 0');
           $sql = $this->db->get();
           $result = $sql->result();
           return $result;
	}
}