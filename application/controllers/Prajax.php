<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prajax extends CI_Controller {

	public function index()
	{

		redirect('/procrastinator/whatareyoutrying');

	}

	public function tasks()
	{
		
		// check if user is login in
		if (!$this->ion_auth->logged_in())
		{
			redirect('auth/login');
		}
		
		// load model
		$this->load->model('prajax_model');
		
		// get "f" from url to determinate what to do
		// parse_str(substr(strrchr($_SERVER['REQUEST_URI'], "?"), 1), $_GET);
		// $tab = $_GET['f'];
		$tab = $this->uri->segment(3);
		echo "$tab";
		// check if it is 0
		if ($tab == 0) {

			// do pr_completed_tasks() from prajax model and store in data['tasks']
			$this->data['tasks'] 		= $this->prajax_model->pr_completed_tasks();
			$this->data['dateformat'] 	= 'j \o\f F, Y';

			// load the view tasks
			$this->load->view('tasks', $this->data);

		// check if get value is an INT
		} elseif ( ! filter_var($tab, FILTER_VALIDATE_INT) ) {

			// if its not an INT redirect to "what are you trying?"
			redirect('/procrastinator/whatareyoutrying');

		// if it is an INT, finally, we do this
		} else {

		// do pr_tasks() from prajax model and store in data['tasks']
		$this->data['tasks'] 		= $this->prajax_model->pr_tasks($tab);
		$this->data['dateformat'] 	= 'l, j \o\f F';

		// load the view tasks
		$this->load->view('tasks', $this->data);

		}
	}
}