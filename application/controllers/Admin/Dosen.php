<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Dosen extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Admin/M_Dosen','',TRUE);
        if ($this->session->userdata('id_user')=="" | 
            $this->session->userdata('level')=="dosen" |
            $this->session->userdata('level')=="mahasiswa" ) {
            redirect('welcome');
        }
    }

	function index()
	{
		$data=array(
			'dosenn' => 'active',
			'dosen' => $this->M_Dosen->lihat(),
		);
		$this->template->displayy('admin/dosen/v_dosen',$data);	
	}

	function tambah()
	{
		$data=array(
			'dosenn' => 'active',
		);
		$this->template->displayy('admin/dosen/v_dosen_tambah');
	}

	function input()
	{
		$config['upload_path'] = './assets/img dosen/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '1000';
		$config['overwrite'] = TRUE;
		$config['file_name'] = $this->input->post('nip');
			
		$this->load->library('upload', $config);

		$this->upload->do_upload('foto_dosen');
		$upload = array('upload_data' => $this->upload->data());

		$data = array(
			'nip' => $this->input->post('nip'),
			'nama_dosen' =>	$this->input->post('nama_dosen'),
			'alamat_dosen' => $this->input->post('alamat_dosen'),
			'foto_dosen' =>	$upload['upload_data']['file_name'],
		);

		$this->M_Dosen->input($data);
		$this->index();

	}


	function edit($nip)
	{
		$data=array(
			'dosenn' => 'active',
			'dosen' => $this->M_Dosen->edit($nip),
		);

		$this->template->displayy('admin/dosen/v_dosen_edit',$data);	

	}

	function update()
	{
		$config['upload_path'] = './assets/img dosen/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '1000';
		$config['overwrite'] = TRUE;
		$config['file_name'] = $this->input->post('nip');
			
		$this->load->library('upload', $config);

		$this->upload->do_upload('foto_dosen');
		$upload = array('upload_data' => $this->upload->data());

		$nip['nip'] = $this->input->post('nip');
		$data = array(
			'nama_dosen' =>	$this->input->post('nama_dosen'),
			'alamat_dosen' =>	$this->input->post('alamat_dosen'),
			'foto_dosen' =>	$upload['upload_data']['file_name'],
		);

		$this->M_Dosen->update($data,$nip);
		$this->index();	
	}

	function hapus($nip)
	{
		$img = $this->uri->segment(5);
		$hapus = 'assets/img dosen/'.$img;
		unlink($hapus);
		$this->M_Dosen->hapus($nip);
		$this->index();
	}
	
}