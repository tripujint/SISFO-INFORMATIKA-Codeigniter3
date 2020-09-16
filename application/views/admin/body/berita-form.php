            <!-- BREADCRUMB-->
            <section class="au-breadcrumb m-t-75">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12" align="right">
                                <div class="au-breadcrumb-content">
                                    <div class="au-breadcrumb-left">
                                        TAMBAH BERITA 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END BREADCRUMB-->

            <!-- MAIN CONTENT-->
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <br>
                        <?php echo $this->session->flashdata("msg");?>
                        <div class="row">
                            <div class="col-lg-12">
                                <br>
                                <form action="<?php echo base_url(); echo $url ?>" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="id_berita" id="id_berita" value="<?php echo $id_berita; ?>" required="">
            <div class="form-group">
                <div class="col-md-12">
                    <label for="judul_berita">Judul Berita</label>
                    <input class="form-control" type="text" name="judul_berita" id="judul_berita" value="<?php echo $judul_berita; ?>" required="">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <label for="gambar">Gambar</label>
                    <input class="form-control" type="file" name="gambar" id="gambar">
                    <input class="form-control" type="hidden" name="old_image" id="old_image" value="<?php echo $gambar; ?>">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <label for="isi_berita">Isi Berita</label>
                    <textarea class="ckeditor" id="ckeditor" name="isi_berita"><?php echo $isi_berita; ?></textarea>
                </div>
            </div>
            <div class="form-group">
              <div class="col-md-12">
                <button class="btn btn-primary" type="submit">SIMPAN</button>
                <a href="<?php echo base_url(); ?>admin/berita" class="btn btn-default">BATAL</a>
              </div>
            </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

    <!-- setup selector -->
    <script type="text/javascript">
        $('textarea.texteditor').ckeditor();
    </script>
