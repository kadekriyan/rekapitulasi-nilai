<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ModelMataKuliah extends CI_Model
{
    public function getUsers()
    {
        return "Kadek Riyan";
    }

    public function getAll($dosen_id)
    {
        $this->db->select('mk.*, COUNT(mmk.mahasiswa_id) AS jumlah_mahasiswa');
        $this->db->from('mata_kuliah mk');
        $this->db->join('mata_kuliah_mahasiswa mmk', 'mk.id = mmk.mata_kuliah_id', 'inner');
        $this->db->where('mk.dosen_id', $dosen_id);
        $this->db->group_by('mk.nama');

        $query = $this->db->get();

        return $query->result();
    }
    public function detailMataKuliah($mata_kuliah_id)
    {
        $query = $this->db->get_where('mata_kuliah', ['id' => $mata_kuliah_id]);
        return $query->result();
    }
}