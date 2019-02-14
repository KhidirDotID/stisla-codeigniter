<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('dist/_partials/header');
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Draggable Marker</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Google Maps</a></div>
              <div class="breadcrumb-item">Draggable Marker</div>
            </div>
          </div>

          <div class="section-body">
            <h2 class="section-title">Draggable Marker</h2>
            <p class="section-lead">
              Here is a simple example using the map, we use the plugin <code>gmaps.js</code> made by <a href="https://github.com/hpneo" target="_blank">@hpneo</a>. You can learn more about this plugin <a href="https://github.com/hpneo/gmaps" target="_blank">here</a>.
            </p>

            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Draggable Marker</h4>
                  </div>
                  <div class="card-body">
                    <div class="row mb-4">
                      <div class="col-12 col-md-6 col-lg-4">
                        <div class="input-group">
                          <input type="text" class="form-control" id="input-lat" placeholder="Latitude">
                          <input type="text" class="form-control" id="input-lng" placeholder="Longitude">
                        </div>
                      </div>
                    </div>
                    <div class="alert alert-info">
                      You can drag the marker, change the value of longitude and latitude at the above input and click on the desired position on the map to change the position of the marker.
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