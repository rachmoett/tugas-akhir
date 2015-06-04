<?php

class M_jurusan extends CI_Model{

	function lihat(){
		$query = $this->db->get("jurusan");
		return $query->result();
	}

	function id_akhir(){
        $q = $this->db->query("select MAX(RIGHT(id_jurusan,3)) as code_max from jurusan");
        $code = "";
        if($q->num_rows()>0){
            foreach($q->result() as $cd){
                $tmp = ((int)$cd->code_max)+1;
                $code = sprintf("%03s", $tmp);
            }
        }else{
            $code = "001";
        }
        return "JRS-".$code;
    }

	function input($data){
		$this->db->insert('jurusan',$data);
	}

	function hapus($id_jurusan){
		$this->db->where('id_jurusan',$id_jurusan);
		$this->db->delete('jurusan');
	}

	function edit($id_jurusan){
		$this->db->where('id_jurusan',$id_jurusan);
		return $this->db->get('jurusan')->result();
	}

	function update($data,$id_jurusan){
		$this->db->where($id_jurusan);
		$this->db->update('jurusan',$data);
	}
}