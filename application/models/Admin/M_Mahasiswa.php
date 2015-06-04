<?php

class M_mahasiswa extends CI_Model{

	function lihat(){
		$query = $this->db->get("mahasiswa");
		return $query->result();
	}

	function nim_akhir(){
        $q = $this->db->query("select MAX(RIGHT(nim,2)) as code_max from mahasiswa");
        $code = "";
        if($q->num_rows()>0){
            foreach($q->result() as $cd){
                $tmp = ((int)$cd->code_max)+1;
                $code = sprintf("%02s", $tmp);
            }
        }else{
            $code = "01";
        }
        return "1363100400".$code;
    }

	function input($data){
		$this->db->insert('mahasiswa',$data);
	}

	function hapus($nim){
		$this->db->where('nim',$nim);
		$this->db->delete('mahasiswa');
	}

	function edit($nim){
		$this->db->where('nim',$nim);
		return $this->db->get('mahasiswa')->result();
	}

	function update($data,$nim){
		$this->db->where($nim);
		$this->db->update('mahasiswa',$data);
	}
	
	function detail($nim){
		$this->db->where('nim',$nim);
		return $this->db->get('mahasiswa')->result();
	}
}