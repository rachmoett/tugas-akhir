<?php

class M_admin extends CI_Model{

	function index(){
		$this->db->where('username', $this->session->userdata('id_user'));
	  	$query = $this->db->get('admin');
		return $query->result();
	}

	function lihat(){
		$query = $this->db->get("admin");
		return $query->result();
	}

	function input($data){
		$this->db->insert('admin',$data);
	}

	function hapus($username){
		$this->db->where('username',$username);
		$this->db->delete('admin');
	}

	function edit($username){
		$this->db->where('username',$username);
		return $this->db->get('admin')->result();
	}

	function update($data,$username){
		$this->db->where($username);
		$this->db->update('admin',$data);
	}
	
	function detail($username){
		$this->db->where('username',$username);
		return $this->db->get('admin')->result();
	}
}