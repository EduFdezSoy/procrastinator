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
        
        public function pr_completed_tasks()
	{
           $this->db->select('completed_tasks.task_id, tasks.task, completed_tasks.date c_date, tasks.date, tasks.colour, u1.username u1username, u1.first_name u1first_name, u1.last_name u1last_name, u2.username u2username, u2.first_name u2first_name, u2.last_name u2last_name');
           $this->db->from('completed_tasks');
           $this->db->join('tasks', 'completed_tasks.task_id = tasks.id', 'left');
           $this->db->join('users u1', 'completed_tasks.user_id = u1.id', 'left');
           $this->db->join('users u2', 'tasks.user_id = u2.id', 'left');
           $this->db->where('tasks.status = 1');
           $sql = $this->db->get();
           $result = $sql->result();
           return $result;
	}
}