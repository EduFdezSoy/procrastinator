<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Procrastinator extends CI_Controller {

	// load index page (page where task are showns)
	public function index()
	{

		// check if user is login in
		if (!$this->ion_auth->logged_in())
		{
			redirect('auth/login');
		}

		// load model
		$this->load->model('pr_model');

		// catch tabs from the model and asign it to data['tabs']
		$this->data['tabs'] = $this->pr_model->pr_tabs();

		// load header (<head>, menu and some css+js)
		$this->load->view('partials/header');
		// load the tabs for the tasks
		$this->load->view('partials/tabs', $this->data);
		// main, this file only have an AJAX script to load the tasks
		$this->load->view('main');
		// load the modals to create and edit tasks
		$this->load->view('partials/modals', $this->data);
		// footer, footer of the page, js and other css that do not require to be loaded at start
		$this->load->view('partials/footer');
	}

	// this page is shown when you try to do stranger things
	public function whatareyoutrying()
	{

		// check if user is login in
		if (!$this->ion_auth->logged_in())
		{
			redirect('auth/login');
		}

		$this->load->view('errors/wrutrying');
	}

	// redirect to auth/logout and, obiously, logout
	public function logout()
	{

		// check if user is login in
		if (!$this->ion_auth->logged_in())
		{
			redirect('auth/login');
		}

		redirect('/auth/logout');
	}
}