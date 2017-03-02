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

    // pr_tabs: load tabs to order the tasks
	public function pr_tabs()
	{
            // catch the data from the db and store into $result, then return $result
           $this->db->select('tabs.id, tabs.order, tabs.name');
           $this->db->from('tabs');
           $sql = $this->db->get();
           $result = $sql->result();
           return $result;
	}
}