<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Mahasiswa extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Admin/M_Mahasiswa','',TRUE);
        if ($this->session->userdata('id_user')=="" | $this->session->userdata('level')!="admin" ) {
            redirect('welcome');
        }
    }

	function index()
	{
		$data=array(
			'mahasiswaa' => 'active',
			'mahasiswa' => $this->M_Mahasiswa->lihat(),
		);
		$this->template->displayy('admin/mahasiswa/v_mahasiswa',$data);	
	}

	function tambah()
	{
		$data=array(
            'title '=> 'Tambah Mahasiswa',
            'mahasiswaa' => 'active',
            'kode' => $this->M_Mahasiswa->nim_akhir(),
        );
		$this->template->displayy('admin/mahasiswa/v_mahasiswa_tambah',$data);
	}

	function input()
	{
		$config['upload_path'] = './assets/img mahasiswa/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '1000';
		$config['overwrite'] = TRUE;
		$config['file_name'] = $this->input->post('nim');
			
		$this->load->library('upload', $config);

		$this->upload->do_upload('foto_mahasiswa');
		$upload = array('upload_data' => $this->upload->data());

		$data = array(
			'nim' => $this->input->post('nim'),
			'nama_mahasiswa' =>	$this->input->post('nama_mahasiswa'),
			'tgl_lahir' => $this->input->post('tgl_lahir'),
			'alamat_mahasiswa' => $this->input->post('alamat_mahasiswa'),
			'foto_mahasiswa' =>	$upload['upload_data']['file_name'],
		);

		$this->M_Mahasiswa->input($data);
		$this->index();

	}


	function edit($nim)
	{
		$data=array(
			'mahasiswaa' => 'active',
			'mahasiswa' => $this->M_Mahasiswa->edit($nim),
		);

		$this->template->displayy('admin/mahasiswa/v_mahasiswa_edit',$data);	
	}

	function update()
	{
		$config['upload_path'] = './assets/img mahasiswa/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '1000';
		$config['overwrite'] = TRUE;
		$config['file_name'] = $this->input->post('nim');
			
		$this->load->library('upload', $config);

		$this->upload->do_upload('foto_mahasiswa');
		$upload = array('upload_data' => $this->upload->data());

		$nim['nim'] = $this->input->post('nim');
		$data = array(
			'nama_mahasiswa' =>	$this->input->post('nama_mahasiswa'),
			'tgl_lahir' => $this->input->post('tgl_lahir'),
			'alamat_mahasiswa' => $this->input->post('alamat_mahasiswa'),
			'foto_mahasiswa' =>	$upload['upload_data']['file_name'],
		);

		$this->M_Mahasiswa->update($data,$nim);
		$this->index();	
	}

	function hapus($nim)
	{
		$this->M_Mahasiswa->hapus($nim);
		$this->index();
	}

	function detail($nim)
	{
		$img = $this->uri->segment(5);
		$hapus = 'assets/img mahasiswa/'.$img;
		unlink($hapus);
		$detail['detail']=$this->M_Mahasiswa->detail($nim);
		$this->template->displayy('admin/mahasiswa/v_detail',$detail);
	}
	
}