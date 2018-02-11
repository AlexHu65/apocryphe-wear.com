<!-- Gallery Section -->
<section style="margin: 30px auto;" id="gallery" class="gallery-section text-center">
  <div class="container">
    <div class="col-lg-8 mx-auto">
      <h2>Gallery</h2>
      <div class="container container-fluid gallery-container">
          <div class="tz-gallery">
            <div class="row">
              <?php
                $dir = "img/gallery"; // Your Path to folder
                $map = directory_map($dir); /* This function reads the directory path specified in the first parameter and builds an array representation of it and all its contained files. */

                foreach ($map as $k)
                {  ?>
                  <div class="col-sm-6 col-md-4">
                      <a class="lightbox" href="<?php echo base_url($dir)."/".$k;?>">
                          <img src="<?php echo base_url($dir)."/".$k;?>" alt="">

                      </a>
                  </div>
                  <?php }?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
