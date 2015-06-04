<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Ujian extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Admin/M_Ujian','',TRUE);
        $this->load->model('Admin/M_Matakuliah','',TRUE);
        $this->load->model('Admin/M_Kelas','',TRUE);
        if ($this->session->userdata('id_user')=="" | 
            $this->session->userdata('level')=="dosen" |
            $this->session->userdata('level')=="mahasiswa" ) {
            redirect('welcome');
        }
    }

	function index()
	{
		$data = array(
			'ujiann' => 'active',
			'ujian' => $this->M_Ujian->v_lihat(),
		);
		$this->template->displayy('admin/ujian/v_ujian',$data);	
	}

	function tambah()
	{
		$data = array(
			'ujiann' => 'active',
			'matakuliah' => $this->M_Matakuliah->lihat(),
			'kelas' => $this->M_Kelas->lihat(),
		);
		$this->template->displayy('admin/ujian/v_ujian_tambah',$data);
	}

	function input()
	{
		$data = array(
			'id_ujian' => $this->input->post('id_ujian'),
			'nama_ujian' => $this->input->post('nama_ujian'),
			'id_matakuliah' => $this->input->post('id_matakuliah'),
			'id_kelas' => $this->input->post('id_kelas'),
			'tanggal' => $this->input->post('tanggal'),
			'waktu' => $this->input->post('waktu'),
		);

		$this->M_Ujian->input($data);
		$this->index();
	}

	function edit($id_ujian)
	{
		$data = array(
			'ujiann' => 'active',
			'matakuliah' => $this->M_Matakuliah->lihat(),
			'kelas' => $this->M_Kelas->lihat(),
			'ujian' => $this->M_Ujian->edit($id_ujian),
		);

		$this->template->displayy('admin/ujian/v_ujian_edit',$data);	

	}

	function update()
	{
		$id_ujian['id_ujian'] = $this->input->post('id_ujian');
		$data = array(
			'nama_ujian' =>	$this->input->post('nama_ujian'),
			'id_matakuliah' => $this->input->post('id_matakuliah'),
			'id_kelas' => $this->input->post('id_kelas'),
			'tanggal' => $this->input->post('tanggal'),
			'waktu' => $this->input->post('waktu'),
		);

		$this->M_Ujian->update($data,$id_ujian);
		$this->index();	
	}

	function hapus($id_ujian)
	{
		$this->M_Ujian->hapus($id_ujian);
		$this->index();
	}
	
}