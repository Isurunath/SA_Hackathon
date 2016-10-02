<?php

/**
 * Created by PhpStorm.
 * User: viran pravinda
 * Date: 10/1/2016
 * Time: 12:47 PM
 */
class reserveController extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->model('reserveModel');
    }

    function edit_content()
    {
        /*$data   = array();
        $this->load->model('reserveModel');
        $this->load->helper('url');
        $data['result'] = $this->reserveModel->get_contents();
        $this->load->view('reserve/reserve', $data);*/

        $this->data['posts'] = $this->reserveModel->get_contents();
        $this->load->view('reserve/reserve', $this->data);
    }
}