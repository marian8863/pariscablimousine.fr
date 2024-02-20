<!-- BLOCK#1 START DON'T CHANGE THE ORDER-->
<?php
$title = "Home | Contact";

include_once("Head.php");
include_once("Menu.php");

?>
<!--END DON'T CHANGE THE ORDER-->

    <section class="container pt-5 mt-5">
        <!-- Breadcrumb-->
        <nav class="mb-3 pt-md-3" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="http://pariscablimousine.fr/">Home</a></li>
            <li class="breadcrumb-item active" style="color:black" aria-current="page">Our Gallery</li>
          </ol>
        </nav>
        <div class="d-sm-flex align-items-center justify-content-between mb-4 pb-sm-2">
          <h1 class="h2 me-3 mb-sm-0">Our Valuable Customers</h1>
          <div class="text-nowrap">
            <button class="btn btn-icon btn-light-primary btn-xs shadow-sm rounded-circle" type="button" data-bs-toggle="tooltip" title="Add to Wishlist"><i class="fi-heart"></i></button>
            <div class="dropdown d-inline-block" data-bs-toggle="tooltip" title="Share">
              <button class="btn btn-icon btn-light-primary btn-xs shadow-sm rounded-circle ms-2" type="button" data-bs-toggle="dropdown"><i class="fi-share"></i></button>
              <div class="dropdown-menu dropdown-menu-end my-1">
                <button class="dropdown-item" type="button"><i class="fi-facebook fs-base opacity-75 me-2"></i>Facebook</button>
                <button class="dropdown-item" type="button"><i class="fi-twitter fs-base opacity-75 me-2"></i>Twitter</button>
                <button class="dropdown-item" type="button"><i class="fi-instagram fs-base opacity-75 me-2"></i>Instagram</button>
              </div>
            </div>
          </div>
        </div>
        <!-- Nav pills-->
        <ul class="nav nav-pills border-bottom pb-3 mb-4">
          <li class="nav-item"><a class="nav-link d-flex align-items-center " href="gallery.php"><i class="fi-image me-2"></i>Gallery</a></li>
          <li class="nav-item"><a class="nav-link d-flex align-items-center active" href="videos.php"><i class="fi-info-circle me-2"></i>Video</a></li>
          <li class="nav-item"><a class="nav-link d-flex align-items-center" href=""><i class="fi-edit me-2"></i>Reviews</a></li>
        </ul>
    </section>
      <!-- Gallery-->
    <section class="container">
        <div class="row" >

         
            <div class="col-4">
              <video controls width="400">
                <source src="img/city-guide/single/v1.mp4" type="video/mp4">
                <!-- <source src="mov_bbb.ogg" type="video/ogg"> -->
                Your browser does not support HTML video.
              </video>
            </div>
            <div class="col-4">
              <video controls width="400">
                <source src="img/city-guide/single/v2.mp4" type="video/mp4">
                <!-- <source src="mov_bbb.ogg" type="video/ogg"> -->
                Your browser does not support HTML video.
              </video>
            </div>

            <div class="col-4">
              <video controls  width="400">
                <source src="img/city-guide/single/v3.mp4" type="video/mp4">
                <!-- <source src="mov_bbb.ogg" type="video/ogg"> -->
                Your browser does not support HTML video.
              </video>
            </div>

        </div>
    </section>


<!--BLOCK#2 end YOUR CODE HERE -->


<!--BLOCK#3 START DON'T CHANGE THE ORDER-->
<?php include_once("Footer.php"); ?>
<!--END DON'T CHANGE THE ORDER-->