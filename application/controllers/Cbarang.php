<?php
class Cbarang extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		/*load model databa*/

	}


	public function index(){
		/*fungsi index*/
		//$data['title'] = "Aplikasi Inventaris";
		//$data['subtitle'] = "PT.XZY";
		//$data['view_barang'] = "view_barang";
		//$this->load->view('layout/template');


		$data['head'] = "layout/head";
		$data['header'] = "layout/header";
		$data['sidebar'] = "layout/sidebar";
		$data['body'] = "view_barang";
		$data['footer'] = "layout/footer";


		$this->load->view('layout/template',$data);



		
	}

}
?>