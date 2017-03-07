<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prajax extends CI_Controller {

	public function index()
	{
		// load model
		$this->load->model('prajax_model');
		
		// get "f" from url to determinate what to do
		parse_str(substr(strrchr($_SERVER['REQUEST_URI'], "?"), 1), $_GET);
		$func = $_GET['f'];

		// check get value is an int
		if( (! filter_var($func, FILTER_VALIDATE_INT) OR (! $func === 0) ) {
			redirect('/procrastinator/whatareyoutrying');
		}

		// load task depending of "f"
		if ($func>=1) {
			// do pr_tasks() from prajax model and store in data['tasks'], then load the view tasks
			$this->data['tasks'] = $this->prajax_model->pr_tasks($func);
			$this->data['dateformat'] = 'l, j \o\f F';
			$this->load->view('tasks', $this->data);
		} elseif ($func==0) {
			// do pr_completed_tasks() from prajax model and store in data['tasks'], then load the view tasks
			$this->data['tasks'] = $this->prajax_model->pr_completed_tasks();
			$this->data['dateformat'] = 'j \o\f F, Y';
			$this->load->view('tasks', $this->data);
		}
	}
}