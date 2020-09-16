 <!-- ======= News Section ======= -->
    <section id="news" class="pricing section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>LASTEST NEWS</h2>
        </div>

        <!--Carousel Wrapper-->
        <div id="multi-item" class="carousel slide" data-ride="carousel">

          <!--Controls-->
          <div class="controls-top" align="center">
            <a class="btn-floating" href="#multi-item" data-slide="prev"><i class="fas fa-chevron-left"></i></a>
            <a class="btn-floating" href="#multi-item" data-slide="next"><i class="fas fa-chevron-right"></i></a>
          </div>
          <!--/.Controls-->
          <br>

          <!--Slides-->
          <div class="carousel-inner row">
            
                <?php 
                    $no = 0; foreach ($databerita as $row) : $no++;
                        if ($no == 1) {
                            echo '<div class="carousel-item active">';
                        } else {
                            echo '<div class="carousel-item">';
                        }
                ?>
              <div class="col-md-12">
                <div data-aos="fade-up" data-aos-delay="100">
                  <div class="card mb-2">
                    <div class="row" style="margin-bottom: 35px">
                    <div class="col-md-5" style="padding-left: 50px">
                        <img class="card-img-top" src="<?php echo base_url(); ?>upload/berita/<?php echo $row->gambar; ?>" style="width: 380px; height: 200px;">
                    </div>
                    <div class="col-md-7">
                        <small class="text-muted"><i class="fa fa-calendar-o"></i> <?php echo $row->tgl_terbit; ?></small>
                        <br><br>
                        <h3 class="card-title"><?php echo $row->judul_berita; ?></h3>
                        <p><?php echo substr($row->isi_berita, 0, 100); ?>...</p>
                    </div>
                </div>
                  </div>
                </div>
              </div>
                <?php echo '</div>'; endforeach; ?>

          </div>
        </div>

      </div>
    </section><!-- End News Section -->