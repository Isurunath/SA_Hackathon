<?php
class updateController extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('updateModel');
    }
    function show_user_id() {
        $id = $this->uri->segment(3);
        $data['students'] = $this->updateModel->show_users();
        $data['single_student'] = $this->updateModel->show_user_id($id);
        $this->load->view('reserve/update', $data);
    }

    function update_user_id1() {
        $id= $this->input->post('did');
        $data = array(
            'Student_Name' => $this->input->post('dname'),
            'Student_Email' => $this->input->post('demail'),
            'Student_Mobile' => $this->input->post('dmobile'),
            'Student_Address' => $this->input->post('daddress')
        );
        $this->update_model->update_user_id1($id,$data);
        $this->show_user_id();
    }
}
?>