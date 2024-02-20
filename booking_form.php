<!-- BLOCK#1 START DON'T CHANGE THE ORDER-->
<?php
$title = "Home | Booking Details";

include_once("Head.php");
include_once("Menu.php");

$amo=$pp=$dp=$gpa=null;
if(isset($_GET['get_p_place'])&&isset($_GET['get_d_place'])&&isset($_GET['get_pa'])&&isset($_GET['get_amount'])){
    $pp=$_GET['get_p_place'];
    $dp=$_GET['get_d_place'];
    $gpa=$_GET['get_pa'];
    $amo=$_GET['get_amount'];
}
?>

<!--END DON'T CHANGE THE ORDER-->

    <div class="modal fade" id="preview-modal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen" role="document">
          <div class="modal-content">
            <div class="modal-header d-block d-sm-flex">
              <h3 class="h5 text-muted fw-normal modal-title d-none d-sm-block">Property preview</h3>
              <div class="d-flex align-items-center"><a class="btn btn-primary btn-sm me-4" href="real-estate-property-promotion.html">Save and continue</a><span class="fs-xs text-muted ms-auto me-2">[ESC]</span>
                <button class="btn-close ms-0" type="button" data-bs-dismiss="modal"></button>
              </div>
            </div>
            <div class="modal-body p-0">
              <div class="container mt-2 mt-sm-0 py-4 py-sm-5">
                <h1 class="h2 mb-2">Pine Apartments</h1>
                <p class="mb-2 pb-1 fs-lg">28 Jackson Ave Long Island City, NY 67234</p>
                <ul class="d-flex mb-4 list-unstyled">
                  <li class="me-3 pe-3 border-end"><b class="me-1">4</b><i class="fi-bed mt-n1 lead align-middle text-muted"></i></li>
                  <li class="me-3 pe-3 border-end"><b class="me-1">2</b><i class="fi-bath mt-n1 lead align-middle text-muted"></i></li>
                  <li class="me-3 pe-3 border-end"><b class="me-1">2</b><i class="fi-car mt-n1 lead align-middle text-muted"></i></li>
                  <li><b>56 </b>sq.m</li>
                </ul>
                <div class="overflow-auto pb-3 px-2 mx-n2 mb-4" data-simplebar>
                  <div class="row g-2 g-md-3" style="min-width: 30rem;">
                    <div class="col-8"><img class="rounded rounded-md-3" src="img/real-estate/single/01.jpg" alt="Gallery thumbnail"></div>
                    <div class="col-4"><img class="rounded rounded-md-3 mb-2 mb-md-3" src="img/real-estate/single/02.jpg" alt="Gallery thumbnail"><img class="rounded rounded-md-3" src="img/real-estate/single/03.jpg" alt="Gallery thumbnail"></div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-7 mb-md-0 mb-4"><span class="badge bg-success me-2 mb-3">Verified</span><span class="badge bg-info me-2 mb-3">New</span>
                    <h2 class="h3 mb-4 pb-4 border-bottom">$2,000<span class="d-inline-block ms-1 fs-base fw-normal text-body">/month</span></h2>
                    <!-- Overview-->
                    <div class="mb-4 pb-md-3">
                      <h3 class="h4">Overview</h3>
                      <p class="mb-1">Lorem tincidunt lectus vitae id vulputate diam quam. Imperdiet non scelerisque turpis sed etiam ultrices. Blandit mollis dignissim egestas consectetur porttitor. Vulputate dolor pretium, dignissim eu augue sit ut convallis. Lectus est, magna urna feugiat sed ultricies sed in lacinia. Fusce potenti sit id pharetra vel ornare. Vestibulum sed tellus ullamcorper arcu.</p>
                      <div class="collapse" id="seeMoreOverview">
                        <p class="mb-1">Asperiores eos molestias, aspernatur assumenda vel corporis ex, magni excepturi totam exercitationem quia inventore quod amet labore impedit quae distinctio? Officiis blanditiis consequatur alias, atque, sed est incidunt accusamus repudiandae tempora repellendus obcaecati delectus ducimus inventore tempore harum numquam autem eligendi culpa.</p>
                      </div><a class="collapse-label collapsed" href="#seeMoreOverview" data-bs-toggle="collapse" data-bs-label-collapsed="Show more" data-bs-label-expanded="Show less" role="button" aria-expanded="false" aria-controls="seeMoreOverview"></a>
                    </div>
                    <!-- Property Details-->
                    <div class="mb-4 pb-md-3">
                      <h3 class="h4">Property Details</h3>
                      <ul class="list-unstyled mb-0">
                        <li><b>Type: </b>apartment</li>
                        <li><b>Apartment area: </b>56 sq.m</li>
                        <li><b>Built: </b>2015</li>
                        <li><b>Bedrooms: </b>4</li>
                        <li><b>Bathrooms: </b>2</li>
                        <li><b>Parking places: </b>2</li>
                        <li><b>Pets allowed: </b>No</li>
                      </ul>
                    </div>
                    <!-- Amenities-->
                    <div class="mb-sm-3">
                      <h3 class="h4">Amenities</h3>
                      <ul class="list-unstyled row row-cols-lg-3 row-cols-md-2 row-cols-1 gy-1 mb-1 text-nowrap">
                        <li class="col"><i class="fi-wifi mt-n1 me-2 fs-lg align-middle"></i>WiFi</li>
                        <li class="col"><i class="fi-thermometer mt-n1 me-2 fs-lg align-middle"></i>Heating</li>
                        <li class="col"><i class="fi-dish mt-n1 me-2 fs-lg align-middle"></i>Dishwasher</li>
                        <li class="col"><i class="fi-parking mt-n1 me-2 fs-lg align-middle"></i>Parking place</li>
                        <li class="col"><i class="fi-snowflake mt-n1 me-2 fs-lg align-middle"></i>Air conditioning</li>
                        <li class="col"><i class="fi-iron mt-n1 me-2 fs-lg align-middle"></i>Iron</li>
                        <li class="col"><i class="fi-tv mt-n1 me-2 fs-lg align-middle"></i>TV</li>
                        <li class="col"><i class="fi-laundry mt-n1 me-2 fs-lg align-middle"></i>Laundry</li>
                        <li class="col"><i class="fi-cctv mt-n1 me-2 fs-lg align-middle"></i>Security cameras</li>
                      </ul>
                      <div class="collapse" id="seeMoreAmenities">
                        <ul class="list-unstyled row row-cols-lg-3 row-cols-md-2 row-cols-1 gy-1 mb-1 text-nowrap">
                          <li class="col"><i class="fi-no-smoke mt-n1 me-2 fs-lg align-middle"></i>No smocking</li>
                          <li class="col"><i class="fi-pet mt-n1 me-2 fs-lg align-middle"></i>Cats</li>
                          <li class="col"><i class="fi-swimming-pool mt-n1 me-2 fs-lg align-middle"></i>Swimming pool</li>
                          <li class="col"><i class="fi-double-bed mt-n1 me-2 fs-lg align-middle"></i>Double bed</li>
                          <li class="col"><i class="fi-bed mt-n1 me-2 fs-lg align-middle"></i>Single bed</li>
                        </ul>
                      </div><a class="collapse-label collapsed" href="#seeMoreAmenities" data-bs-toggle="collapse" data-bs-label-collapsed="Show more" data-bs-label-expanded="Show less" role="button" aria-expanded="false" aria-controls="seeMoreAmenities"></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
      <!-- Page container-->
    <div class="container mt-5 mb-md-4 py-5">
        <div class="row">
          <!-- Page content-->
            <div class="col-lg-8">
                <!-- Breadcrumb-->
                <nav class="mb-3 pt-md-3" aria-label="Breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="real-estate-home-v1.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Booking Details</li>
                </ol>
                </nav>
                <!-- Title-->
                <!-- <div class="mb-4">
                <h1 class="h2 mb-0 text-white">Booking Form </h1>
                <div class="d-lg-none pt-3 mb-2">65% content filled</div>
                <div class="progress d-lg-none mb-4" style="height: .25rem;">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                </div> -->

                <!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
  <li class="nav-item">
    <a href="#home1" class="nav-link active" data-bs-toggle="tab" role="tab">
      <i class="fi-car me-2"></i>
      MERCEDES-BENZ Classe V
    </a>
  </li>
  <li class="nav-item">
    <a href="#profile1" class="nav-link" data-bs-toggle="tab" role="tab">
      <i class="fi-car me-2"></i>
      E class / Tesla Y
    </a>
  </li>
  <li class="nav-item dropdown">
    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button">Dropdown</a>
    <div class="dropdown-menu my-1">
      <a href="#messages1" class="dropdown-item" data-bs-toggle="tab" role="tab">Van Package</a>
      <a href="#settings1" class="dropdown-item" data-bs-toggle="tab" role="tab">E class or Tesla Y Packages</a>
    </div>
  </li>
</ul>

<!-- Tabs content -->
<div class="tab-content">
  <div class="tab-pane fade show active" id="home1" role="tabpanel">
    <?php include_once("t6_booking_form.php"); ?>
  </div>
  <div class="tab-pane fade" id="profile1" role="tabpanel">
    <?php include_once("e_class_booking_form.php"); ?>
  </div>
  <div class="tab-pane fade" id="messages1" role="tabpanel">
    <p>
        Multivan Volkswagen T6 Package updating
    </p>
  </div>
  <div class="tab-pane fade" id="settings1" role="tabpanel">
    <p>
      Eclass Updating
    </p>
  </div>
</div>

                

            </div>
         
        </div>
    </div>

<!--BLOCK#3 START DON'T CHANGE THE ORDER-->
<?php include_once("Footer.php"); ?>
<!--END DON'T CHANGE THE ORDER-->