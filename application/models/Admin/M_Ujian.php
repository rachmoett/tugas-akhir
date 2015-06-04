<?php

class M_ujian extends CI_Model{

	function lihat(){
		$query = $this->db->get("ujian");
		return $query->result();
	}

	function v_lihat(){
		$this->db->join('matakuliah','matakuliah.id_matakuliah = ujian.id_matakuliah', 'left');
		$this->db->join('kelas','kelas.id_kelas = ujian.id_kelas', 'left');
		$query = $this->db->get('ujian');
		return $query->result();
	}

	function input($data){
		$this->db->insert('ujian',$data);
	}

	function hapus($id_ujian){
		$this->db->where('id_ujian',$id_ujian);
		$this->db->delete('ujian');
	}

	function edit($id_ujian){
		$this->db->where('id_ujian',$id_ujian);
		return $this->db->get('ujian')->result();
	}

	function update($data,$id_ujian){
		$this->db->where($id_ujian);
		$this->db->update('ujian',$data);
	}
	
	function detail($id_ujian){
		$this->db->where('id_ujian',$id_ujian);
		return $this->db->get('ujian')->result();
	}
}