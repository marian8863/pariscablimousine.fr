<!-- BLOCK#1 START DON'T CHANGE THE ORDER-->
<?php
$title = "Home | Contacts";

include_once("Head.php");
include_once("Menu.php");

?>
<!--END DON'T CHANGE THE ORDER-->

    <section class="container my-5 pt-5 pb-lg-5">
        <!-- Breadcrumb-->
        <nav class="mb-4 pt-md-3" aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark">
            <li class="breadcrumb-item"><a href="http://pariscablimousine.fr/">Home</a></li>
            <li class="breadcrumb-item active" style="color:black" aria-current="page">Contact us</li>
          </ol>
        </nav>
        <div class="row gy-4">
          <div class="col-lg-4 col-md-6">
            <div class="mb-md-5 mb-4 pb-md-4">
              <h1 class="mb-md-4 text-dark">Contact us</h1>
              <p class="mb-0 fs-lg text-dark opacity-70">Fill out the form and out team will try to get back to you within 24 hours.</p>
            </div>
            <div class="d-flex align-items-start mb-4 pb-md-3"><img class="me-3 flex-shrink-0" src="img/contact/envelope.svg" width="32" alt="Envelope icon">
              <div>
                <h3 class="h6 mb-2 pb-1 text-dark">General communication</h3>
                <p class="mb-0 text-dark"><span class="opacity-70">For general queries, including partnership opportunities, please email</span><a class="ms-1 text-nowrap" href="mailto:pariscablimo@gmail.com">pariscablimo@gmail.com</a></p>
              </div>
            </div>
            <div class="d-flex align-items-start mb-4 pb-md-3"><img class="me-3 flex-shrink-0" src="img/contact/chat.svg" width="32" alt="Chat icon">
              <div>
                <h3 class="h6 mb-2 pb-1 text-dark">General communication</h3>
                <p class="mb-0 text-dark"><span class="opacity-70">We’re here to help! If you have technical issues</span><a class="ms-1 text-nowrap" href="tel:+33 660 763 235">+33 660 763 235</a></p>
              </div>
            </div>
            <div class="d-flex align-items-start mb-4 pb-md-3"><img class="me-3 flex-shrink-0" src="img/contact/map-pin.svg" width="32" alt="Map pin icon">
              <div>
                <h3 class="h6 mb-2 pb-1 text-dark">Our headquarters</h3>
                <p class="mb-0 text-dark"><span class="opacity-70">44 Avenue Albert Sarraut 95190</span><a class="ms-1 text-nowrap" href="#map-location" data-scroll>Goussainville</a><br><span class="opacity-70">France</span></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 offset-lg-2">
            <!-- Contact form-->
            <p id="show_message_contact" style="display: none" class="text-dark">Thanks For Message,waiting for Reply.. <i class="fi-mail"></i> </p>
            <form class="needs-validation" novalidate action="javascript:void(0)" method="post" id="contact-form">
              <div class="mb-4">
                <label class="form-label text-dark" for="c_name">Full Name</label>
                <input class="form-control form-control-lg form-control-dark" id="c_name" name="c_name" type="text" required>
                <div class="invalid-feedback">Please, enter your name</div>
              </div>
              <div class="mb-4">
                <label class="form-label text-dark" for="c_email">Your Email</label>
                <input class="form-control form-control-lg form-control-dark" id="c_email" name="c_email" type="email" required>
                <div class="invalid-feedback">Please, enter your email</div>
              </div>
              <!-- <div class="mb-4">
                <label class="form-label text-dark" for="c-subject">Subject</label>
                <select class="form-select form-select-lg form-select-dark" id="c-subject" required>
                  <option value="" selected disabled>Choose subject</option>
                  <option value="Subject 1">Subject 1</option>
                  <option value="Subject 2">Subject 2</option>
                  <option value="Subject 3">Subject 3</option>
                </select>
                <div class="invalid-feedback">Please, choose subject</div>
              </div> -->
              <div class="mb-4">
                <label class="form-label text-dark" for="c_message">Message</label>
                <textarea class="form-control form-control-lg form-control-dark" id="c_message" name="c_message" rows="4" placeholder="Leave your message" required></textarea>
                <div class="invalid-feedback">Please, leave your message</div>
              </div>
              <div class="pt-2">
                <button class="btn btn-lg btn-primary w-sm-auto w-100" type="submit" id="submit" name="submit" value="submit">Submit form</button>
              </div>
            </form>
          </div>
        </div>
    </section>
      <!-- Map location-->
      <section class="container mb-5 pb-lg-5" id="map-location">
      <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=660&amp;height=258&amp;hl=en&amp;q=paris&amp;t=p&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://www.kokagames.com/fnf-friday-night-funkin-mods/">Friday Night Funkin Mods</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:258px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:258px;}.gmap_iframe {width:100%!important;height:258px!important;}</style></div>
      </section>


<!--BLOCK#2 end YOUR CODE HERE -->


<!--BLOCK#3 START DON'T CHANGE THE ORDER-->
<?php include_once("Footer.php"); ?>
<!--END DON'T CHANGE THE ORDER-->