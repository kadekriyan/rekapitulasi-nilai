<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelDosen');
        $this->load->model('ModelMataKuliah');
        $this->load->model('ModelMahasiswa');
        $this->load->model('ModelNilai');
    }

    public function index()
    {
        if (!$this->session->userdata('dosen_id')) {
            redirect('login');
        }

        $dosen_id = $this->session->userdata('dosen_id');
        $mata_kuliah = $this->ModelMataKuliah->getAll($dosen_id);
        $data_matakuliah['mata_kuliah'] = $mata_kuliah;

        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar', $data_matakuliah);
        $this->load->view('pages/dashboard/index', $data_matakuliah);
        $this->load->view('layouts/footer');
    }

    public function login()
    {
        $this->load->view('pages/login');
    }

    public function mahasiswa()
    {
        if (!$this->session->userdata('dosen_id')) {
            redirect('login');
        }
        $dosen_id = $this->session->userdata('dosen_id');
        $mata_kuliah = $this->ModelMataKuliah->getAll($dosen_id);
        $data_matakuliah['mata_kuliah'] = $mata_kuliah;

        $mahasiswa = $this->ModelMahasiswa->getAll();
        $data_mahasiswa['mahasiswa'] = $mahasiswa;

        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar', $data_matakuliah);
        $this->load->view('pages/dashboard/mahasiswa', $data_mahasiswa);
        $this->load->view('layouts/footer');
    }

    public function mata_kuliah($dosen_id, $mata_kuliah_id)
    {
        if (!$this->session->userdata('dosen_id')) {
            redirect('login');
        }
        $dosen_id = $this->session->userdata('dosen_id');
        $mata_kuliah = $this->ModelMataKuliah->getAll($dosen_id);
        $data_matakuliah['mata_kuliah'] = $mata_kuliah;
        $detail_matakuliah = $this->ModelMataKuliah->detailMataKuliah($mata_kuliah_id);

        $mahasiswa = $this->ModelMahasiswa->getMahasiswaByMataKuliah($mata_kuliah_id);

        $data_page_matakuliah = array(
            "detail_mata_kuliah" => $detail_matakuliah,
            "data_mahasiswa" => $mahasiswa
        );

        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar', $data_matakuliah);
        $this->load->view('pages/dashboard/mata_kuliah', $data_page_matakuliah);
        $this->load->view('layouts/footer');
    }

    public function detail_nilai_mahasiswa($mata_kuliah_id, $mahasiswa_id)
    {
        if (!$this->session->userdata('dosen_id')) {
            redirect('login');
        }
        $dosen_id = $this->session->userdata('dosen_id');
        $mata_kuliah = $this->ModelMataKuliah->getAll($dosen_id);
        $data_matakuliah['mata_kuliah'] = $mata_kuliah;
        $detail_matakuliah = $this->ModelMataKuliah->detailMataKuliah($mata_kuliah_id);
        $detail_mahasiswa = $this->ModelMahasiswa->detailMahasiswa($mahasiswa_id);
        $detail_nilai_mahasiswa = $this->ModelNilai->getNilaiByType($mahasiswa_id, $mata_kuliah_id);


        $data_page_detail_nilai = array(
            "detail_mata_kuliah" => $detail_matakuliah,
            "detail_mahasiswa" => $detail_mahasiswa,
            "detail_nilai_mahasiswa" => $detail_nilai_mahasiswa
        );

        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar', $data_matakuliah);
        $this->load->view('pages/dashboard/nilai', $data_page_detail_nilai);
        $this->load->view('layouts/footer');
    }


}