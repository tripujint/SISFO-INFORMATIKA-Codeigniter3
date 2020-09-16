<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

function login_akses()
  {

  	$username = trim($this->input->post('username'));
  	$password = md5(trim($this->input->post('password')));
  	
	$akses = $this->db->query("SELECT A.id_admin, A.level, A.username, A.nama_admin FROM tb_admin A
	 WHERE A.username = '$username' AND A.password = '$password'");

    if($akses->num_rows() == 1)
	{
	
	foreach($akses->result_array() as $data)
	{

	$session['id_admin'] = $data['id_admin'];
	$session['nama_admin'] = $data['nama_admin'];
	$session['level'] = $data['level'];
	$session['username'] = $data['username'];
	
	$this->session->set_userdata($session);
    redirect('admin/home');
	}
	
	}
	else
	{
	$this->session->set_flashdata("msg", '
										<div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
											<span class="badge badge-pill badge-danger">Warning!</span>
											Data gagal disimpan.
											<button type="button" class="close" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>');
	redirect('admin');
	}

	
  }


  public function logout() {

  $this->session->sess_destroy();

  redirect('admin');
    
} 

}