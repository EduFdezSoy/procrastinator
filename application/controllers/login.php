<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->library('ion_auth');
	}

    public function index()
    {
        $this->load->view('welcome_message');
    }

    public function login()
    {
        echo 'Formulario de login y eso';
    }

    public function logout()
    {
        echo 'aqui haremos logout y de vuelta al index';
    }
}
