<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LoginController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model');
    }


    public function index()
    {
        $this->load->view('loginView');
        $this->load->helper('url');
    }
}
