<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ModelUsers extends CI_Model
{
    public function getUsers()
    {
        return "Kadek Riyan";
    }

    public function getAll()
    {

        $data = array(
            array(
                "nama" => "Kadek Riyan",
                "nim" => "23.01.5056",
                "prodi" => "Teknik Informatika",
            ),
            array(
                "nama" => "Kusuma Putra",
                "nim" => "23.01.5057",
                "prodi" => "Teknik Komputer",
            ),
        );

        return $data;
    }
}