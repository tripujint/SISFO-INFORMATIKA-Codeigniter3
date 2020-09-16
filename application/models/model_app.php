<?php

class Model_app extends CI_Model{
    function __construct() {
        parent::__construct();
    }

    public function getidadmin()
    {
    	$query = $this->db->query("SELECT max(id_admin) AS max_code FROM tb_admin");

        $row = $query->row_array();

        $max_id = $row['max_code'];
        $max_fix = (int) substr($max_id, 1, 3);

        $max_admin = $max_fix + 1;

        $admin = "A".sprintf("%02s", $max_admin);
        return $admin;
    }

    public function getidberita()
    {
        $query = $this->db->query("SELECT max(id_berita) AS max_code FROM tb_berita");

        $row = $query->row_array();

        $max_id = $row['max_code'];
        $max_fix = (int) substr($max_id, 1, 4);

        $max_berita = $max_fix + 1;

        $berita = "B".sprintf("%04s", $max_berita);
        return $berita;
    }

    public function data_admin()
    {
        $query = $this->db->query("SELECT * FROM tb_admin");
        return $query->result();
    }

    public function data_berita()
    {
        $query = $this->db->query("SELECT * FROM tb_berita A JOIN tb_admin B ON A.penulis=B.id_admin ORDER BY A.id_berita DESC");
        return $query->result();
    }

    // public function jml_berita()
    // {
    //     $query = $this->db->query("SELECT COUNT(id_berita) AS num FROM tb_berita A JOIN tb_admin B ON A.penulis=B.id_admin");
    //     return $query->result();
    // }

    public function _uploadImage()
    {
        $config['upload_path']          = './upload/berita/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $this->getidberita();
        $config['overwrite']            = true;
        $config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('gambar')) {
            return $this->upload->data("file_name");
        }
    
        // return "default.jpg";
        print_r($this->upload->display_errors());
    }

}