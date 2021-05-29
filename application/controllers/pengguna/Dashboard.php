<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_merk', 'mp');
    }
    public function index()
    {
        $kirim = [
            'merk' => $this->mp->ambil_data(),
        ];
        $this->template->load('pengguna/template', 'pengguna/dashboard/data', $kirim);
    }
}
