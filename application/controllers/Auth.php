<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelDosen');
    }

    public function index()
    {

        if ($this->session->userdata('dosen_id')) {
            redirect('dashboard/index');
        }

        $this->load->view('pages/login');
    }

    public function process_login()
    {

        $this->form_validation->set_rules('nik', 'NIK', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('index');
        } else {
            $nik = $this->input->post('nik');
            $password = $this->input->post('password');

            $dosen = $this->ModelDosen->check_login($nik, $password);

            if ($dosen) {
                $session_data = array(
                    'dosen_id' => $dosen->id,
                    'dosen_nama' => $dosen->nama,
                    'dosen_nik' => $dosen->nik
                );
                $this->session->set_userdata($session_data);

                redirect('dashboard/index');
            } else {

                $this->session->set_flashdata('error', 'NIK atau password salah');
                redirect('login');
            }
        }
    }

    public function login()
    {
        if (!$this->session->userdata('dosen_id')) {
            redirect('login');
        }
        redirect('dashboard/index');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }


}