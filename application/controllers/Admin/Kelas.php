<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Kelas extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Admin/M_Kelas','',TRUE);
        $this->load->model('Admin/M_Jurusan','',TRUE);
        if ($this->session->userdata('id_user')=="" | 
            $this->session->userdata('level')=="dosen" |
            $this->session->userdata('level')=="mahasiswa" ) {
            redirect('welcome');
        }
    }

	function index()
	{
		$data=array(
			'kelass' => 'active',
			'kelas' => $this->M_Kelas->v_lihat(),
		);
		$this->template->displayy('admin/kelas/v_kelas',$data);	
	}

	function tambah()
	{
		$data=array(
            'title' => 'Tambah Kelas',
            'kelass' => 'active',
            'id_kelas' => $this->M_Kelas->id_akhir(),
            'jurusan' => $this->M_Jurusan->lihat(),
        );
		$this->template->displayy('admin/kelas/v_kelas_tambah',$data);
	}

	function input()
	{
		$data = array(
			'id_kelas' => $this->input->post('id_kelas'),
			'nama_kelas' => $this->input->post('nama_kelas'),
			'id_jurusan' => $this->input->post('id_jurusan'),
		);

		$this->M_Kelas->input($data);
		$this->index();

	}

	function edit($id_kelas)
	{

		$data = array(
			'kelass' => 'active',
			'kelas' => $this->M_Kelas->edit($id_kelas),
			'jurusan' => $this->M_Jurusan->lihat(),
		);

		$this->template->displayy('admin/kelas/v_kelas_edit',$data);	

	}

	function update()
	{
		$id_kelas['id_kelas'] = $this->input->post('id_kelas');
		$data = array(
			'nama_kelas' =>	$this->input->post('nama_kelas'),
			'id_jurusan' =>	$this->input->post('id_jurusan'),
		);

		$this->M_Kelas->update($data,$id_kelas);
		$this->index();	
	}

	function hapus($id_kelas)
	{
		$this->M_Kelas->hapus($id_kelas);
		$this->index();
	}
	
}