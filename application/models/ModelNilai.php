<?php

defined("BASEPATH") or exit("No direct script access allowed");

class ModelNilai extends CI_Model
{

    public function getNilaiByType($mahasiswa_id, $mata_kuliah_id)
    {
        $type = array('diskusi', 'praktikum', 'responsi', 'uts', 'uas');
        $data = array();

        foreach ($type as $t) {
            $this->db->select('m.nama, mk.nama AS mata_kuliah, n.nilai, n.type, n.keterangan, n.id');
            $this->db->from('nilai_mata_kuliah_mahasiswa n');
            $this->db->join('mahasiswa m', 'n.id_mahasiswa = m.id');
            $this->db->join('mata_kuliah mk', 'n.id_mata_kuliah = mk.id');
            $this->db->where('m.id', $mahasiswa_id);
            $this->db->where('mk.id', $mata_kuliah_id);
            $this->db->where('n.type', $t);
            $query = $this->db->get();
            $result = $query->result_array();

            $data[$t] = !empty($result) ? $result : [];
        }

        return $data;

    }

}
?>