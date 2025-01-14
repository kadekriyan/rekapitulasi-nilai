<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelUsers');
    }
    public function index()
    {
        $data = $this->ModelUsers->getAll();
        $object = json_decode((json_encode($data)));
        print_r($object);
    }

}