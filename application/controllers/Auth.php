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
        $this->data['title'] = 'Login';

        $this->form_validation->set_rules('identity', 'Email', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() === FALSE)
        {
            $this->render('auth/login');
        }
        else
        {
            $remember = (bool) $this->input->post('remember');
            $identity = $this->input->post('identity');
            $password = $this->input->post('password');
            
            if ($this->ion_auth->login($identity, $password, $remember))
            {
                redirect('dashboard');
            }
            else
            {
                $_SESSION['auth_message'] = $this->ion_auth->errors();
                $this->session->mark_as_flash('auth_message');
                redirect('auth/login');
            }
        }
    }

    public function logout()
    {
        echo 'aqui haremos logout y de vuelta al index';
    }
}
