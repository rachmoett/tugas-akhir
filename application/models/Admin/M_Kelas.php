<?php

class M_kelas extends CI_Model{

	function lihat(){
		$query = $this->db->get("kelas");
		return $query->result();
	}

	function v_lihat(){
		$this->db->join('jurusan','jurusan.id_jurusan = kelas.id_jurusan','left');
		$query = $this->db->get("kelas");
		return $query->result();
	}

	function id_akhir(){
        $q = $this->db->query("select MAX(RIGHT(id_kelas,3)) as code_max from kelas");
        $code = "";
        if($q->num_rows()>0){
            foreach($q->result() as $cd){
                $tmp = ((int)$cd->code_max)+1;
                $code = sprintf("%03s", $tmp);
            }
        }else{
            $code = "001";
        }
        return "KLS-".$code;
    }

	function input($data){
		$this->db->insert('kelas',$data);
	}

	function hapus($id_kelas){
		$this->db->where('id_kelas',$id_kelas);
		$this->db->delete('kelas');
	}

	function edit($id_kelas){
		$this->db->where('id_kelas',$id_kelas);
		return $this->db->get('kelas')->result();
	}

	function update($data,$id_kelas){
		$this->db->where($id_kelas);
		$this->db->update('kelas',$data);
	}
}