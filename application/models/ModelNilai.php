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

    public function addNilai($data)
    {
        if ($this->db->insert('nilai_mata_kuliah_mahasiswa', $data)) {
            return true;

        } else {
            return false;
        }
    }
    public function editNilai($data)
    {
        $this->db->set('nilai', $data['nilai']);
        $this->db->set('keterangan', $data['keterangan']);
        $this->db->where('id', $data['nilai_id']);

        echo ($data->nilai);

        if ($this->db->update('nilai_mata_kuliah_mahasiswa')) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteNilai($data)
    {
        $this->db->where('id', $data);
        if ($this->db->delete('nilai_mata_kuliah_mahasiswa')) {
            return true;
        } else {
            return false;
        }
    }

}
?>