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
		// we need to check the user, will do it tomorrow
		$new_task_user 	= "1";
		
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

		// we need to check the user, will do it tomorrow
		$user = "1";
		
		// we may send it in the order of the db
		$this->dowithtask_model->complete_task(
			$task_id,
			$user
		);
		
		// now, redirect to main page
		redirect('/procrastinator');
	}
}
