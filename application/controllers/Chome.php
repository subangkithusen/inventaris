<?php
class Chome extends CI_Controller
{
	public function __construct(){
		parent::__construct();
	}


	public function index(){
		/*memanggil isi layout */
		$data['head'] = "layout/head";
		$data['header'] = "layout/header";
		$data['sidebar'] = "layout/sidebar";
		$data['body'] = "view_dasboard";
		$data['footer'] = "layout/footer";

		/*load layout ke tamplate dengan parameterdata*/
		$this->load->view('layout/template',$data);
		/*akhinya paham metode templating :)*/



		
	}
}
?>