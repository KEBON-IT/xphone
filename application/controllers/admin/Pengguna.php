<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengguna extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_pengguna', 'mp');
		$this->load->model('Model_unv', 'mv');
	}
	public function index()
	{
		$data_kirim = array(
			'data_pengguna' => $this->mp->ambil_data(),
		);
		$this->template->load('template', 'admin/pengguna/data', $data_kirim);
	}

	public function tambah()
	{
		if ($this->input->post()) {
			$this->form_validation->set_rules('nama_lengkap', 'nama_lengkap', 'required');
			$this->form_validation->set_rules('username', 'username', 'required');
			$this->form_validation->set_rules('no_hp', 'no_hp', 'required');
			$this->form_validation->set_rules('alamat', 'alamat', 'required');
			if ($this->form_validation->run()) {
				$data = array(
					'username' 				=> $this->input->post('username'),
					'password' 				=> md5($this->input->post('password')),
					'no_hp' 				=> $this->input->post('no_hp'),
					'nama_lengkap' 			=> $this->input->post('nama_lengkap'),
					'alamat'				=> $this->input->post('alamat'),
					'hak_akses' 			=> '0',
				);
				if ($this->mp->simpan_data($data)) {
					$session['berhasil'] = "Data Pengguna Berhasil Disimpan";
					$this->session->set_userdata($session);
					redirect('admin/Pengguna');
				} else {
					alerterror('Data gagal disimpan');
					redirect('admin/Pengguna/tambah');
				}
			} else {
				alerterror('Data gagal disimpan');
				redirect('admin/Pengguna/tambah');
			}
		} else {
			$data_kirim = array(
				'data_pengguna' => $this->mp->ambil_data(),
			);
			$this->template->load('template', 'admin/pengguna/data', $data_kirim);
		}
	}

	public function edit($id_pengguna)
	{
		$data_kirim = $this->mv->edit_data('tb_pengguna', 'id_pengguna', $id_pengguna)->row();
		echo json_encode($data_kirim);
	}

	public function update($id_pengguna)
	{
		$data = array(
			'username' 				=> $this->input->post('username'),
			'password' 				=> md5($this->input->post('password')),
			'no_hp' 				=> $this->input->post('no_hp'),
			'nama_lengkap' 			=> $this->input->post('nama_lengkap'),
			'alamat'				=> $this->input->post('alamat'),
		);
		$this->mv->save_edit('tb_pengguna', 'id_pengguna', $id_pengguna, $data);
		$session['berhasil'] = "Data Pengguna Berhasil Diedit";
		$this->session->set_userdata($session);
		redirect('admin/Pengguna');
	}

	public function hapus($id_pengguna)
	{
		$this->mv->delete_data('tb_pengguna', 'id_pengguna', $id_pengguna);
		echo json_encode(array('status' => TRUE));
	}
}
