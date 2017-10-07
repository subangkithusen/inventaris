<?php
class Chome extends CI_Controller
{
	public function __construct(){
		parent::__construct();
	}


	public function index(){
		/*fungsi index*/
		//$data['title'] = "Aplikasi Inventaris";
		//$data['subtitle'] = "PT.XZY";
		$data['view_home'] = "view_home";
		$this->load->view('layout/template',$data);
		
	}

}
?>