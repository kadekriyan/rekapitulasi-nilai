<?php

defined("BASEPATH") or exit("No direct script access allowed");

class ModelDosen extends CI_Model
{

    public function check_login($nik, $password)
    {
        $this->db->where('nik', $nik);
        $this->db->where('password', md5($password));
        $query = $this->db->get('dosen');

        if ($query->num_rows() == 1) {
            return $query->row();
        } else {
            return false;
        }
    }

}
?>