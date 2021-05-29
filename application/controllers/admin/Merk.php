<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Merk extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_merk', 'mp');
		$this->load->model('Model_unv', 'mv');
	}
	public function index()
	{
		$data_kirim = array(
			'data' => $this->mp->ambil_data(),
		);
		$this->template->load('template', 'admin/merk/data', $data_kirim);
	}

	public function tambah()
	{
		if ($this->input->post()) {
			$this->form_validation->set_rules('nama_merk', 'nama_merk', 'required');
			if ($this->form_validation->run()) {
				$data = array(
					'nama_merk' 			=> strtoupper($this->input->post('nama_merk')),
				);
				if ($this->mp->simpan_data($data)) {
					$session['berhasil'] = "Data merk Berhasil Disimpan";
					$this->session->set_userdata($session);
					redirect('admin/merk');
				} else {
					alerterror('Data gagal disimpan');
					redirect('admin/merk/tambah');
				}
			} else {
				alerterror('Data gagal disimpan');
				redirect('admin/merk/tambah');
			}
		} else {
			$data_kirim = array(
				'data_merk' => $this->mp->ambil_data(),
			);
			$this->template->load('template', 'admin/merk/data', $data_kirim);
		}
	}

	public function edit($id_merk)
	{
		$data_kirim = $this->mv->edit_data('tb_merk', 'id_merk', $id_merk)->row();
		echo json_encode($data_kirim);
	}

	public function update($id_merk)
	{
		$data = array(
			'nama_merk' 			=> strtoupper($this->input->post('nama_merk')),
		);
		$this->mv->save_edit('tb_merk', 'id_merk', $id_merk, $data);
		$session['berhasil'] = "Data merk Berhasil Diedit";
		$this->session->set_userdata($session);
		redirect('admin/merk');
	}

	public function hapus($id_merk)
	{
		$this->mv->delete_data('tb_merk', 'id_merk', $id_merk);
		echo json_encode(array('status' => TRUE));
	}
}
