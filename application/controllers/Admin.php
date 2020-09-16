<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->model('model_app');
        
    }

	public function index()
	{
		$data['head'] = "admin/component/head";
		$data['foot'] = "admin/component/foot";

		$this->load->view('admin/login', $data);
	}

	public function home()
	{
		$data['head'] = "admin/component/head";
		$data['foot'] = "admin/component/foot";
		$data['body'] = "admin/body/home";

		$data['nama_admin'] = trim($this->session->userdata('nama_admin'));
		$data['username'] = trim($this->session->userdata('username'));

		$this->load->view('admin/layout', $data);
	}

	public function berita()
	{
		$data['head'] = "admin/component/head";
		$data['foot'] = "admin/component/foot";
		$data['body'] = "admin/body/berita";

		$data['nama_admin'] = trim($this->session->userdata('nama_admin'));
		$data['username'] = trim($this->session->userdata('username'));

		$databerita = $this->model_app->data_berita();
		$data['databerita'] = $databerita;

		$this->load->view('admin/layout', $data);
	}

	public function data()
	{
		$data['head'] = "admin/component/head";
		$data['foot'] = "admin/component/foot";
		$data['body'] = "admin/body/admin";

		$data['nama_admin'] = trim($this->session->userdata('nama_admin'));
		$data['username'] = trim($this->session->userdata('username'));

		$dataadmin = $this->model_app->data_admin();
		$data['dataadmin'] = $dataadmin;

		$this->load->view('admin/layout', $data);
	}

	public function tambah()
	{
		$data['head'] = "admin/component/head";
		$data['foot'] = "admin/component/foot";
		$data['body'] = "admin/body/admin-form";

		$data['nama_admin'] = trim($this->session->userdata('nama_admin'));
		$data['username'] = trim($this->session->userdata('username'));

		$this->load->view('admin/layout', $data);
	}

	public function create()
	{
		$id_admin	= $this->model_app->getidadmin();
		$nama_admin = trim($this->input->post('nama_admin'));
		$username 	= trim($this->input->post('username'));
		$password 	= trim($this->input->post('password'));

		$data['id_admin']	= $id_admin;
		$data['nama_admin'] = $nama_admin;
		$data['username']	= $username;
		$data['password']	= md5($password);
		$data['level']		= 1;

		$this->db->trans_start();

 		$this->db->insert('tb_admin', $data);

 		$this->db->trans_complete();

 		if ($this->db->trans_status() === FALSE)
			{
				$this->session->set_flashdata("msg", '
										<div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
											<span class="badge badge-pill badge-danger">Warning!</span>
											Data gagal disimpan.
											<button type="button" class="close" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>');
				redirect('admin/data');	
			} else 
			{
				$this->session->set_flashdata("msg", '
										<div class="sufee-alert alert with-close alert-primary alert-dismissible fade show">
											<span class="badge badge-pill badge-info">Berhasil</span>
											Data berhasil disimpan.
											<button type="button" class="close" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>');
				redirect('admin/data');	
			}
	}

	public function hapus($id)
	{
 		$this->db->trans_start();

 		$this->db->where('id_admin', $id);
 		$this->db->delete('tb_admin');

 		$this->db->trans_complete();

 		if ($this->db->trans_status() === FALSE)
			{
				$this->session->set_flashdata("msg", '
										<div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
											<span class="badge badge-pill badge-danger">Warning!</span>
											Data gagal dihapus.
											<button type="button" class="close" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>');
				redirect('admin/data');	
			} else 
			{
				$this->session->set_flashdata("msg", '
										<div class="sufee-alert alert with-close alert-primary alert-dismissible fade show">
											<span class="badge badge-pill badge-info">Berhasil</span>
											Data berhasil dihapus.
											<button type="button" class="close" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>');
				redirect('admin/data');	
			}
	}
}
