<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dowithtask extends CI_Controller {

	public function index()
	{
		// catch "do" to know what we are going to do with the info
		// Posible values are ADD, COMPLETE, EDIT and DEL
		$do = $this->input->post('do');
		
		// loads the model we are going to use
		$this->load->model('dowithtask_model');

		if ($do == "ADD") {

			$new_task = $this->input->post('task');
			$new_task_color = $this->input->post('color');
			$new_task_tab = $this->input->post('tab');
			// we need to check the user, will do it tomorrow
			$new_task_user = "1";
			
			// we may send it in the order of the db
			$this->dowithtask_model->add_task($new_task_user, $new_task, $new_task_tab, $new_task_color);

		} elseif ($do == "COMPLETE") {

			$tabs = $this->input->post('id');

		} elseif ($do == "EDIT") {

			$tabs = $this->input->post('id');

		} elseif ($do == "DEL") {

			$tabs = $this->input->post('id');

		}

	}
}
