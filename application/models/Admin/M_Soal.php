<?php

class M_soal extends CI_Model{

	function lihat(){
		$query = $this->db->get("soal");
		return $query->result();
	}

	function v_lihat(){
		$this->db->join('ujian','ujian.id_ujian = soal.id_ujian', 'left');
		$query = $this->db->get('soal');
		return $query->result();
	}

	function id_akhir(){
        $q = $this->db->query("select MAX(RIGHT(id_soal,3)) as code_max from soal");
        $code = "";
        if($q->num_rows()>0){
            foreach($q->result() as $cd){
                $tmp = ((int)$cd->code_max)+1;
                $code = sprintf("%03s", $tmp);
            }
        }else{
            $code = "001";
        }
        return "SOA-".$code;
    }

	function input($data){
		$this->db->insert('soal',$data);
	}

	function hapus($id_soal){
		$this->db->where('id_soal',$id_soal);
		$this->db->delete('soal');
	}

	function edit($id_soal){
		$this->db->where('id_soal',$id_soal);
		return $this->db->get('soal')->result();
	}

	function update($data,$id_soal){
		$this->db->where($id_soal);
		$this->db->update('soal',$data);
	}
	
	function detail($id_soal){
		$this->db->where('id_soal',$id_soal);
		return $this->db->get('soal')->result();
	}
}