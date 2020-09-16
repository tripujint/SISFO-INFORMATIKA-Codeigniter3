<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->model('model_app');
        
    }

	public function tambah()
	{
		$data['head'] = "admin/component/head";
		$data['foot'] = "admin/component/foot";
		$data['body'] = "admin/body/berita-form";

		$data['nama_admin'] = trim($this->session->userdata('nama_admin'));
		$data['username'] = trim($this->session->userdata('username'));

		$data['id_berita']	= "";
		$data['judul_berita']	= "";
		$data['isi_berita']	= "";
		$data['gambar']	= "";

		$data['url']	= "berita/create";

		$this->load->view('admin/layout', $data);
	}

	public function create()
	{
		$id_berita	= $this->model_app->getidberita();
		$gambar = $this->model_app->_uploadImage();

		$judul_berita   = ucwords(trim($this->input->post('judul_berita')));
		$isi_berita 	= trim($this->input->post('isi_berita'));

		date_default_timezone_set('Asia/Jakarta');
    	$tgl_terbit  =  date("Y-m-d  H:i:s");

    	$data['id_berita']	= $id_berita;
    	$data['judul_berita']	= $judul_berita;
    	$data['isi_berita']	= $isi_berita;
    	$data['tgl_terbit']	= $tgl_terbit;
    	$data['gambar']	= $gambar;

    	$data['penulis'] = trim($this->session->userdata('id_admin'));

  		$this->db->trans_start();

 		$this->db->insert('tb_berita', $data);

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
				redirect('admin/berita');	
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
				redirect('admin/berita');	
			}
	}

	public function edit($id)
	{
		$data['head'] = "admin/component/head";
		$data['foot'] = "admin/component/foot";
		$data['body'] = "admin/body/berita-form";

		$data['nama_admin'] = trim($this->session->userdata('nama_admin'));
		$data['username'] = trim($this->session->userdata('username'));

		$sql = "SELECT * FROM tb_berita WHERE id_berita = '$id'";
		$row = $this->db->query($sql)->row();

		$data['id_berita']	= $id;
    	$data['judul_berita']	= $row->judul_berita;
    	$data['isi_berita']	= $row->isi_berita;
    	$data['tgl_terbit']	= $row->tgl_terbit;
    	$data['gambar']	= $row->gambar;

    	$data['url']	= "berita/update";

    	$this->load->view('admin/layout', $data);
	}

	public function update()
	{
		$id_berita		= $this->input->post('id_berita');
		$judul_berita   = ucwords(trim($this->input->post('judul_berita')));
		$isi_berita 	= trim($this->input->post('isi_berita'));

		date_default_timezone_set('Asia/Jakarta');
    	$tgl_edit  =  date("Y-m-d  H:i:s");

    	if (!empty($_FILES["gambar"]["name"])) {
    		$gambar = $this->model_app->_uploadImage();
		} else {
    		$gambar = $this->input->post('old_image');
		}

		$data = array(
			'id_berita' => $id_berita,
			'judul_berita' => $judul_berita,
			'isi_berita' => $isi_berita,
			'tgl_edit' => $tgl_edit,
			'gambar' => $gambar,
		);

		$this->db->trans_start();

 		$this->db->where('id_berita', $id_berita);
 		$this->db->update('tb_berita', $data);

 		$this->db->trans_complete();

 		if ($this->db->trans_status() === FALSE)
			{
				$this->session->set_flashdata("msg", '
										<div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
											<span class="badge badge-pill badge-danger">Warning!</span>
											Data gagal diedit.
											<button type="button" class="close" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>');
				redirect('admin/berita');	
			} else 
			{
				$this->session->set_flashdata("msg", '
										<div class="sufee-alert alert with-close alert-primary alert-dismissible fade show">
											<span class="badge badge-pill badge-info">Berhasil</span>
											Data berhasil diedit.
											<button type="button" class="close" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>');
				redirect('admin/berita');	
			}
	}

	public function hapus($id)
	{
 		$this->db->trans_start();

 		$this->db->where('id_berita', $id);
 		$this->db->delete('tb_berita');

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
				redirect('admin/berita');	
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
				redirect('admin/berita');	
			}
	}
}
