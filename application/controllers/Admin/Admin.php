<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Admin/M_Admin','',TRUE);
        if ($this->session->userdata('id_user')=="" | 
            $this->session->userdata('level')=="dosen" |
            $this->session->userdata('level')=="mahasiswa" ) {
            redirect('welcome');
        }
    }

	function index()
	{
		$data=array(
			'adminn' => 'active',
			'admin' => $this->M_Admin->lihat(),
		);
		$data['admin'] = $this->M_Admin->lihat();
		$this->template->displayy('admin/admin/v_admin',$data);	
	}

	function tambah()
	{
		$data=array(
			'adminn' => 'active',
		);
		$this->template->displayy('admin/admin/v_admin_tambah',$data);
	}

	function input()
	{
		$config['upload_path'] = './assets/img admin/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '1000';
		$config['overwrite'] = TRUE;
		$config['file_name'] = $this->input->post('username');
			
		$this->load->library('upload', $config);

		$this->upload->do_upload('foto_admin');
		$upload = array('upload_data' => $this->upload->data());

		$data = array(
			'username' => $this->input->post('username'),
			'nama_admin' =>	$this->input->post('nama_admin'),
			'alamat_admin' => $this->input->post('alamat_admin'),
			'foto_admin' =>	$upload['upload_data']['file_name'],
		);

		$this->M_Admin->input($data);
		$this->index();
	}


	function edit($username)
	{
		$data=array(
			'adminn' => 'active',
			'admin' => $this->M_Admin->edit($username),
		);

		$this->template->displayy('admin/admin/v_admin_edit',$data);	

	}

	function update()
	{
		$config['upload_path'] = './assets/img admin/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '1000';
		$config['overwrite'] = TRUE;
		$config['file_name'] = $this->input->post('nim');
			
		$this->load->library('upload', $config);

		$this->upload->do_upload('foto_admin');
		$upload = array('upload_data' => $this->upload->data());

		$username['username'] = $this->input->post('username');
		$data = array(
			'nama_admin' =>	$this->input->post('nama_admin'),
			'alamat_admin' =>	$this->input->post('alamat_admin'),
			'foto_admin' =>	$upload['upload_data']['file_name'],
		);

		$this->M_Admin->update($data,$username);
		$this->index();	
	}

	function hapus($username)
	{
		$img = $this->uri->segment(5);
		$hapus = 'assets/img admin/'.$img;
		unlink($hapus);
		$this->M_Admin->hapus($username);
		$this->index();
	}
	
}