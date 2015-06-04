<?php

class Awal extends CI_Model {

  function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
  	$this->db->where('nim', $this->session->userdata('id_user'));
  	$query = $this->db->get('mahasiswa');
	return $query->result();
  }

  public function dikelas()
  {
	$this->db->where('nim', $this->session->userdata('nim'));
	$query = $this->db->get('dikelas');
	return $query->result();
  }

  public function kelas()
  {
  	$this->db->where('id_kelas', $this->session->userdata('id_kelas'));
  	$query = $this->db->get('kelas');
  	return $query->result();
  }

  public function dosen()
  {
	$sql_prov=$this->db->get('dosen');	
	if($sql_prov->num_rows()>0){
		foreach ($sql_prov->result_array() as $row)
			{
				$result['-']= '- Pilih Dosen -';
				$result[$row['nip']]= ucwords(strtolower($row['nama_dosen']));
			}
			return $result;
		}
  }

  	public function ambil_foto($nip){
	 $this->db->where('nip',$nip);
	 $query = $this->db->get('dosen');

		return $query->result();
	}

  	public function ambil_matakuliah($nip){
	 $this->db->join('matakuliah','matakuliah.id_matakuliah = mengajar.id_matakuliah', 'left');

	$this->db->where('nip', $nip);
	$this->db->where('id_kelas', $this->session->userdata('id_kelas'));
	$sql_prov=$this->db->get('mengajar');	
	if($sql_prov->num_rows()>0){
		foreach ($sql_prov->result_array() as $row)
			{
				$result['-']= '- Pilih Matakuliah -';
				$result[$row['id_matakuliah']]= ucwords(strtolower($row['nama_matakuliah']));
			}
			return $result;
		}
	}

  	public function ambil_ujian($id_matakuliah){
	 $this->db->where('id_matakuliah',$id_matakuliah);
	 $this->db->where('id_kelas', $this->session->userdata('id_kelas'));
	 $sql_kabupaten=$this->db->get('ujian');
	 if($sql_kabupaten->num_rows()>0){

		foreach ($sql_kabupaten->result_array() as $row)
        {
            $result['-']= '- Pilih Ujian -';
            $result[$row['id_ujian']]= ucwords(strtolower($row['nama_ujian']));
        }
		} else {
		   $result['-']= '- Masih Kosong -';
		}
        return $result;
	}

  public function soal($id_ujian)
  {
	$this->db->where('id_ujian',$id_ujian);
	$this->db->order_by('id_soal','RAND ()');
	$query = $this->db->get('soal');
	return $query->result();
  }

  public function input($data)
  {
  	$this->db->insert('jawaban',$data);
  }

  function soal_dengan_kunci($Kunci) {
    $this->db->select('*');
    $this->db->from('soal');
    $this->db->where('soal.id_soal',$Kunci);
    return  $this->db->get();
    }

  public function nilai()
  {
	$this->db->join('ujian','ujian.id_ujian = nilai.id_ujian', 'left');
	
	$this->db->where('nim', $this->session->userdata('nim'));
	$query = $this->db->get('nilai');
	return $query->result();
  }

  public function teman_kelas()
  {
	$this->db->join('dikelas','dikelas.nim = mahasiswa.nim', 'left');
	
	$this->db->where('id_kelas', $this->session->userdata('id_kelas'));
	$query = $this->db->get('mahasiswa');
	return $query->result();
  }

  public function teman_semua()
  {
	$this->db->join('dikelas','dikelas.nim = mahasiswa.nim', 'left');
	
	$query = $this->db->get('mahasiswa');
	return $query->result();
  }

  function input_nilai($data){
		$this->db->insert('nilai',$data);
	}

}