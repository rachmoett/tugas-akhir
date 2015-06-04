<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index($error = NULL) {
		$data['error'] = $error;
		$this->load->view('login',$data);
	}

	public function cek_login() {
		$data = array(
			'id_user' => $this->input->post('username', TRUE),
			'password' => md5($this->input->post('password', TRUE))
		);
		$this->load->model('Model_User');
		$hasil = $this->Model_User->cek_user($data);
		if ($hasil->num_rows() == 1) {
			foreach ($hasil->result() as $sess) {
				$data=array(
					'logged_in' => 'Sudah Loggin',
					'id_user' => $sess->id_user,
					'password' => $sess->password,
					'level' => $sess->level,
				);
				$this->session->set_userdata($data);
			}

			if ($this->session->userdata('level')=='admin') {
				redirect('Admin/Home');
			}
			elseif ($this->session->userdata('level')=='dosen') {
				redirect('dosen/c_member');
			}	
			else  {
				redirect('Mahasiswa/Tahap1');
			}	
		}
		else {
			$error = 
				'<div class="alert">
                    <center><strong>Username atau Password anda salah!</strong></center>
                 </div>';
            $this->index($error);
		}
	}

}

?>