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
        ];

        $this->load->view('pengguna/template', $kirim);
    }
    public function loadProduct()
    {
        if ($this->input->post('id')) {
            $kirim = [
                'barang' => $this->mb->ambilBarangPerKategori($this->input->post('id')),
            ];
            $this->load->view('pengguna/barang/data', $kirim);
        } else {
            $kirim = [
                'barang' => $this->mb->ambil_data(),
            ];
            $this->load->view('pengguna/barang/data', $kirim);
        }
    }
    public function cariProduct()
    {
        if ($this->input->post('val')) {
            $kirim = [
                'barang' => $this->mb->ambilBarangName($this->input->post('val')),
            ];
            $this->load->view('pengguna/barang/data', $kirim);
        }
    }
    public function loadCart()
    {
        $kirim = [
            'cart' => $this->mb->ambil_cart(),
        ];
        $this->load->view('pengguna/barang/cart', $kirim);
    }
}
