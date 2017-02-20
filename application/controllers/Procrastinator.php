<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Procrstinator extends CI_Controller {

	public function index()
	{
		$this->load->view('partials/header');
        $this->load->view('main');
        $this->load->view('partials/footer');
	}
}
