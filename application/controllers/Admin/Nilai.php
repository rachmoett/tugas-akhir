<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

session_start();
class Nilai extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Admin/M_Nilai','',TRUE);
        $this->load->model('Admin/M_Ujian','',TRUE);
        if ($this->session->userdata('id_user')=="" | 
            $this->session->userdata('level')=="dosen" |
            $this->session->userdata('level')=="mahasiswa" ) {
            redirect('welcome');
        }
    }

	function index()
	{
		$data=array(
			'nilaii' => 'active',
			'nilai' => $this->M_Nilai->v_lihat(),
		);
		$this->template->displayy('admin/nilai/v_nilai',$data);	
	}

	function hapus($nip)
	{
		$this->m_dosen->hapus($nip);
		$this->index();
	}
	
}