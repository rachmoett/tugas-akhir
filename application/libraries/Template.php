<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Template extends CI_Controller {

	    protected $_CI;
	    function __construct(){
	        $this->_CI=&get_instance();
	    }
	    
	    function display($template,$data=null){
	    	$data['sidebar']=$this->_CI->load->view('mahasiswa/template/sidebar',$data,true);
			$data['header']=$this->_CI->load->view('mahasiswa/template/header',$data,true);
			$data['content']=$this->_CI->load->view($template,$data,true);
			$data['footer']=$this->_CI->load->view('mahasiswa/template/footer',$data,true);
	        $this->_CI->load->view('mahasiswa/template/template.php',$data);
	    }

	    function displayy($template,$data=null){
			$data['header']=$this->_CI->load->view('admin/template/header',$data,true);
			$data['sidebar']=$this->_CI->load->view('admin/template/sidebar',$data,true);
			$data['content']=$this->_CI->load->view($template,$data,true);
			$data['footer']=$this->_CI->load->view('admin/template/footer',$data,true);
			$data['imbuhan']=$this->_CI->load->view('admin/template/imbuhan',$data,true);
	        $this->_CI->load->view('admin/template/template.php',$data);
	    }

}