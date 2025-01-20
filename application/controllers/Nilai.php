<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Nilai extends CI_Controller
{
    public function addNilai()
    {
        $this->form_validation->set_rules('mahasiswa_id', 'Mahasiswa_Id', 'required');
        $this->form_validation->set_rules('mata_kuliah_id', 'Mata_Kuliah_Id', 'required');
        $this->form_validation->set_rules('nilai', 'Nilai', 'required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');
        $this->form_validation->set_rules('type', 'Type', 'required');

        $mata_kuliah_id = $this->input->post('mata_kuliah_id');
        $mahasiswa_id = $this->input->post('mahasiswa_id');

        if ($this->form_validation->run() == FALSE) {
            return redirect('dashboard/mata-kuliah/mahasiswa/nilai/' . $mata_kuliah_id . '/' . $mahasiswa_id);
        } else {
            $data = array(
                "id_mahasiswa" => $this->input->post('mahasiswa_id'),
                "id_mata_kuliah" => $this->input->post('mata_kuliah_id'),
                "nilai" => $this->input->post('nilai'),
                "keterangan" => $this->input->post('keterangan'),
                "type" => $this->input->post('type')
            );
            $addNilai = $this->ModelNilai->addNilai($data);
            $this->session->set_flashdata('success', 'Data berhasil ditambahkan');
            redirect('dashboard/mata-kuliah/mahasiswa/nilai/' . $mata_kuliah_id . '/' . $mahasiswa_id);
        }
    }
}