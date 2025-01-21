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
                "id_mahasiswa" => htmlspecialchars($this->input->post('mahasiswa_id')),
                "id_mata_kuliah" => htmlspecialchars($this->input->post('mata_kuliah_id')),
                "nilai" => htmlspecialchars($this->input->post('nilai')),
                "keterangan" => htmlspecialchars($this->input->post('keterangan')),
                "type" => htmlspecialchars($this->input->post('type'))
            );
            $addNilai = $this->ModelNilai->addNilai($data);

            if (!$addNilai) {
                $this->session->set_flashdata('gagal', 'Data gagal ditambahkan');
                redirect('dashboard/mata-kuliah/mahasiswa/nilai/' . $mata_kuliah_id . '/' . $mahasiswa_id);
            }
            $this->session->set_flashdata('sukses', 'Data berhasil ditambahkan');
            redirect('dashboard/mata-kuliah/mahasiswa/nilai/' . $mata_kuliah_id . '/' . $mahasiswa_id);
        }
    }
    public function editNilai()
    {
        $this->form_validation->set_rules('mahasiswa_id', 'Mahasiswa_Id', 'required');
        $this->form_validation->set_rules('mata_kuliah_id', 'Mata_Kuliah_Id', 'required');
        $this->form_validation->set_rules('nilai_id', 'Nilai_Id', 'required');
        $this->form_validation->set_rules('nilai', 'Nilai', 'required');

        $mata_kuliah_id = $this->input->post('mata_kuliah_id');
        $mahasiswa_id = $this->input->post('mahasiswa_id');

        if ($this->form_validation->run() == FALSE) {
            return redirect('dashboard/mata-kuliah/mahasiswa/nilai/' . $mata_kuliah_id . '/' . $mahasiswa_id);
        } else {
            $data = array(
                "nilai_id" => htmlspecialchars($this->input->post('nilai_id')),
                "nilai" => htmlspecialchars($this->input->post('nilai')),
                "keterangan" => htmlspecialchars($this->input->post('keterangan')),
            );

            $editNilai = $this->ModelNilai->editNilai($data);

            if (!$editNilai) {
                $this->session->set_flashdata('gagal', 'Data gagal diperbarui');
                redirect('dashboard/mata-kuliah/mahasiswa/nilai/' . $mata_kuliah_id . '/' . $mahasiswa_id);
            }
            $this->session->set_flashdata('sukses', 'Data berhasil diperbarui');
            redirect('dashboard/mata-kuliah/mahasiswa/nilai/' . $mata_kuliah_id . '/' . $mahasiswa_id);
        }
    }

    public function deleteNilai($mata_kuliah_id, $mahasiswa_id, $nilai_id)
    {
        $deleteNilai = htmlspecialchars($this->ModelNilai->deleteNilai($nilai_id));

        if (!$deleteNilai) {
            $this->session->set_flashdata('gagal', 'Data gagal dihapus');
            ;
        } else {
            $this->session->set_flashdata('sukses', 'Data berhasil dihapus');
        }

        redirect('dashboard/mata-kuliah/mahasiswa/nilai/' . $mata_kuliah_id . '/' . $mahasiswa_id);
    }

}