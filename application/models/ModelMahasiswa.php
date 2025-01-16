<?php

defined("BASEPATH") or exit("No direct script access allowed");

class ModelMahasiswa extends CI_Model
{

    public function getAll()
    {
        $this->db->select('*');
        $this->db->from('mahasiswa');

        $query = $this->db->get();

        return $query->result();
    }

}
?>