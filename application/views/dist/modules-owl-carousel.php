<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('dist/_partials/header');
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Owl Carousel</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Modules</a></div>
              <div class="breadcrumb-item">Owl Carousel</div>
            </div>
          </div>

          <div class="section-body">
            <h2 class="section-title">Owl Carousel</h2>
            <p class="section-lead">Display multiple images alternately within a few seconds.</p>

            <div class="row">
              <div class="col-12 col-sm-6 col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <h4>Sliders</h4>
                  </div>
                  <div class="card-body">
                    <div class="owl-carousel owl-theme slider" id="slider1">
                      <div><img alt="image" src="<?php echo base_url(); ?>assets/img/news/img01.jpg"></div>
                      <div><img alt="image" src="<?php echo base_url(); ?>assets/img/news/img08.jpg"></div>
                      <div><img alt="image" src="<?php echo base_url(); ?>assets/img/news/img10.jpg"></div>
                      <div><img alt="image" src="<?php echo base_url(); ?>assets/img/news/img09.jpg"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <h4>Sliders (Caption)</h4>
                  </div>
                  <div class="card-body">
                    <div class="owl-carousel owl-theme slider" id="slider2">
                      <div><img alt="image" src="<?php echo base_url(); ?>assets/img/news/img01.jpg">
                        <div class="slider-caption">
                          <div class="slider-title">Image 1</div>
                          <div class="slider-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                          tempor incididunt ut labore et dolore magna aliqua.</div>
                        </div>
                      </div>
                      <div><img alt="image" src="<?php echo base_url(); ?>assets/img/news/img08.jpg">
                        <div class="slider-caption">
                          <div class="slider-title">Image 2</div>
                          <div class="slider-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                          tempor incididunt ut labore et dolore magna aliqua.</div>
                        </div>
                      </div>
                      <div><img alt="image" src="<?php echo base_url(); ?>assets/img/news/img10.jpg">
                        <div class="slider-caption">
                          <div class="slider-title">Image 3</div>
                          <div class="slider-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                          tempor incididunt ut labore et dolore magna aliqua.</div>
                        </div>
                      </div>
                      <div><img alt="image" src="<?php echo base_url(); ?>assets/img/news/img09.jpg">
                        <div class="slider-caption">
                          <div class="slider-title">Image 4</div>
                          <div class="slider-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                          tempor incididunt ut labore et dolore magna aliqua.</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
<?php $this->load->view('dist/_partials/footer'); ?>