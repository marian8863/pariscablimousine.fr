<!-- BLOCK#1 START DON'T CHANGE THE ORDER-->
<?php
$title = "Home | SLGTI";

include_once "head.php";
include_once "menu.php";

$u_n = $_SESSION['user']['username'];
$u_t = $_SESSION['user']['user_type'];
$u_p = $_SESSION['user']['profile'];

?>
<!--END DON'T CHANGE THE ORDER-->

<?php

if(isset($_GET['get_id'])){
  $bd_id=$_GET['get_id'];
  $sql="SELECT bd_id,place_d,d_place,nopassenger,amount,adr,cus_name,ph_num,e_add,p_date,p_time,des from booking_details
  WHERE bd_id=$bd_id";
    $result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result)==1) {       
        $row=mysqli_fetch_assoc($result);
        $place_d=$row['place_d'];
        $d_place=$row['d_place'];
        $nopassenger=$row['nopassenger'];
        $amount=$row['amount'];
        $adr=$row['adr'];
        $cus_name=$row['cus_name'];
        $ph_num=$row['ph_num'];
        $e_add=$row['e_add'];
        $p_date=$row['p_date'];
        $p_time=$row['p_time'];
        $des=$row['des'];
        
    }

}
?>



<!--BLOCK#2 START YOUR CODE HERE -->
  <!-- Content Wrapper. Contains page content -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Booking Details</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item ">Booking Details
              <?php
// echo  $Sdate = new DateTime("now", new DateTimeZone('Asia/Colombo'));
// date_default_timezone_set('UTC');

// // Get the current date and time
// $currentDateTime = date('Y-m-d H:i:s');

// // Display the current date and time
// echo "Current Date and Time: " . $currentDateTime;
?>
              </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

  <!-- Main content -->

    <section class="content">
    <div class="container-fluid">
        <div class="row">

          <!-- /.col -->
          <div class="col-md-12">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Activity</a></li>
                  <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Timeline</a></li>
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">

                  <div class="" id="timeline">
                    <!-- The timeline -->
                    <div class="timeline timeline-inverse">
                      <!-- timeline time label -->
                      <div class="time-label">
                        <span class="bg-danger">
                        <?php if(isset($_GET['get_id'])){ echo $p_date;}?>
                        </span>
                      </div>
                      <!-- /.timeline-label -->
                      <!-- timeline item -->
                      <div>
                        <i class="fas fa-envelope bg-primary"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> 12:05</span>

                          <h3 class="timeline-header"><a href="#"><?php if(isset($_GET['get_id'])){ echo $cus_name;}?> </a></h3>

                          <!-- <div class="timeline-body">
                            Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                            weebly ning heekya handango imeem plugg dopplr jibjab, movity
                            jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                            quora plaxo ideeli hulu weebly balihoo...
                          </div>-->
                          <div class="timeline-footer">
                            <a href="#" class="btn btn-success btn-sm"><i class="fas fa-mobile-alt"></i> <?php if(isset($_GET['get_id'])){ echo $ph_num;}?></a>
                            <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-envelope-open-text"></i> <?php if(isset($_GET['get_id'])){ echo $e_add;}?></a>
                          </div> 
                        </div>
                      </div>
                      <!-- END timeline item -->
                      <!-- timeline item -->

                      <div>
                        <i class="fas fa-map-marked-alt bg-danger"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> 5 mins ago</span>

                          <h3 class="timeline-header "><a href="#">Pick Address</a>
                          </h3>
                           <div class="timeline-body">
                           <?php if(isset($_GET['get_id'])){ echo $adr;}?>
                          </div>
                        </div>
                      </div>

                      <div>
                        <i class="fas fa-street-view bg-danger"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> 5 mins ago</span>

                          <h3 class="timeline-header "><a href="#">Pick Place</a> <?php if(isset($_GET['get_id'])){ echo $place_d;}?>
                          </h3>
                          <div class="timeline-body text-muted">
                            <i class="fas fa-calendar-alt"></i> <?php if(isset($_GET['get_id'])){ echo $p_date;}?> | 
                            <i class="fas fa-clock"></i> <?php if(isset($_GET['get_id'])){ echo $p_time;}?>
                          </div>
                        </div>
                      </div>
                      <div>
                        <i class="fas fa-map-pin bg-success"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> 5 mins ago</span>

                          <h3 class="timeline-header border-0"><a href="#">Drop Place</a> <?php if(isset($_GET['get_id'])){ echo $d_place;}?>
                          </h3>
                        </div>
                      </div>

                      <div>
                        <i class="fas fa-users bg-danger"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> 5 mins ago</span>

                          <h3 class="timeline-header border-0"><a href="#">No Of Passenger :-</a> <?php if(isset($_GET['get_id'])){ echo $nopassenger;}?>
                          </h3>
                        </div>
                      </div>

                      <div>
                        <i class="fas fa-money-bill bg-danger"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> 5 mins ago</span>

                          <h3 class="timeline-header border-0"><a href="#">Rates :-</a> <?php if(isset($_GET['get_id'])){ echo $amount;}?> <i class="fas fa-solid fa-euro-sign"></i>
                          </h3>
                        </div>
                      </div>

                      <!-- END timeline item -->
                      <!-- timeline item -->
                      <div>
                        <i class="fas fa-comments bg-warning"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> 27 mins ago</span>

                          <h3 class="timeline-header"><a href="#">Description</a></h3>

                          <div class="timeline-body">
                           <?php if(isset($_GET['get_id'])){ echo $des;}?>
                          </div>
                          <div class="timeline-footer">
                            <a href="#" class="btn btn-warning btn-flat btn-sm">View comment</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>


    <!-- /.content -->
  </div>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- /.content-wrapper -->

	<!-- END DELETE MODEL -->

<!--BLOCK#2 end YOUR CODE HERE -->


<!--BLOCK#3 START DON'T CHANGE THE ORDER-->
<?php include_once "footer.php";?>
<!--END DON'T CHANGE THE ORDER-->