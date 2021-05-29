<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_merk', 'mp');
        $this->load->model('Model_barang', 'mb');
    }
    public function index()
    {
        $kirim = [
            'merk' => $this->mp->ambil_data(),
            'barang' => $this->mb->ambil_data(),
        ];
        $this->template->load('pengguna/template', 'pengguna/barang/data', $kirim);
    }
}
