<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelDosen');
        $this->load->model('ModelMataKuliah');
    }

    public function index()
    {
        if (!$this->session->userdata('dosen_id')) {
            redirect('login');
        }

        $dosen_id = $this->session->userdata('dosen_id');
        $mata_kuliah = $this->ModelMataKuliah->getAll($dosen_id);
        $data['mata_kuliah'] = $mata_kuliah;

        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('pages/dashboard/index', $data);
        $this->load->view('layouts/footer');
    }

    public function login()
    {
        $this->load->view('pages/login');
    }



}