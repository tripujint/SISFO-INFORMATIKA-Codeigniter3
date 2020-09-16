             <!-- BREADCRUMB-->
            <section class="au-breadcrumb m-t-75">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12" align="right">
                                <div class="au-breadcrumb-content">
                                    <div class="au-breadcrumb-left">
                                        DATA BERITA 
                                    </div>
                                    <a href="<?php echo base_url(); ?>berita/tambah" class="au-btn au-btn-icon au-btn--green">
                                        <i class="zmdi zmdi-plus"></i>tambah</a>
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
                      <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <br>
                                <?php echo $this->session->flashdata("msg");?>
                                <div class="table-responsive">
                                    <table class="table table-data2" id="data-tables">
                                        <thead>
                                            <tr>
                                                <th>#</th>                                                
                                                <th>Gambar</th>
                                                <th>Judul Berita</th>
                                                <th>Isi Berita</th>
                                                <th>Penulis</th>
                                                <th>Tanggal Terbit</th>
                                                <th>Tanggal Edit</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 0; foreach ($databerita as $row) : $no++; ?>
                                            <tr class="tr-shadow">
                                                <td><?php echo $no; ?></td>
                                                <td><img src="<?php echo base_url(); ?>upload/berita/<?php echo $row->gambar; ?>"></td>
                                                <td><?php echo $row->judul_berita;?></td>
                                                <td>
                                                    <?php echo $row->isi_berita;?>
                                                </td>
                                                <td class="desc"><?php echo $row->nama_admin;?></td>
                                                <td><?php echo $row->tgl_terbit;?></td>
                                                <td><?php echo $row->tgl_edit;?></td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <a href="<?php echo base_url(); ?>berita/edit/<?php echo $row->id_berita; ?>" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </a>
                                                        <a href="<?php echo base_url(); ?>berita/hapus/<?php echo $row->id_berita; ?>" class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php endforeach;?>
                                            <!-- <tr class="spacer"></tr> -->
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>
                    </div>
                </div>