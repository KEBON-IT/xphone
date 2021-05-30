<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Model_barang extends CI_Model
{
	public function ambil_data($id =  null)
	{
		if ($id) {
			return $this->db->get_where('tb_barang', ['id_barang' => $id]);
		} else {
			return $this->db->select('*')
				->from('tb_barang')
				->join('tb_merk', 'tb_barang.id_merk=tb_merk.id_merk')
				->get();
		}
	}
	public function ambilBarangPerKategori($id)
	{
		return $this->db->select('*')
			->from('tb_barang')
			->join('tb_merk', 'tb_barang.id_merk=tb_merk.id_merk')
			->where('tb_barang.id_merk', $id)
			->get();
	}
	public function ambilBarangName($id)
	{
		return $this->db->select('*')
			->from('tb_barang')
			->join('tb_merk', 'tb_barang.id_merk=tb_merk.id_merk')
			->like('tb_barang.nama_barang', $id, 'both')
			->get();
	}
	public function ambil_cart($id_barang = null)
	{
		return $this->db->select('tk.jumlah as jumlah, tb.nama_barang as nama_barang, tb.harga_barang as harga_barang')
			->from('tb_keranjang as tk')
			->join('tb_barang as tb', 'tk.id_barang=tb.id_barang')
			->where('tk.id_pengguna', $this->session->userdata('id_pengguna'))
			->get();
	}
}
