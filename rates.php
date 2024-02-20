<!-- BLOCK#1 START DON'T CHANGE THE ORDER-->
<?php
$title = "Home | Rates";

include_once("Head.php");
include_once("Menu.php");



?>
<style>
td:hover {
  /* background-color: #000000; */
}
/* a {
  
} */

.table_eff,a {
        color: #000000;
        -webkit-transition: color 1s; /* For Safari 3.0 to 6.0 */
        transition: color 1s; /* For modern browsers */
        text-decoration: none !important;
    }
.table_eff a:hover {
    color: #ffffff;
    background-color: #fd5631;

}
</style>
<!--END DON'T CHANGE THE ORDER-->

    <section class="bg-dark py-5">
        <div class="container pt-5 pb-5">
          <!-- Breadcrumbs + page title-->
          <nav class="mb-4 pb-lg-3" aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-light">
              <li class="breadcrumb-item"><a href="https://pariscablimousine.fr/">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Booking Rates</li>
            </ol>
          </nav>
          <!-- Page title-->
          <div class="mb-lg-5 mx-auto text-center" style="max-width: 856px;">
            <h1 class="text-light mb-4 pb-3">BOOKING RATES</h1>
          </div>
        </div>
    </section>
      <!-- Page content-->
    <section class="position-relative bg-white rounded-xxl-4 mb-5 pt-md-3 pb-lg-5 zindex-5" style="margin-top: -30px;">
        <div class="container pt-5">
          <div class="row">
            <!-- Sidebar-->
            <aside class="col-lg-3 col-md-4 d-md-block d-none position-relative">
              <nav class="border-start sticky-top" style="top: 116px;">
                <ul class="nav flex-column">
                  <li class="nav-item"><a class="nav-link py-1 px-4 fw-normal" href="#MultivanVolkswagenT6" data-scroll>MERCEDES-BENZ Classe V</a></li>
                  <li class="nav-item"><a class="nav-link py-1 px-4 fw-normal" href="#mvtPackage" data-scroll>MERCEDES-BENZ Classe V Package</a></li>
                  <li class="nav-item"><a class="nav-link py-1 px-4 fw-normal" href="#Eclass" data-scroll>MERCEDES-BENZ E class</a></li>
                  <li class="nav-item"><a class="nav-link py-1 px-4 fw-normal" href="#EclassPackage" data-scroll>MERCEDES-BENZ E class Package</a></li>
                </ul>
              </nav>
            </aside>
            <div class="col-md-8 offset-lg-1">
              <div class="mb-md-5 mb-4 pb-lg-2" id="MultivanVolkswagenT6">
                <h2 class="h4 mb-md-4">MERCEDES-BENZ Classe V</h2>
                <span class="d-block opacity-70 mb-2 mb-sm-0"> These rates cover only a one way transfer. For your return service.<strong> <br> Please make a New Booking.</strong></span> <br>
                <!-- Multivan Volkswagen T6-->
                <div class="table-responsive">
                <table class="table">
                    <thead class="thead-dark">
                    <tr style="background-color:#fd5631;color:white;">
                        <th>From</th>
                        <th>Destination</th>
                        <th>1-2 P.</th>
                        <th>3 P.</th>
                        <th>4 P.</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql="select sp.p_place,sp.d_place,rp.1_2P,rp.3P,rp.4P from select_places sp , rates_payment rp where sp.p_id=rp.p_id";
                        $result = mysqli_query($con, $sql);
                        if (mysqli_num_rows($result) > 0) {
                        
                        while($row = mysqli_fetch_assoc($result)) { 
                        ?>
                    <tr>
                        <th style="background-color:#dadad7;"> <?= $row["p_place"]?></th>
                        <th style="background-color:#dadad7;;"> <?= $row["d_place"]?></th>
                        <td><a class="table_eff" href="booking_form.php?get_amount=<?= $row["1_2P"]?>&&get_p_place=<?= $row["p_place"]?>&&get_d_place=<?= $row["d_place"]?>&&get_pa=1_2P">€ <?= $row["1_2P"]?> 
                        <!-- <br><h4 class="mb-1 fs-xs fw-normal text-uppercase text-primary">BOOK</h4> -->
                        </a> </td>
                        <td><a href="booking_form.php?get_amount=<?= $row["3P"]?>&&get_p_place=<?= $row["p_place"]?>&&get_d_place=<?= $row["d_place"]?>&&get_pa=3P">€ <?= $row["3P"]?>
                        <!-- <br><h4 class="mb-1 fs-xs fw-normal text-uppercase text-primary">BOOK</h4> -->
                        </a> </td>
                        <td><a href="booking_form.php?get_amount=<?= $row["4P"]?>&&get_p_place=<?= $row["p_place"]?>&&get_d_place=<?= $row["d_place"]?>&&get_pa=4P">€ <?= $row["4P"]?>
                        <!-- <br><h4 class="mb-1 fs-xs fw-normal text-uppercase text-primary">BOOK</h4> -->
                        </a> </td>
                    </tr>
                    <?php }} ?>
                    </tbody>
                </table>
                </div>
              </div>
              <div class="mb-md-5 mb-4 pb-lg-2" id="mvtPackage">
                <h2 class="h4 mb-md-4">MERCEDES-BENZ Classe V Package</h2>
                <!-- Resume creation and editing accordion-->       

                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-dark">
                        <tr style="background-color:#fd5631;color:white;">
                            <th></th>
                            <th>1-4 P.</th>
                            <th>4-6 P.</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql="select p1t.pa_id,p1t.pa_name,p1t.description,p1tr.1_4P,p1tr.4_6P from m_benz_v_package p1t , m_benz_v_package_rate p1tr where p1t.pa_id=p1tr.pa_id";
                            $result = mysqli_query($con, $sql);
                            if (mysqli_num_rows($result) > 0) {
                            
                            while($row = mysqli_fetch_assoc($result)) { 
                            ?>
                        <tr>
                            <th style="background-color:#dadad7;"> <?= $row["pa_name"]?><br>
                            <span class="d-block opacity-70 mb-2 mb-sm-0"><?= $row["description"]?></span>
                            </th>
                            <td><a class="table_data" href="">€ <?= $row["1_4P"]?></a> </td>
                            <td><a class="table_data" href="">€ <?= $row["4_6P"]?></a> </td>

                        </tr>
                        <?php }} ?>
                        </tbody>
                    </table>
                </div>
                 



              </div>

              <div class="mb-md-5 mb-4 pb-lg-2" id="Eclass">
                <h2 class="h4 mb-md-4">MERCEDES-BENZ  E class or Tesla Y </h2>
                <!-- E class -->
                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-dark">
                        <tr style="background-color:#fd5631;color:white;">
                            <th>From</th>
                            <th>Destination</th>
                            <th>3 P.</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql="select spe.p_place,spe.d_place,rpe.3P from m_benz_E_or_tesla_Y spe , m_benz_E_or_tesla_Y_rate rpe where spe.p_id=rpe.p_id";
                            $result = mysqli_query($con, $sql);
                            if (mysqli_num_rows($result) > 0) {
                            
                            while($row = mysqli_fetch_assoc($result)) { 
                            ?>
                        <tr>
                            <th style="background-color:#dadad7;"> <?= $row["p_place"]?></th>
                            <th style="background-color:#dadad7;;"> <?= $row["d_place"]?></th>
                            <td><a class="table_data" href="">€ <?= $row["3P"]?></a> </td>
                        </tr>
                        <?php }} ?>
                        </tbody>
                    </table>
                </div>
              </div>

              <div class="mb-md-5 mb-4 pb-lg-2" id="EclassPackage">
                <h2 class="h4 mb-md-4">MERCEDES-BENZ E class or Tesla Y Packages</h2>
                <!-- Job application accordion-->
                <div class="table-responsive">
                    <table class="table">
                        <!-- <thead class="thead-dark">
                        <tr style="background-color:#fd5631;color:white;">
                            <th>From</th>
                            <th>Destination</th>
                            <th>3 P.</th>
                        </tr>
                        </thead> -->
                        <tbody>
                            <?php
                            $sql="select p1ec.pa_name1,p1er.p1er_rate from m_benz_e_or_tesla_y_package p1ec,m_benz_e_or_tesla_y_package_rate p1er where p1ec.pa_id1=p1er.pa_id1";
                            $result = mysqli_query($con, $sql);
                            if (mysqli_num_rows($result) > 0) {
                            
                            while($row = mysqli_fetch_assoc($result)) { 
                            ?>
                        <tr>
                        <td style="background-color:#dadad7;"><?= $row["pa_name1"]?></td>
                        <td><a class="table_data" href="">€ <?= $row["p1er_rate"]?></a> </td>
                        </tr>
                        <?php }} ?>
                        </tbody>
                    </table>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
      <!-- Contact Us CTA-->
    <section class="container mb-5 pb-lg-5">
        <div class="py-md-4 py-5 bg-secondary rounded-3">
          <div class="col-sm-10 col-11 d-flex flex-md-row flex-column align-items-center justify-content-between mx-auto px-0">
            <div class="order-md-1 order-2 text-md-start text-center" style="max-width: 524px;">
              <h2 class="mb-4 pb-md-3">You can contact us and ask your questions directly</h2>
              <!-- <a class="btn btn-lg btn-primary rounded-pill w-sm-auto w-100" href="job-board-contacts.html">Contact us</a> -->
            </div><img class="order-md-2 order-1 ms-md-4" src="img/logo/payment1.png" width="400"  alt="payment">
          </div>
        </div>
    </section>



<!--BLOCK#2 end YOUR CODE HERE -->


<!--BLOCK#3 START DON'T CHANGE THE ORDER-->
<?php include_once("Footer.php"); ?>
<!--END DON'T CHANGE THE ORDER-->