<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tahap1 extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('mahasiswa/Awal','',TRUE);
		if ($this->session->userdata('id_user')=="" | 
            $this->session->userdata('level')=="dosen" |
            $this->session->userdata('level')=="admin" ) {
			redirect('welcome');
		}
	}
	public function index() {
		$hasil1 = $this->Awal->index();
		foreach ($hasil1 as $sess) {
			$sess_data['nim'] = $sess->nim;
			$sess_data['nama_mahasiswa'] = $sess->nama_mahasiswa;
			$sess_data['foto_mahasiswa'] = $sess->foto_mahasiswa;
			$this->session->set_userdata($sess_data);
		}

		$hasil2 = $this->Awal->dikelas();
		foreach ($hasil2 as $sess) {
			$sess_data['id_kelas'] = $sess->id_kelas;
			$this->session->set_userdata($sess_data);
		}

		$data['title']="Pilih Dosen";
		$this->template->display('mahasiswa/home', $data);
	}


	function daftar_matakuliah()
	{
		$data['ujian']="active";
		$data['title']="Pilih Dosen";
		$data["daftar_dosen"]=$this->Awal->dosen();

		$this->template->display('mahasiswa/matakuliah',$data);
	}

	// dijalankan saat provinsi di klik
	public function pilih_matakuliah()
	{
		$data['daftar_matakuliahh']=$this->Awal->ambil_matakuliah($this->uri->segment(4));
	 	$this->load->view('mahasiswa/pilih_matakuliah',$data);	
	}

	// dijalankan saat provinsi di klik
	public function pilih_foto()
	{
		$data['foto_dosen']=$this->Awal->ambil_foto($this->uri->segment(4));
	 	$this->load->view('mahasiswa/pilih_foto',$data);	
	}

	// dijalankan saat provinsi di klik
	public function pilih_ujian()
	{
		$data['daftar_ujian']=$this->Awal->ambil_ujian($this->uri->segment(4));
	 	$this->load->view('mahasiswa/pilih_ujian',$data);	
	}

	// dijalankan saat provinsi di klik
	public function tampil_soal()
	{
		$data['ujian']="active";
		$data['title']="Pilih Dosen";
		
		$id_ujian = $this->input->post("id_ujian");
		$data['soal']=$this->Awal->soal($id_ujian);
	 	$this->template->display('mahasiswa/soal',$data);	
	}

	public function hasil_soal()
    {
        $jumlah = $this->input->post('jumlah_soal');

        $result = array();
        foreach($_POST['soal'] as $key => $val){;
        	$result[] = array(
        		'nim' => $this->session->userdata('nim'),
         		'id_soal' => $_POST['id_soal'][$key],
         		'dijawab' => $_POST['soal'][$key],
        	);
        }

        $this->db->insert_batch('jawaban',$result);

        /*for ($i=0; $i < $jumlah ; $i++) { 
         	$data = array(
         		'nim' => $this->session->userdata('nim'),
         		'id_soal' => $this->input->post('id_soal'.$i),
         	);

         	$this->Awal->input($data);
        }*/

        $benar = 0;
        $salah = 0;
	        foreach($_POST['soal'] as $Kunci => $value){
		        $data= $this->Awal->soal_dengan_kunci($Kunci)->result();
		        foreach( $data as $key => $val)
		        {
		        $jawaban = $val->jawaban;
		        }
		        
		        if($value==$jawaban){
		            $benar++;
		         }else{
		            $salah++;
		         }
	    	}

	        $kosong = $jumlah - $benar - $salah;
	        $nilai = ($benar / $jumlah) * '100';

	        $data ['id_ujian'] = $this->input->post("id_ujian");
	        $data ['isi1']= $benar ;
	        $data ['isi2']= $salah ;
	        $data ['isi3']= $kosong ;
	        $data ['isi4']= $nilai ;
	        $data ['isi']= 'HasilSoal' ;
	        $this->load->view('mahasiswa/ah', $data);
        }  

	public function tambah_nilai()
	{
		$data['nim'] = $this->session->userdata('nim');
		$data['id_ujian'] = $this->input->post('id_ujian');
		$data['benar'] = $this->input->post('benar');
		$data['salah'] = $this->input->post('salah');
		$data['nilai'] = $this->input->post('nilai');
		$this->Awal->input_nilai($data);
		$this->nilai();
	}

	public function nilai()
	{
		$data['daftar_nilai'] = $this->Awal->nilai();
		$this->template->display('mahasiswa/nilai',$data);
	}

	public function logout() 
	{
		$this->session->sess_destroy();
		redirect(site_url('welcome'));
	}


	public function teman_kelas()
	{
		$data['teman']="active";
		$data['teman_kelas']="active";
		$data['title']="Teman Kelas";
		
		$data["daftar_teman"]=$this->Awal->teman_kelas();

		$this->template->display('mahasiswa/teman_kelas',$data);
	}

	public function teman_semua()
	{
		$data['teman']="active";
		$data['teman_semua']="active";
		$data['title']="Semua Teman";
		
		$data["daftar_teman"]=$this->Awal->teman_semua();

		$this->template->display('mahasiswa/teman_semua',$data);
	}

	public function pilih_dosen_dll()
	{
		foreach ($hasil1 as $sess) {
			$sess_data['id_ujian'] = $this->input->post("id_ujian");
			$sess_data['nama_mahasiswa'] = $this->input->post("id_barang");
			$sess_data['foto_mahasiswa'] = $this->input->post("id_barang");
			$this->session->set_userdata($sess_data);
		}
	}

}
