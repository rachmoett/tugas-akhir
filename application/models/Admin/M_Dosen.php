<?php

class M_dosen extends CI_Model{

	function lihat(){
		$query = $this->db->get("dosen");
		return $query->result();
	}

	function input($data){
		$this->db->insert('dosen',$data);
	}

	function hapus($nip){
		$this->db->where('nip',$nip);
		$this->db->delete('dosen');
	}

	function edit($nip){
		$this->db->where('nip',$nip);
		return $this->db->get('dosen')->result();
	}

	function update($data,$nip){
		$this->db->where($nip);
		$this->db->update('dosen',$data);
	}
	
	function detail($nip){
		$this->db->where('nip',$nip);
		return $this->db->get('dosen')->result();
	}
}