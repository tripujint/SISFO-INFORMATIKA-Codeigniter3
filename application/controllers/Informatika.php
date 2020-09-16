<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informatika extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->model('model_app');
        
    }

	public function index()
	{
		$data['header'] = "template/header";
		$data['hero'] = "template/hero";
		$data['cliens'] = "template/cliens";
		$data['about'] = "template/about";
		$data['portfolio'] = "template/portfolio";
		$data['news'] = "template/news";
		$data['team'] = "template/team";
		$data['contact'] = "template/contact";
		$data['footer'] = "template/footer";

		$berita = $this->model_app->data_berita();
		$data['databerita'] = $berita;

		$this->load->view('layout', $data);
	}


}
