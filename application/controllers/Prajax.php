<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prajax extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/prajax
	 *	- or -
	 * 		http://example.com/index.php/prajax/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/prajax/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
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
		$this->load->view('welcome_message');

	}
}