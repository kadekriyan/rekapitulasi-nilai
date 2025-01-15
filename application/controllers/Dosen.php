<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dosen extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('url', 'form'));
        $this->load->library('form_validation');
        $this->load->model('ModelDosen');
    }

    public function login()
    {

        if ($this->session->userdata('  ')) {
            redirect('dosen/dashboard');
        }

        $this->load->view('index');
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

                redirect('dosen/dashboard');
            } else {

                $this->session->set_flashdata('error', 'NIK atau password salah');
                redirect('index');
            }
        }
    }


    public function dashboard()
    {
        if (!$this->session->userdata('dosen_id')) {
            redirect('index');
        }
        // $this->load->view('dosen/dashboard');
        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('pages/dashboard/index');
        $this->load->view('layouts/footer');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('index');
    }
}
?>