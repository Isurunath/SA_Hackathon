<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Hello extends CI_Controller {

    public function index(){
        $this->load->helper('url');
        $this->load->view('login/new_login');
        //$this->load->view('home/home');
    }

}