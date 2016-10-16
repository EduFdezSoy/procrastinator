<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class PR_Controller extends CI_Controller {
 
    protected $data = array();
    function __construct()
    {
        parent::__construct();
        $this->data['page_title'] = 'Procrastinator';
        $this->data['page_description'] = 'Stop Wasting Time';
        $this->data['before_closing_head'] = '';
        $this->data['before_closing_body'] = '';
    }
 
    protected function render($the_view = NULL, $template = 'public_master')
    {
        if($template == 'json' || $this->input->is_ajax_request())
        {
            header('Content-Type: application/json');
            echo json_encode($this->data);
        }
        elseif(is_null($template))
        {
            $this->load->view($the_view,$this->data);
        }
        else
        {
            $this->data['the_view_content'] = (is_null($the_view)) ? '' : $this->load->view($the_view, $this->data, TRUE);
            $this->load->view('templates/' . $template . '_view', $this->data);
        }
    }
}

class Auth_Controller extends PR_Controller {
    function __construct() {
        parent::__construct();
        $this->load->library('ion_auth');
        if($this->ion_auth->logged_in()===FALSE)
        {
            redirect('auth/login');
        }
    }
    protected function render($the_view = NULL, $template = 'auth_master')
    {
        parent::render($the_view, $template);
    }
}