<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('dist/_partials/header');
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Geocoding</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Google Maps</a></div>
              <div class="breadcrumb-item">Geocoding</div>
            </div>
          </div>

          <div class="section-body">
            <h2 class="section-title">Geocoding</h2>
            <p class="section-lead">
              Here is a simple example using the map, we use the plugin <code>gmaps.js</code> made by <a href="https://github.com/hpneo" target="_blank">@hpneo</a>. You can learn more about this plugin <a href="https://github.com/hpneo/gmaps" target="_blank">here</a>.
            </p>

            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Geocoding</h4>
                  </div>
                  <div class="card-body">
                    <div class="row mb-4">
                      <div class="col-4 col-12 col-md-6 col-lg-4">
                        <form id="search-form">
                          <div class="input-group">
                            <input type="text" id="address" class="form-control" placeholder="Enter your address">
                            <div class="input-group-append">
                              <button class="btn btn-primary">Search</button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                    <div class="alert alert-info">
                      You can type the destination address in the form above then the marker will appear on the map according to your address.
                    </div>
                    <div id="map" data-height="400"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
<?php $this->load->view('dist/_partials/footer'); ?>