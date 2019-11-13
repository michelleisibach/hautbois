<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HomeController extends CI_Controller
{
   function __construct()
   {
       parent:: __construct();
       $this->load->database();
       $this->load->model('Home_model');
   }

   public function index(){
       $this->data['movies'] = $this->Home_model->getMovies();
       $this->load->view('homeView', $this->data);
   }
}
