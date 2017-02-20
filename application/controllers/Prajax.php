<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prajax extends CI_Controller {

	public function index()
	{
		$this->load->model('prajax_model');

		parse_str(substr(strrchr($_SERVER['REQUEST_URI'], "?"), 1), $_GET);
		$func = $_GET['f'];

		if ($func===1) {
			$this->data['tasks'] = $this->prajax_model->pr_tasks();
		} elseif ($func===2) {
			$this->data['completed_tasks'] = $this->prajax_model->pr_tasks();
		}

		$this->data['tasks'] = $this->prajax_model->pr_tasks();
		$this->load->view('tasks', $this->data);

	}
}