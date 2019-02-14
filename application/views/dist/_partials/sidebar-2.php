<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand sidebar-gone-show"><a href="<?php echo base_url(); ?>dist/index">Stisla</a></div>
          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="<?php echo base_url(); ?>dist/index_0">General Dashboard</a></li>
                <li><a class="nav-link" href="<?php echo base_url(); ?>dist/index">Ecommerce Dashboard</a></li>
              </ul>
            </li>
            <li class="menu-header">Starter</li>
            <li class="dropdown <?php echo $this->uri->segment(2) == 'layout_transparent' ? 'active' : ''; ?>">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Layout</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="<?php echo base_url(); ?>dist/layout_default">Default Layout</a></li>
                <li class="<?php echo $this->uri->segment(2) == 'layout_transparent' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>dist/layout_transparent">Transparent Sidebar</a></li>
                <li><a class="nav-link" href="<?php echo base_url(); ?>dist/layout_top_navigation">Top Navigation</a></li>
              </ul>
            </li>
            <li><a class="nav-link" href="<?php echo base_url(); ?>dist/blank"><i class="far fa-square"></i> <span>Blank Page</span></a></li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Bootstrap</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="<?php echo base_url(); ?>dist/bootstrap_alert">Alert</a></li>
                <li><a class="nav-link" href="<?php echo base_url(); ?>dist/bootstrap_badge">Badge</a></li>
                <li><a class="nav-link" href="<?php echo base_url(); ?>dist/bootstrap_breadcrumb">Breadcrumb</a></li>
                <li><a class="nav-link" href="<?php echo base_url(); ?>dist/bootstrap_buttons">Buttons</a></li>
                <li><a class="nav-link" href="<?php echo base_url(); ?>dist/bootstrap_card">Card</a></li>
                <li><a class="nav-link" href="<?php echo base_url(); ?>dist/bootstrap_carousel">Carousel</a></li>
                <li><a class="nav-link" href="<?php echo base_url(); ?>dist/bootstrap_collapse">Collapse</a></li>
                <li><a class="nav-link" href="<?php echo base_url(); ?>dist/bootstrap_dropdown">Dropdown</a></li>
                <li><a class="nav-link" href="<?php echo base_url(); ?>dist/bootstrap_form">Form</a></li>
                <li><a class="nav-link" href="<?php echo base_url(); ?>dist/bootstrap_list_group">List Group</a></li>
                <li><a class="nav-link" href="<?php echo base_url(); ?>dist/bootstrap_media_object">Media Object</a></li>
                <li><a class="nav-link" href="<?php echo base_url(); ?>dist/bootstrap_modal">Modal</a></li>
                <li><a class="nav-link" href="<?php echo base_url(); ?>dist/bootstrap_nav">Nav</a></li>
                <li><a class="nav-link" href="<?php echo base_url(); ?>dist/bootstrap_navbar">Navbar</a></li>
                <li><a class="nav-link" href="<?php echo base_url(); ?>dist/bootstrap_pagination">Pagination</a></li>
                <li><a class="nav-link" href="<?php echo base_url(); ?>dist/bootstrap_popover">Popover</a></li>
                <li><a class="nav-link" href="<?php echo base_url(); ?>dist/bootstrap_progress">Progress</a></li>
                <li><a class="nav-link" href="<?php echo base_url(); ?>dist/bootstrap_table">Table</a></li>
                <li><a class="nav-link" href="<?php echo base_url(); ?>dist/bootstrap_tooltip">Tooltip</a></li>
                <li><a class="nav-link" href="<?php echo base_url(); ?>dist/bootstrap_typography">Typography</a></li>
              </ul>
            </li>
            <li class="menu-header">Stisla</li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i> <span>Components</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="<?php echo base_url(); ?>dist/components_article">Article</a></li>
                <li><a class="nav-link beep beep-sidebar" href="<?php echo base_url(); ?>dist/components_avatar">Avatar</a></li>
                <li><a class="nav-link" href="<?php echo base_url(); ?>dist/components_chat_box">Chat Box</a></li>
                <li><a class="nav-link beep beep-sidebar" href="<?php echo base_url(); ?>dist/components_empty_state">Empty State</a></li>
                <li><a class="nav-link" href="<?php echo base_url(); ?>dist/components_gallery">Gallery</a></li>
                <li><a class="nav-link beep beep-sidebar" href="<?php echo base_url(); ?>dist/components_hero">Hero</a></li>
                <li><a class="nav-link" href="<?php echo base_url(); ?>dist/components_multiple_upload">Multiple Upload</a></li>
                <li><a class="nav-link beep beep-sidebar" href="<?php echo base_url(); ?>dist/components_pricing">Pricing</a></li>
                <li><a class="nav-link" href="<?php echo base_url(); ?>dist/components_statistic">Statistic</a></li>
                <li><a class="nav-link" href="<?php echo base_url(); ?>dist/components_tab">Tab</a></li>
                <li><a class="nav-link" href="<?php echo base_url(); ?>dist/components_table">Table</a></li>
                <li><a class="nav-link" href="<?php echo base_url(); ?>dist/components_user">User</a></li>
                <li><a class="nav-link beep beep-sidebar" href="<?php echo base_url(); ?>dist/components_wizard">Wizard</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="far fa-file-alt"></i> <span>Forms</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="<?php echo base_url(); ?>dist/forms_advanced_form">Advanced Form</a></li>
                <li><a class="nav-link" href="<?php echo base_url(); ?>dist/forms_editor">Editor</a></li>
                <li><a class="nav-link" href="<?php echo base_url(); ?>dist/forms_validation">Validation</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-map-marker-alt"></i> <span>Google Maps</span></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo base_url(); ?>dist/gmaps_advanced_route">Advanced Route</a></li>
                <li><a href="<?php echo base_url(); ?>dist/gmaps_draggable_marker">Draggable Marker</a></li>
                <li><a href="<?php echo base_url(); ?>dist/gmaps_geocoding">Geocoding</a></li>
                <li><a href="<?php echo base_url(); ?>dist/gmaps_geolocation">Geolocation</a></li>
                <li><a href="<?php echo base_url(); ?>dist/gmaps_marker">Marker</a></li>
                <li><a href="<?php echo base_url(); ?>dist/gmaps_multiple_marker">Multiple Marker</a></li>
                <li><a href="<?php echo base_url(); ?>dist/gmaps_route">Route</a></li>
                <li><a href="<?php echo base_url(); ?>dist/gmaps_simple">Simple</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-plug"></i> <span>Modules</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="<?php echo base_url(); ?>dist/modules_calendar">Calendar</a></li>
                <li><a class="nav-link" href="<?php echo base_url(); ?>dist/modules_chartjs">ChartJS</a></li>
                <li><a class="nav-link" href="<?php echo base_url(); ?>dist/modules_datatables">DataTables</a></li>
                <li><a class="nav-link" href="<?php echo base_url(); ?>dist/modules_flag">Flag</a></li>
                <li><a class="nav-link" href="<?php echo base_url(); ?>dist/modules_font_awesome">Font Awesome</a></li>
                <li><a class="nav-link" href="<?php echo base_url(); ?>dist/modules_ion_icons">Ion Icons</a></li>
                <li><a class="nav-link" href="<?php echo base_url(); ?>dist/modules_owl_carousel">Owl Carousel</a></li>
                <li><a class="nav-link" href="<?php echo base_url(); ?>dist/modules_sparkline">Sparkline</a></li>
                <li><a class="nav-link" href="<?php echo base_url(); ?>dist/modules_sweet_alert">Sweet Alert</a></li>
                <li><a class="nav-link" href="<?php echo base_url(); ?>dist/modules_toastr">Toastr</a></li>
                <li><a class="nav-link" href="<?php echo base_url(); ?>dist/modules_vector_map">Vector Map</a></li>
                <li><a class="nav-link" href="<?php echo base_url(); ?>dist/modules_weather_icon">Weather Icon</a></li>
              </ul>
            </li>
            <li class="menu-header">Pages</li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="far fa-user"></i> <span>Auth</span></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo base_url(); ?>dist/auth_forgot_password">Forgot Password</a></li> 
                <li><a href="<?php echo base_url(); ?>dist/auth_login">Login</a></li> 
                <li><a href="<?php echo base_url(); ?>dist/auth_register">Register</a></li> 
                <li><a href="<?php echo base_url(); ?>dist/auth_reset_password">Reset Password</a></li> 
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-exclamation"></i> <span>Errors</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="<?php echo base_url(); ?>dist/errors_503">503</a></li> 
                <li><a class="nav-link" href="<?php echo base_url(); ?>dist/errors_403">403</a></li> 
                <li><a class="nav-link" href="<?php echo base_url(); ?>dist/errors_404">404</a></li> 
                <li><a class="nav-link" href="<?php echo base_url(); ?>dist/errors_500">500</a></li> 
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-bicycle"></i> <span>Features</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="<?php echo base_url(); ?>dist/features_activities">Activities</a></li>
                <li><a class="nav-link" href="<?php echo base_url(); ?>dist/features_post_create">Post Create</a></li>
                <li><a class="nav-link" href="<?php echo base_url(); ?>dist/features_posts">Posts</a></li>
                <li><a class="nav-link" href="<?php echo base_url(); ?>dist/features_profile">Profile</a></li>
                <li><a class="nav-link" href="<?php echo base_url(); ?>dist/features_settings">Settings</a></li>
                <li><a class="nav-link" href="<?php echo base_url(); ?>dist/features_setting_detail">Setting Detail</a></li>
                <li><a class="nav-link" href="<?php echo base_url(); ?>dist/features_tickets">Tickets</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-ellipsis-h"></i> <span>Utilities</span></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo base_url(); ?>dist/utilities_contact">Contact</a></li>
                <li><a class="nav-link" href="<?php echo base_url(); ?>dist/utilities_invoice">Invoice</a></li>
                <li><a href="<?php echo base_url(); ?>dist/utilities_subscribe">Subscribe</a></li>
              </ul>
            </li>
            <li><a class="nav-link" href="credits"><i class="fas fa-pencil-ruler"></i> <span>Credits</span></a></li>
          </ul>

          <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
              <i class="fas fa-rocket"></i> Documentation
            </a>
          </div>
        </aside>
      </div>
