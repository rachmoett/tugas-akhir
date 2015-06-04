<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Soal extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Admin/M_Soal','',TRUE);
        $this->load->model('Admin/M_Ujian','',TRUE);
        if ($this->session->userdata('id_user')=="" | 
            $this->session->userdata('level')=="dosen" |
            $this->session->userdata('level')=="mahasiswa" ) {
            redirect('welcome');
        }
    }

	function index()
	{
		$data = array(
			'soall' => 'active',
			'soal' => $this->M_Soal->v_lihat(),
		);
		$this->template->displayy('admin/soal/v_soal',$data);	
	}

	function tambah()
	{
		$data = array(
			'soall' => 'active',
			'ujian' => $this->M_Ujian->lihat(),
			'id_soal' => $this->M_Soal->id_akhir(),
		);
		$this->template->displayy('admin/soal/v_soal_tambah',$data);
	}

	function input()
	{
		$data = array(
			'id_soal' => $this->input->post('id_soal'),
			'id_ujian' => $this->input->post('id_ujian'),
			'pertanyaan' => $this->input->post('pertanyaan'),
			'pilihan_a' => $this->input->post('pilihan_a'),
			'pilihan_b' => $this->input->post('pilihan_b'),
			'pilihan_c' => $this->input->post('pilihan_c'),
			'pilihan_d' => $this->input->post('pilihan_d'),
			'pilihan_e' => $this->input->post('pilihan_e'),
			'jawaban' => $this->input->post('jawaban'),
		);

		$this->M_Soal->input($data);
		$this->index();
	}

	function edit($id_soal)
	{
		$data = array(
			'soall' => 'active',
			'ujian' => $this->M_Ujian->lihat(),
			'soal' => $this->M_Soal->edit($id_soal),
		);

		$this->template->displayy('admin/soal/v_soal_edit',$data);	

	}

	function update()
	{
		$id_soal['id_soal'] = $this->input->post('id_soal');
		$data = array(
			'id_ujian' => $this->input->post('id_ujian'),
			'pertanyaan' => $this->input->post('pertanyaan'),
			'pilihan_a' => $this->input->post('pilihan_a'),
			'pilihan_b' => $this->input->post('pilihan_b'),
			'pilihan_c' => $this->input->post('pilihan_c'),
			'pilihan_d' => $this->input->post('pilihan_d'),
			'pilihan_e' => $this->input->post('pilihan_e'),
			'jawaban' => $this->input->post('jawaban'),
		);

		$this->M_Soal->update($data,$id_soal);
		$this->index();	
	}

	function hapus($id_soal)
	{
		$this->M_Soal->hapus($id_soal);
		$this->index();
	}
	
}