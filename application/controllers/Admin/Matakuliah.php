<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

session_start();
class Matakuliah extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Admin/M_Matakuliah','',TRUE);
        if ($this->session->userdata('id_user')=="" | 
            $this->session->userdata('level')=="dosen" |
            $this->session->userdata('level')=="mahasiswa" ) {
            redirect('welcome');
        }
    }

	function index()
	{
		$data=array(
			'matakuliahh' => 'active',
			'matakuliah' => $this->M_Matakuliah->lihat(),
		);
		$this->template->displayy('admin/matakuliah/v_matakuliah',$data);	
	}

	function tambah()
	{
		$data=array(
			'matakuliahh' => 'active',
			'id_matakuliah' => $this->M_Matakuliah->id_akhir(),
		);
		$this->template->displayy('admin/matakuliah/v_matakuliah_tambah',$data);
	}

	function input()
	{
		$data = array(
			'id_matakuliah' => $this->input->post('id_matakuliah'),
			'nama_matakuliah' => $this->input->post('nama_matakuliah'),
		);

		$this->M_Matakuliah->input($data);
		$this->index();
	}

	function edit($id_matakuliah)
	{
		$data=array(
			'matakuliahh' => 'active',
			'matakuliah' => $this->M_Matakuliah->edit($id_matakuliah),
		);

		$this->template->displayy('admin/matakuliah/v_matakuliah_edit',$data);
	}

	function update()
	{
		$id_matakuliah['id_matakuliah'] = $this->input->post('id_matakuliah');
		$data = array(
			'nama_matakuliah' =>	$this->input->post('nama_matakuliah'),
		);

		$this->M_Matakuliah->update($data,$id_matakuliah);
		$this->index();	
	}

	function hapus($id_matakuliah)
	{
		$this->M_Matakuliah->hapus($id_matakuliah);
		$this->index();
	}
	
}