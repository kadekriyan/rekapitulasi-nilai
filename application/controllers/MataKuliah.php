<?php

defined('BASEPATH') or exit('No direct script access allowed');

class MataKuliah extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelMataKuliah');
    }

    public function index()
    {
        if (!$this->session->userdata('dosen_id')) {
            redirect('login');
        }
        // $this->load->view('dosen/dashboard');
        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('pages/dashboard/index');
        $this->load->view('layouts/footer');
    }

    public function login()
    {
        $this->load->view('pages/login');
    }

}