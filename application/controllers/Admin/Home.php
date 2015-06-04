<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller{
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

    public function index()
    {
        $hasil1 = $this->M_Admin->index();
        foreach ($hasil1 as $sess) {
            $sess_data['username'] = $sess->username;
            $sess_data['nama_admin'] = $sess->nama_admin;
            $sess_data['foto_admin'] = $sess->foto_admin;
            $this->session->set_userdata($sess_data);
        }

        $data=array(
            'home' => 'active',
        );
        $this->template->displayy('admin/home',$data);
    }

    public function logout() 
	{
		$this->session->sess_destroy();
		redirect(site_url('welcome'));
	}
}