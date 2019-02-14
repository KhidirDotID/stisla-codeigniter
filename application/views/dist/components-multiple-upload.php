<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('dist/_partials/header');
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Multiple Upload</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Components</a></div>
              <div class="breadcrumb-item">Multiple Upload</div>
            </div>
          </div>

          <div class="section-body">
            <h2 class="section-title">Multiple Upload</h2>
            <p class="section-lead">
              We use 'Dropzone.js' made by @Dropzone. You can check the full documentation <a href="http://www.dropzonejs.com/">here</a>.    
            </p>

            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Multiple Upload</h4>
                  </div>
                  <div class="card-body">
                    <form action="#" class="dropzone" id="mydropzone">
                      <div class="fallback">
                        <input name="file" type="file" multiple />
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
<?php $this->load->view('dist/_partials/footer'); ?>