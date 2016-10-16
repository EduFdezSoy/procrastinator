<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends PR_Controller {

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
        $this->data['message'] = 'aquí irá el login form';
        $this->render('auth/login');
    }

    public function logout()
    {
        echo 'aqui haremos logout y de vuelta al index';
    }
}
