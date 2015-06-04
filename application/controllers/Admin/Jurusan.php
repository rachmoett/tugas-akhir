<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Jurusan extends CI_Controller{
    function __construct()
    {
        parent::__construct();
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
			'jurusann' => 'active',
			'jurusan' => $this->M_Jurusan->lihat(),
		);
		$this->template->displayy('admin/jurusan/v_jurusan',$data);	
	}

	function tambah()
	{
		$data=array(
            'title' => 'Tambah jurusan',
            'jurusann' => 'active',
            'id_jurusan' => $this->M_Jurusan->id_akhir(),
        );
		$this->template->displayy('admin/jurusan/v_jurusan_tambah',$data);
	}

	function input()
	{
		$data = array(
			'id_jurusan' => $this->input->post('id_jurusan'),
			'nama_jurusan' => $this->input->post('nama_jurusan'),
		);

		$this->M_Jurusan->input($data);
		$this->index();

	}

	function edit($id_jurusan)
	{
		$data=array(
			'jurusann' => 'active',
			'jurusan' => $this->M_Jurusan->edit($id_jurusan),
		);

		$this->template->displayy('admin/jurusan/v_jurusan_edit',$data);
	}

	function update()
	{
		$id_jurusan['id_jurusan'] = $this->input->post('id_jurusan');
		$data = array(
			'nama_jurusan' =>	$this->input->post('nama_jurusan'),
		);

		$this->M_Jurusan->update($data,$id_jurusan);
		$this->index();	
	}

	function hapus($id_jurusan)
	{
		$this->M_Jurusan->hapus($id_jurusan);
		$this->index();
	}
	
}