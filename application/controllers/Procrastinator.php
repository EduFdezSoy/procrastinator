<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Procrastinator extends CI_Controller {

	// load index page (page where task are showns)
	public function index()
	{
		// load model
		$this->load->model('pr_model');

		// catch tabs from the model and asign it to data['tabs']
		$this->data['tabs'] = $this->pr_model->pr_tabs();

		// load header (<head>, menu and some css+js)
		$this->load->view('partials/header');
		// load the tabs for the tasks
		$this->load->view('tabs', $this->data);
		// main, this file only have an AJAX script to load the tasks
        $this->load->view('main');
		// footer, footer of the page, js and other css that do not require to be loaded at start
        $this->load->view('partials/footer');
	}
}