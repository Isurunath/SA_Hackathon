<?php

/**
 * Created by PhpStorm.
 * User: viran pravinda
 * Date: 10/2/2016
 * Time: 6:45 AM
 */
class reserveModel extends CI_Model
{
    function get_contents() {
        /*$this->db->select('*');
        $this->db->from('users');
        $query = $this->db->get();
        return $result = $query->result();*/

        $this->db->select("user_id,user_name,email");
        $this->db->from('users');
        $query = $this->db->get();
        return $query->result();
    }
}