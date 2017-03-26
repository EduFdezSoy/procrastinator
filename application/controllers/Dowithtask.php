<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dowithtask extends CI_Controller {

	public function index()
	{

	echo "what are you doing here?";

	}

	public function add()
	{

		// check if user is login in
		if (!$this->ion_auth->logged_in())
		{
			redirect('auth/login');
		}

		// loads the model we are going to use
		$this->load->model('dowithtask_model');

		// asign data to vars
		$new_task 		= $this->input->post('task');
		$new_task_color = $this->input->post('color');
		$new_task_tab 	= $this->input->post('tab');
		// catch the current user id
		$new_task_user = isset($new_task_user) ? $new_task_user : $this->session->userdata('user_id');

		// we may send it in the order of the db
		$this->dowithtask_model->add_task(
			$new_task_user,
			$new_task,
			$new_task_tab,
			$new_task_color
		);

		// show OK message
		echo 'OK';
	}

	public function complete()
	{

		// check if user is login in
		if (!$this->ion_auth->logged_in())
		{
			redirect('auth/login');
		}

		// loads the model we are going to use
		$this->load->model('dowithtask_model');

		// get "task_id" from url to determinate what to do
		$task_id = $this->uri->segment(3);

		// check get value is an int
		if( ! filter_var($task_id, FILTER_VALIDATE_INT) ){
			redirect('/procrastinator/whatareyoutrying');
		}

		// catch the current user id
		$user = isset($user) ? $user : $this->session->userdata('user_id');

		// we may send it in the order of the db
		$this->dowithtask_model->complete_task(
			$task_id,
			$user
		);

		// show OK message
		echo 'OK';

	}

	public function undo()
	{

		// check if user is login in
		if (!$this->ion_auth->logged_in())
		{
			redirect('auth/login');
		}

		// loads the model we are going to use
		$this->load->model('dowithtask_model');

		// get "task_id" from url to determinate what to do
		$task_id = $this->uri->segment(3);

		// check get value is an int
		if( ! filter_var($task_id, FILTER_VALIDATE_INT) ){
			redirect('/procrastinator/whatareyoutrying');
		}

		// we may send it in the order of the db
		$this->dowithtask_model->undo_task(
			$task_id
		);

		// show OK message
		echo 'OK';

	}

	public function edit()
	{

		/*
		* que solo el creador de la tarea y admin pueda editar las propias tareas
		* meter una opcion que permita a todos editar o solo a los de arriba
		* $all_edit = 1 lo permitirá, 0 lo restringirá
		*/

		// check if user is login in
		if (!$this->ion_auth->logged_in())
		{
			redirect('auth/login');
		}

		// asign data to vars
		$all_edit	= 1;
		$task_id	= $this->input->post('id');
		$task		= $this->input->post('task');
		$task_color	= $this->input->post('color');
		$task_tab	= $this->input->post('tab');

		// catch the current user id
		$edit_user = isset($edit_user) ? $edit_user : $this->session->userdata('user_id');

		// check if we permit all users to edit
		// or if the user that created the task is the same that the editor 
		// or if the editor is an admin
		if ($all_edit == 1 OR $edit_user == $task_user OR $this->ion_auth->is_admin())
		{
			// loads the model we are going to use
			$this->load->model('dowithtask_model');

			// we may send it in the order of the db
			$this->dowithtask_model->edit_task(
				$task_id,
				$task,
				$task_tab,
				$task_color
			);

			// show OK message
			echo 'OK';
		}
		else // if we dont permit the user to edit
		{
			echo 'You don\'t have permissions to edit that';
		}
	}
}
