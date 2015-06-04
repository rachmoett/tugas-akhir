<?php

class M_matakuliah extends CI_Model{

	function lihat(){
		$query = $this->db->get("matakuliah");
		return $query->result();
	}

	function id_akhir(){
        $q = $this->db->query("select MAX(RIGHT(id_matakuliah,3)) as code_max from matakuliah");
        $code = "";
        if($q->num_rows()>0){
            foreach($q->result() as $cd){
                $tmp = ((int)$cd->code_max)+1;
                $code = sprintf("%03s", $tmp);
            }
        }else{
            $code = "001";
        }
        return "MAK-".$code;
    }

	function input($data){
		$this->db->insert('matakuliah',$data);
	}

	function hapus($id_matakuliah){
		$this->db->where('id_matakuliah',$id_matakuliah);
		$this->db->delete('matakuliah');
	}

	function edit($id_matakuliah){
		$this->db->where('id_matakuliah',$id_matakuliah);
		return $this->db->get('matakuliah')->result();
	}

	function update($data,$id_matakuliah){
		$this->db->where($id_matakuliah);
		$this->db->update('matakuliah',$data);
	}
	
	function detail($id_matakuliah){
		$this->db->where('id_matakuliah',$id_matakuliah);
		return $this->db->get('matakuliah')->result();
	}
}