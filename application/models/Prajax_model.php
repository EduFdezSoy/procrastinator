<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Name:  Procrastinator Ajax Model
*
* Author:  Eduardo Fernandez
*          yo@edufdezsoy.es
*          @EduFdezSoy
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
           $this->db->select('tasks.id,
                             tasks.task,
                             tasks.date,
                             tasks.colour,
                             tasks.tab_id,
                             u2.username,
                             u2.first_name,
                             u2.last_name,
                             tasks.priority');
           $this->db->from('tasks');
           $this->db->join('users u2', 'tasks.user_id = u2.id', 'left');
           $this->db->where('tasks.status = 0');
           $this->db->where('tasks.tab_id',$tab);
           $sql = $this->db->get();
           $result = $sql->result();
           return $result;
    }
    // pr_completed_tasks: load completed tasks
    public function pr_completed_tasks()
    {
            // catch the data from the db and store into $result, then return $result
           $this->db->select('completed_tasks.task_id id,
                             tasks.colour,
                             tasks.task,
                             completed_tasks.date c_date,
                             tasks.date,
                             u1.username u1username,
                             u1.first_name u1first_name,
                             u1.last_name u1last_name,
                             u2.username u2username,
                             u2.first_name u2first_name,
                             u2.last_name u2last_name');
           $this->db->from('completed_tasks');
           $this->db->join('tasks', 'completed_tasks.task_id = tasks.id', 'left');
           $this->db->join('users u1', 'completed_tasks.user_id = u1.id', 'left');
           $this->db->join('users u2', 'tasks.user_id = u2.id', 'left');
           $this->db->where('tasks.status = 1');
           $this->db->order_by('c_date', 'desc');
           $sql = $this->db->get();
           $result = $sql->result();
           return $result;
    }
}