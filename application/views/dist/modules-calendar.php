<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('dist/_partials/header');
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Calendar</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Modules</a></div>
              <div class="breadcrumb-item">Calendar</div>
            </div>
          </div>

          <div class="section-body">
            <h2 class="section-title">Calendar</h2>
            <p class="section-lead">
              We use 'Full Calendar' made by @fullcalendar. You can check the full documentation <a href="https://fullcalendar.io/">here</a>.
            </p>

            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Calendar</h4>
                  </div>
                  <div class="card-body">
                    <div class="fc-overflow">                            
                      <div id="myEvent"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
<?php $this->load->view('dist/_partials/footer'); ?>