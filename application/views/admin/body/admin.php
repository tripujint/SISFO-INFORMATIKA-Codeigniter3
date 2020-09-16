            <!-- BREADCRUMB-->
            <section class="au-breadcrumb m-t-75">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12" align="right">
                                <div class="au-breadcrumb-content">
                                    <div class="au-breadcrumb-left">
                                        DATA ADMIN 
                                    </div>
                                    <a href="<?php echo base_url(); ?>admin/tambah" class="au-btn au-btn-icon au-btn--green">
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
                        <br>
                        <?php echo $this->session->flashdata("msg");?>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive m-b-30">
                                    <br>
                                    <table class="table table-borderless table-striped table-earning" id="data-tables">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>nama admin</th>
                                                <th>username</th>
                                                <th class="text-center">level</th>
                                                <th class="text-center">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 0; foreach($dataadmin as $row) : $no++; ?>
                                            <tr>
                                                <td><?php echo $no; ?></td>
                                                <td><?php echo $row->nama_admin;?></td>
                                                <td><?php echo $row->username;?></td>
                                                <td class="text-center">1</td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <a href="" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </a>
                                                        <a href="hapus/<?php echo $row->id_admin; ?>" class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php endforeach;?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>