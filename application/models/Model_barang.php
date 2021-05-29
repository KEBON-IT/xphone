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
}
