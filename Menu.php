    <!-- Google Tag Manager (noscript)-->
    <noscript>
      <iframe src="http://www.googletagmanager.com/ns.html?id=GTM-WKV3GT5" height="0" width="0" style="display: none; visibility: hidden;"></iframe>
    </noscript>
    <!-- Demo switcher (offcanvas)-->
    <a  href="https://api.whatsapp.com/send?phone=33660763235&text=&source=&data=&app_absent="   target="_blank" class="btn btn-icon btn-light rounded-circle shadow position-fixed top-50 end-0 translate-middle-y me-3" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Contact Whatsapp" style="z-index: 1035;"><span class="d-flex align-items-center justify-content-center position-absolute top-0 start-0 w-100 h-100 rounded-circle" data-bs-toggle="offcanvas" ><i class="fi-whatsapp"></i></span></a>
    
    <!-- Page loading spinner-->
    <div class="page-loading active">
      <div class="page-loading-inner">
        <div class="page-spinner"></div><span>Loading...</span>
      </div>
    </div>
    <main class="page-wrapper">
      <!-- Sign In Modal-->
    <div class="modal fade" id="signin-modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered p-2 my-0 mx-auto" style="max-width: 950px;">
          <div class="modal-content bg-dark border-light">
            <div class="modal-body px-0 py-2 py-sm-0">
              <button class="btn-close btn-close-white position-absolute top-0 end-0 mt-3 me-3" type="button" data-bs-dismiss="modal"></button>
              <div class="row mx-0 align-items-center">
                <div class="col-md-6 border-end-md border-light p-4 p-sm-5">
                  <h2 class="h3 text-light mb-4 mb-sm-5">Hey there!<br>Welcome back.</h2><img class="d-block mx-auto" src="img/signin-modal/signin-dark.svg" width="344" alt="Illustartion">
                  <div class="text-light mt-4 mt-sm-5"><span class="opacity-60">Don't have an account? </span><a class="text-light" href="#signup-modal" data-bs-toggle="modal" data-bs-dismiss="modal">Sign up here</a></div>
                </div>
                <div class="col-md-6 px-4 pt-2 pb-4 px-sm-5 pb-sm-5 pt-md-5"><a class="btn btn-outline-info w-100 mb-3" href="#"><i class="fi-google fs-lg me-1"></i>Sign in with Google</a><a class="btn btn-outline-info w-100 mb-3" href="#"><i class="fi-facebook fs-lg me-1"></i>Sign in with Facebook</a>
                  <div class="d-flex align-items-center py-3 mb-3">
                    <hr class="hr-light w-100">
                    <div class="text-light opacity-70 px-3">Or</div>
                    <hr class="hr-light w-100">
                  </div>
                  <form class="needs-validation" novalidate>
                    <div class="mb-4">
                      <label class="form-label text-light mb-2" for="signin-email">Email address</label>
                      <input class="form-control form-control-light" type="email" id="signin-email" placeholder="Enter your email" required>
                    </div>
                    <div class="mb-4">
                      <div class="d-flex align-items-center justify-content-between mb-2">
                        <label class="form-label text-light mb-0" for="signin-password">Password</label><a class="fs-sm text-light" href="#">Forgot password?</a>
                      </div>
                      <div class="password-toggle">
                        <input class="form-control form-control-light" type="password" id="signin-password" placeholder="Enter password" required>
                        <label class="password-toggle-btn" aria-label="Show/hide password">
                          <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                        </label>
                      </div>
                    </div>
                    <button class="btn btn-primary btn-lg w-100" type="submit">Sign in         </button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
      <!-- Sign Up Modal-->
    <div class="modal fade" id="signup-modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered p-2 my-0 mx-auto" style="max-width: 950px;">
          <div class="modal-content bg-dark border-light">
            <div class="modal-body px-0 py-2 py-sm-0">
              <button class="btn-close btn-close-white position-absolute top-0 end-0 mt-3 me-3" type="button" data-bs-dismiss="modal"></button>
              <div class="row mx-0 align-items-center">
                <div class="col-md-6 border-end-md border-light p-4 p-sm-5">
                  <h2 class="h3 text-light mb-4 mb-sm-5">Join PCL.<br>Get premium benefits:</h2>
                  <ul class="list-unstyled mb-4 mb-sm-5">
                    <li class="d-flex mb-2"><i class="fi-check-circle text-primary mt-1 me-2"></i><span class="text-light">Add and promote your listings</span></li>
                    <li class="d-flex mb-2"><i class="fi-check-circle text-primary mt-1 me-2"></i><span class="text-light">Easily manage your wishlist</span></li>
                    <li class="d-flex mb-0"><i class="fi-check-circle text-primary mt-1 me-2"></i><span class="text-light">Leave reviews</span></li>
                  </ul><img class="d-block mx-auto" src="img/signin-modal/signup-dark.svg" width="344" alt="Illustartion">
                  <div class="text-light mt-sm-4 pt-md-3"><span class="opacity-60">Already have an account? </span><a class="text-light" href="#signin-modal" data-bs-toggle="modal" data-bs-dismiss="modal">Sign in</a></div>
                </div>
                <div class="col-md-6 px-4 pt-2 pb-4 px-sm-5 pb-sm-5 pt-md-5"><a class="btn btn-outline-info w-100 mb-3" href="#"><i class="fi-google fs-lg me-1"></i>Sign in with Google</a><a class="btn btn-outline-info w-100 mb-3" href="#"><i class="fi-facebook fs-lg me-1"></i>Sign in with Facebook</a>
                  <div class="d-flex align-items-center py-3 mb-3">
                    <hr class="hr-light w-100">
                    <div class="text-light opacity-70 px-3">Or</div>
                    <hr class="hr-light w-100">
                  </div>
                  <form class="needs-validation" novalidate>
                    <div class="mb-4">
                      <label class="form-label text-light" for="signup-name">Full name</label>
                      <input class="form-control form-control-light" type="text" id="signup-name" placeholder="Enter your full name" required>
                    </div>
                    <div class="mb-4">
                      <label class="form-label text-light" for="signup-email">Email address</label>
                      <input class="form-control form-control-light" type="email" id="signup-email" placeholder="Enter your email" required>
                    </div>
                    <div class="mb-4">
                      <label class="form-label text-light" for="signup-password">Password <span class='fs-sm opacity-50'>min. 8 char</span></label>
                      <div class="password-toggle">
                        <input class="form-control form-control-light" type="password" id="signup-password" minlength="8" required>
                        <label class="password-toggle-btn" aria-label="Show/hide password">
                          <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                        </label>
                      </div>
                    </div>
                    <div class="mb-4">
                      <label class="form-label text-light" for="signup-password-confirm">Confirm password</label>
                      <div class="password-toggle">
                        <input class="form-control form-control-light" type="password" id="signup-password-confirm" minlength="8" required>
                        <label class="password-toggle-btn" aria-label="Show/hide password">
                          <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                        </label>
                      </div>
                    </div>
                    <div class="form-check form-check-light mb-4">
                      <input class="form-check-input" type="checkbox" id="agree-to-terms" required>
                      <label class="form-check-label" for="agree-to-terms"><span class='opacity-70'>By joining, I agree to the</span> <a href='#' class='text-light'>Terms of use</a> <span class='opacity-70'>and</span> <a href='#' class='text-light'>Privacy policy</a></label>
                    </div>
                    <button class="btn btn-primary btn-lg w-100" type="submit">Sign up         </button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
      <!-- booking now-->

      <div class="modal fade" id="booking-modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered p-2 my-0 mx-auto">
          <div class="modal-content mb-4 p-2 shadow-sm  bg-white border-light">
            <div class="modal-body px-0 py-2 py-sm-0">
              <button class="btn-close btn-close-black position-absolute top-0 end-0 mt-3 me-3" type="button" data-bs-dismiss="modal"></button>
                
                    <!-- Place info-->
                    <div class="d-flex align-items-start mb-3 pb-2 border-bottom"><img src="img/logo/logo-dark1.png" width="100" alt="Thumbnail">
                      <div class="ps-2 ms-1">
                        <h3 class="h5 mb-2"> Paris Cab Limouine</h3>
                        <ul class="list-unstyled d-flex flex-wrap fs-sm">
                          <li class="me-2 mb-1 pe-1"><i class="fi-star-filled mt-n1 me-1 text-warning align-middle opacity-70"></i><b>4.9 </b>(48)</li>
                          <li class="me-2 mb-1 pe-1"><i class="fi-wallet mt-n1 me-1 align-middle opacity-70"></i>$$</li>
                          <li class="me-2 mb-1 pe-1"><i class="fi-map-pin mt-n1 me-1 align-middle opacity-70"></i>44 Avenue Albert Sarraut 95190 Goussainville France</li>
                        </ul>
                      </div>
                    </div>
                    <!-- Place contacts-->
                    <div class="mb-3 pb-3 border-bottom">
                      <h4 class="h5 mb-2">Contacts:</h4>
                      <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a class="nav-link d-inline-block p-0 fw-normal d-inline-flex align-items-start" href="https://api.whatsapp.com/send?phone=33660763235&text=&source=&data=&app_absent=" target="_blank"><i class="fi-phone mt-1 me-2 align-middle opacity-70"></i>+33 660 763 235</a></li>
                        <li class="nav-item mb-2"><a class="nav-link p-0 fw-normal d-flex align-items-start" href="mailto:pariscablimo@gmail.com"><i class="fi-mail mt-1 me-2 align-middle opacity-70"></i>pariscablimo@gmail.com</a></li>
                        <li class="nav-item"><a class="nav-link p-0  fw-normal d-flex align-items-start" href="booking_form.php"><i class="fi-pencil mt-1 me-2 align-middle opacity-70"></i>Book on Application</a></li>
                      </ul>
                    </div>
                    <!-- Place pricing
                    <div class="mb-3 pb-4 border-bottom">
                      <div class="row row-cols-1">
                        <div class="col mb-3">
                          <h4 class="h5 mb-0"><span class="fs-4">$50-100&nbsp;</span><span class="fs-base fw-normal text-body">/night</span></h4>
                        </div>
                        <div class="col"><a class="btn btn-primary btn-lg rounded-pill w-sm-auto w-100" href="#">Book now<i class="fi-chevron-right fs-sm ms-2"></i></a></div>
                      </div>
                    </div> -->
                    <!-- Place following-->
                    <div class="d-flex align-items-center">
                      <h4 class="h5 mb-0 me-3">Follow:</h4>
                      <div class="text-nowrap"><a class="btn btn-icon btn-light-primary btn-xs shadow-sm rounded-circle me-2" href="#"><i class="fi-facebook"></i></a><a class="btn btn-icon btn-light-primary btn-xs shadow-sm rounded-circle me-2" href="#"><i class="fi-instagram"></i></a><a class="btn btn-icon btn-light-primary btn-xs shadow-sm rounded-circle" href="#"><i class="fi-twitter"></i></a></div>
                    </div>
                  </div>
                </div>
        </div>
      </div>
            <!-- Navbar-->
    <header class="navbar navbar-expand-lg bg-dark fixed-top" data-scroll-header>
        <div class="container"><a class="navbar-brand me-3 me-xl-4" href="https://pariscablimousine.fr/"><img class="d-block" src="img/logo/logo-light1.png" width="116" alt="PCI"></a>
          <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" ><span class="fi-align-justify" style="color:white"></span></button><a class="btn btn-link btn-light btn-sm d-none d-lg-block order-lg-3" href="#signin-modal" data-bs-toggle="modal"><i class="fi-user me-2"></i>Sign in</a><a class="btn btn-primary btn-sm ms-2 order-lg-3" href="#booking-modal" data-bs-toggle="modal"><i class="fi-plus me-2"></i>Book Now</a>
          <div class="collapse navbar-collapse order-lg-2" id="navbarNav">
            <ul class="navbar-nav navbar-nav-scroll" style="max-height: 35rem;">

              <!-- Menu items-->
              <li class="nav-item active"><a class="nav-link text-white" href="http://pariscablimousine.fr/">Home</a></li>
              <!-- <li class="nav-item"><a class="nav-link text-white" href="about.php">About</a></li> -->
              <li class="nav-item dropdown active"><a class="nav-link text-white dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Place to see </a>
                <ul class="dropdown-menu dropdown-menu-dark">
                  <li><a class="dropdown-item" href="our_monuments.php">Our Monuments </a></li>
                  <li><a class="dropdown-item" href="museums.php">Museums</a></li>
                  <li><a class="dropdown-item" href="paris-by-night.php">Paris by Night</a></li>
                  <li><a class="dropdown-item" href="Out_of_paris.php">Out of Paris</a></li>
                  <li><a class="dropdown-item" href="#Transit-modal" data-bs-toggle="modal">Transit Tour </a></li>
                </ul>
              </li>
              <!-- <li class="nav-item"><a class="nav-link text-white" href="blog.php">Blog</a></li> -->
              <li class="nav-item"><a class="nav-link text-white" href="gallery.php">Gallery</a></li>
              <li class="nav-item"><a class="nav-link text-white" href="rates.php">Rates</a></li>
              <li class="nav-item"><a class="nav-link text-white" href="privacy_policy.php">Our terms of Use</a></li>
              <li class="nav-item"><a class="nav-link text-white" href="contact.php">Contacts</a></li>
              <li class="nav-item d-lg-none"><a class="nav-link" href="#signin-modal" data-bs-toggle="modal"><i class="fi-user me-2"></i>Sign in</a></li>
            </ul>
          </div>
        </div>
    </header>