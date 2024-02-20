<!-- BLOCK#1 START DON'T CHANGE THE ORDER-->
<?php
$title = "Home | Gallery";

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
          <li class="nav-item"><span class="nav-link d-flex align-items-center active" href="gallery.php"><i class="fi-image me-2"></i>Gallery</span></li>
          <li class="nav-item"><a class="nav-link d-flex align-items-center" href="videos.php"><i class="fi-info-circle me-2"></i>Videos</a></li>
          <li class="nav-item"><a class="nav-link d-flex align-items-center" href=""><i class="fi-edit me-2"></i>Reviews</a></li>
        </ul>
    </section>
      <!-- Gallery-->
    <section class="container overflow-auto mb-5" data-simplebar>
        <div class="row g-2 g-md-3 gallery" data-thumbnails="true" >
            <div class="col-8"><a class="gallery-item rounded rounded-md-3" href="img/gallery/11.jpeg" data-sub-html=""><img src="img/gallery/11.jpeg" alt="Gallery thumbnail"></a></div>
            <div class="col-4">
              <a class="gallery-item rounded rounded-md-3 mb-2 mb-md-3" href="img/gallery/8.jpeg" data-sub-html="">
                <img src="img/gallery/8.jpeg" alt="Gallery thumbnail">
              </a>
              <a class="gallery-item rounded rounded-md-3" href="img/gallery/6.jpeg" data-sub-html=""><img src="img/gallery/6.jpeg" alt="Gallery thumbnail"></a>
            </div>
            <div class="col-12">
                <div class="row g-2 g-md-3">
                <div class="col"><a class="gallery-item rounded-1 rounded-md-2" href="img/gallery/4.jpeg" data-sub-html=""><img src="img/gallery/4.jpeg" alt="Gallery thumbnail"></a></div>
                <div class="col"><a class="gallery-item rounded-1 rounded-md-2" href="img/gallery/5.jpeg" data-sub-html=""><img src="img/gallery/5.jpeg" alt="Gallery thumbnail"></a></div>
                <div class="col"><a class="gallery-item rounded-1 rounded-md-2" href="img/gallery/3.jpeg" data-sub-html=""><img src="img/gallery/3.jpeg" alt="Gallery thumbnail"></a></div>
                <div class="col"><a class="gallery-item rounded-1 rounded-md-2" href="img/gallery/7.jpeg" data-sub-html=""><img src="img/gallery/7.jpeg" alt="Gallery thumbnail"></a></div>
                <div class="col"><a class="gallery-item rounded-1 rounded-md-2" href="img/gallery/2.jpeg" data-sub-html=""><img src="img/gallery/2.jpeg" alt="Gallery thumbnail"></a></div>
                </div>
            </div>
            <div class="col-4"><a class="gallery-item rounded rounded-md-3 mb-2 mb-md-3" href="img/gallery/9.jpeg" data-sub-html=""><img src="img/gallery/9.jpeg" alt="Gallery thumbnail"></a><a class="gallery-item rounded rounded-md-3" href="img/gallery/10.jpeg" data-sub-html=""><img src="img/gallery/10.jpeg" alt="Gallery thumbnail"></a></div>
            <div class="col-8"><a class="gallery-item rounded rounded-md-3" href="img/gallery/1.jpeg" data-sub-html=""><img src="img/gallery/1.jpeg" alt="Gallery thumbnail"></a></div>
            <div class="col-12">
                <div class="row g-2 g-md-3">
                <div class="col"><a class="gallery-item rounded-1 rounded-md-2" href="img/gallery/12.jpeg" data-sub-html=""><img src="img/gallery/12.jpeg" alt="Gallery thumbnail"></a></div>
                <div class="col"><a class="gallery-item rounded-1 rounded-md-2" href="img/gallery/13.jpeg" data-sub-html=""><img src="img/gallery/13.jpeg" alt="Gallery thumbnail"></a></div>
                <div class="col"><a class="gallery-item rounded-1 rounded-md-2" href="img/gallery/14.jpeg" data-sub-html=""><img src="img/gallery/14.jpeg" alt="Gallery thumbnail"></a></div>
                <div class="col"><a class="gallery-item rounded-1 rounded-md-2" href="img/gallery/15.jpeg" data-sub-html=""><img src="img/gallery/15.jpeg" alt="Gallery thumbnail"></a></div>
                <div class="col"><a class="gallery-item rounded-1 rounded-md-2" href="img/gallery/16.jpeg" data-sub-html=""><img src="img/gallery/16.jpeg" alt="Gallery thumbnail"></a></div>
                </div>
            </div>
            <div class="col-12">
                <div class="row g-2 g-md-3">
                <div class="col"><a class="gallery-item rounded-1 rounded-md-2" href="img/gallery/17.jpeg" data-sub-html=""><img src="img/gallery/17.jpeg" alt="Gallery thumbnail"></a></div>
                <div class="col"><a class="gallery-item rounded-1 rounded-md-2" href="img/gallery/18.jpeg" data-sub-html=""><img src="img/gallery/18.jpeg" alt="Gallery thumbnail"></a></div>
                <div class="col"><a class="gallery-item rounded-1 rounded-md-2" href="img/gallery/19.jpeg" data-sub-html=""><img src="img/gallery/19.jpeg" alt="Gallery thumbnail"></a></div>
                <div class="col"><a class="gallery-item rounded-1 rounded-md-2" href="img/gallery/20.jpeg" data-sub-html=""><img src="img/gallery/20.jpeg" alt="Gallery thumbnail"></a></div>
                <div class="col"><a class="gallery-item rounded-1 rounded-md-2" href="img/gallery/21.jpeg" data-sub-html=""><img src="img/gallery/21.jpeg" alt="Gallery thumbnail"></a></div>
                </div>
            </div>
            <div class="col-12">
                <div class="row g-2 g-md-3">
                <div class="col"><a class="gallery-item rounded-1 rounded-md-2" href="img/gallery/22.jpeg" data-sub-html=""><img src="img/gallery/22.jpeg" alt="Gallery thumbnail"></a></div>
                <div class="col"><a class="gallery-item rounded-1 rounded-md-2" href="img/gallery/23.jpeg" data-sub-html=""><img src="img/gallery/23.jpeg" alt="Gallery thumbnail"></a></div>
                <div class="col"><a class="gallery-item rounded-1 rounded-md-2" href="img/gallery/24.jpeg" data-sub-html=""><img src="img/gallery/24.jpeg" alt="Gallery thumbnail"></a></div>
                <div class="col"><a class="gallery-item rounded-1 rounded-md-2" href="img/gallery/25.jpeg" data-sub-html=""><img src="img/gallery/25.jpeg" alt="Gallery thumbnail"></a></div>
                <div class="col"><a class="gallery-item rounded-1 rounded-md-2" href="img/gallery/26.jpeg" data-sub-html=""><img src="img/gallery/26.jpeg" alt="Gallery thumbnail"></a></div>
                </div>
            </div>
            <div class="col-12">
                <div class="row g-2 g-md-3">
                <div class="col"><a class="gallery-item rounded-1 rounded-md-2" href="img/gallery/27.jpeg" data-sub-html=""><img src="img/gallery/27.jpeg" alt="Gallery thumbnail"></a></div>
                <div class="col"><a class="gallery-item rounded-1 rounded-md-2" href="img/gallery/28.jpeg" data-sub-html=""><img src="img/gallery/28.jpeg" alt="Gallery thumbnail"></a></div>
                <div class="col"><a class="gallery-item rounded-1 rounded-md-2" href="img/gallery/29.jpeg" data-sub-html=""><img src="img/gallery/29.jpeg" alt="Gallery thumbnail"></a></div>
                <div class="col"><a class="gallery-item rounded-1 rounded-md-2" href="img/gallery/30.jpeg" data-sub-html=""><img src="img/gallery/30.jpeg" alt="Gallery thumbnail"></a></div>
                <div class="col"><a class="gallery-item rounded-1 rounded-md-2" href="img/gallery/31.jpeg" data-sub-html=""><img src="img/gallery/31.jpeg" alt="Gallery thumbnail"></a></div>
                </div>
            </div>
            <div class="col-12">
                <div class="row g-2 g-md-3">
                <div class="col"><a class="gallery-item rounded-1 rounded-md-2" href="img/gallery/32.jpeg" data-sub-html=""><img src="img/gallery/32.jpeg" alt="Gallery thumbnail"></a></div>
                <div class="col"><a class="gallery-item rounded-1 rounded-md-2" href="img/gallery/33.jpeg" data-sub-html=""><img src="img/gallery/33.jpeg" alt="Gallery thumbnail"></a></div>
                <div class="col"><a class="gallery-item rounded-1 rounded-md-2" href="img/gallery/34.jpeg" data-sub-html=""><img src="img/gallery/34.jpeg" alt="Gallery thumbnail"></a></div>
                <div class="col"><a class="gallery-item rounded-1 rounded-md-2" href="img/gallery/35.jpeg" data-sub-html=""><img src="img/gallery/35.jpeg" alt="Gallery thumbnail"></a></div>
                <div class="col"><a class="gallery-item rounded-1 rounded-md-2" href="img/gallery/36.jpeg" data-sub-html=""><img src="img/gallery/36.jpeg" alt="Gallery thumbnail"></a></div>
                </div>
            </div>
            <div class="col-8"><a class="gallery-item rounded rounded-md-3" href="img/gallery/37.jpeg" data-sub-html=""><img src="img/gallery/37.jpeg" alt="Gallery thumbnail"></a></div>
            <div class="col-4"><a class="gallery-item rounded rounded-md-3 mb-2 mb-md-3" href="img/gallery/38.jpeg" data-sub-html=""><img src="img/gallery/38.jpeg" alt="Gallery thumbnail"></a><a class="gallery-item rounded rounded-md-3" href="img/gallery/39.jpeg" data-sub-html=""><img src="img/gallery/39.jpeg" alt="Gallery thumbnail"></a></div>
            <div class="col-12">
                <div class="row g-2 g-md-3">
                <div class="col"><a class="gallery-item rounded-1 rounded-md-2" href="img/gallery/40.jpeg" data-sub-html=""><img src="img/gallery/40.jpeg" alt="Gallery thumbnail"></a></div>
                <div class="col"><a class="gallery-item rounded-1 rounded-md-2" href="img/gallery/41.jpeg" data-sub-html=""><img src="img/gallery/41.jpeg" alt="Gallery thumbnail"></a></div>
                <div class="col"><a class="gallery-item rounded-1 rounded-md-2" href="img/gallery/42.jpeg" data-sub-html=""><img src="img/gallery/42.jpeg" alt="Gallery thumbnail"></a></div>
                </div>
            </div>
        </div>
    </section>


<!--BLOCK#2 end YOUR CODE HERE -->


<!--BLOCK#3 START DON'T CHANGE THE ORDER-->
<?php include_once("Footer.php"); ?>
<!--END DON'T CHANGE THE ORDER-->