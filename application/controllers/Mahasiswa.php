<?php

defined('BASEPATH') or exit('No direct script access allowed');

class MataKuliah extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelMahasiswa');
        $this->load->model('ModelMataKuliah');
    }

    public function index()
    {
        if (!$this->session->userdata('dosen_id')) {
            redirect('login');
        }
        $data['mahasiswa'] = $this->ModelMahasiswa->getAll();
        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('pages/dashboard/mahasiswa', $data);
        $this->load->view('layouts/footer');
    }

    // public function login()
    // {
    //     $this->load->view('pages/login');
    // }

}