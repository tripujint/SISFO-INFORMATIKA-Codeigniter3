            <!-- BREADCRUMB-->
            <section class="au-breadcrumb m-t-75">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12" align="right">
                                <div class="au-breadcrumb-content">
                                    <div class="au-breadcrumb-left">
                                        TAMBAH ADMIN 
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
                        <div class="row">
                            <div class="col-lg-12">
                                <br>
                                <form action="<?php echo base_url(); ?>admin/create" method="post">
            <div class="form-group">
                <div class="col-md-12">
                    <label for="stock">Nama Lengkap</label>
                    <input class="form-control" type="text" name="nama_admin" id="nama_admin" required="">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <label for="stock">Username</label>
                    <input class="form-control" type="text" name="username" id="username" required="">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <label for="stock">Password</label>
                    <input class="form-control" type="password" name="password" id="password" required="">
                </div>
            </div>
            <div class="form-group">
              <div class="col-md-12">
                <button class="btn btn-primary" type="submit" name="simpan" id="simpan">SIMPAN</button>
                <a href="<?php echo base_url(); ?>admin/data" class="btn btn-default">BATAL</a>
              </div>
            </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
