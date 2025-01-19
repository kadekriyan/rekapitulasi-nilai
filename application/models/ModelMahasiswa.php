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

    public function getMahasiswaByMataKuliah($mata_kuliah_id)
    {
        $this->db->select('mahasiswa.*, mata_kuliah.nama AS nama_mata_kuliah');
        $this->db->from('mata_kuliah_mahasiswa');
        $this->db->join('mahasiswa', 'mata_kuliah_mahasiswa.mahasiswa_id = mahasiswa.id');
        $this->db->join('mata_kuliah', 'mata_kuliah_mahasiswa.mata_kuliah_id = mata_kuliah.id');
        $this->db->where('mata_kuliah_mahasiswa.mata_kuliah_id', $mata_kuliah_id);
        $this->db->order_by('mahasiswa.nama', 'ASC');
        $query = $this->db->get();
        return $query->result();
    }

    public function detailMahasiswa($mahasiswa_id)
    {
        $query = $this->db->get_where('mahasiswa', ['id' => $mahasiswa_id]);
        return $query->result();
    }

}
?>