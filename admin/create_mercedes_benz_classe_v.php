<!-- BLOCK#1 START DON'T CHANGE THE ORDER-->
<?php
$title = "Home | SLGTI";

include_once("head.php");
include_once("menu.php");

$u_n = $_SESSION['user']['username'];
$u_t = $_SESSION['user']['user_type'];
$u_p = $_SESSION['user']['profile'];

?>
<!--END DON'T CHANGE THE ORDER-->

<?php

if(isset($_GET['get_id'])){
    $pid=$_GET['get_id'];
    $sql="SELECT sp.p_id,sp.p_place,sp.d_place,rp.1_2P,rp.3P,rp.4P from select_places sp , rates_payment rp where sp.p_id=rp.p_id and sp.p_id='$pid'";
    $result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result)==1) {       
        $row=mysqli_fetch_assoc($result);
        $p_place=$row['p_place'];
        $d_place=$row['d_place'];
        $p1_2P=$row['1_2P'];
        $p3P=$row['3P'];
        $p4P=$row['4P'];
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
            <h1 class="m-0 text-dark">MERCEDES-BENZ Classe V Detail</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">MERCEDES-BENZ Classe V
              <?php
                  // echo  $Sdate = new DateTime("now", new DateTimeZone('Asia/Colombo'));
                  date_default_timezone_set('Asia/Colombo');
                  $date = date('d-m-y h:i:s');
                  echo $date;
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
        <div class="card">
            <div class="card-header">
                <?php
                if(isset($_GET['get_id'])){
                ?>
                    <h3 class="card-title">Edit MERCEDES-BENZ Classe V</h3>
                <?php
                }else{
                ?>
                    <h3 class="card-title">Create MERCEDES-BENZ Classe V</h3>
                <?php
                }
                ?>
            </div>
                <!-- /.card-header -->
                <div class="card-body">
                <form method="POST">
                 <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>From</label>
                        <input type="text" class="form-control" name="p_place" value="<?php if(isset($_GET['get_id'])){ echo $p_place;}?>" placeholder="Enter ..." readonly>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>To</label>
                        <input type="text" class="form-control" name="d_place" value="<?php if(isset($_GET['get_id'])){ echo $d_place;}?>" placeholder="Enter ..." readonly>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>1-2 P.</label>
                        <input type="text" class="form-control" name="p1_2P" value="<?php if(isset($_GET['get_id'])){ echo $p1_2P;}?>" placeholder="Enter ...">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>3 P.</label>
                        <input type="text" class="form-control" name="p3P" value="<?php if(isset($_GET['get_id'])){ echo $p3P;}?>" placeholder="Enter ...">
                      </div>
                    </div>

                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>4 P.</label>
                        <input type="text" class="form-control" name="p4P" value="<?php if(isset($_GET['get_id'])){ echo $p4P;}?>" placeholder="Enter ...">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-3">
                      <!-- text input -->
                      <div class="form-group">
                      <?php
                        if(isset($_GET['get_id'])){
                        ?>
                        <input type="submit" class="btn btn-danger btn-block" value="- Edit Amount" name="edit"> 
                        <?php
                        }else{
                        ?>
                        <input type="submit" class="btn btn-primary btn-block" value="+ Add Amount" name="add"> 
                        <?php
                        }
                        ?>
                      </div>
                    </div>
                  </div>
                </form>
                </div>

            <!-- /.card-body -->

        </div>
      <!-- /.card -->
    </section>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- /.content-wrapper -->



<!--BLOCK#2 end YOUR CODE HERE -->

<?php
// if(isset($_POST['add'])){

//     if(!empty($_POST['dname'])&& 
//     !empty($_POST['dtp_num'])){
//         $dname=$_POST['dname'];
//         $dtp_num=$_POST['dtp_num'];
  
//         $sql="INSERT INTO `driver` (`dname`,`dtp_num`) values('$dname','$dtp_num')";
//         if(mysqli_query($con,$sql)){
//             //$message ="<h5>New record created successfully</h5>";
//           echo '<script>';
//           echo '
//           Swal.fire({
//              position: "top-end",
         
//              icon: "success",
//              title: "Your Driver has been saved",
//              showConfirmButton: false,
            
//              timer: 1500
//            }).then(function() {
//              // Redirect the user
//              window.location.href = "view_drivers";
         
//              });
//           ';
//           echo '</script>';  
//         }else{
//             echo "Error :-".$sql.
//           "<br>"  .mysqli_error($con);
//         }
//     }
// }
?>


<?php
if(isset($_POST['edit'])){
    if(!empty($_POST['p_place'])&& 
    !empty($_POST['d_place'])&& 
    !empty($_POST['p1_2P'])&& 
    !empty($_POST['p3P'])&& 
    !empty($_POST['p4P'])){
    $pid=$_GET['get_id'];

try {
   
    
    // Set the PDO error mode to exception
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);    
    // Begin a transaction
    $con->begin_transaction();

    // Replace 'your_id', 'new_value1', 'new_value2', etc., with actual values
    $pid=$_GET['get_id'];
    $p_place=$_POST['p_place'];
    $d_place=$_POST['d_place'];
    $p1_2P=$_POST['p1_2P'];
    $p3P=$_POST['p3P'];
    $p4P=$_POST['p4P'];

    // Update the first table
    $con->query('UPDATE  `select_places`
    set `p_place` ="'.$p_place.'",
    `d_place`="'.$d_place.'"
  
    where `p_id`="'.$pid.'"');

    // Update the second table
    $con->query('UPDATE  `rates_payment`
    set `1_2P`="'.$p1_2P.'",
    `3P`="'.$p3P.'",
    `4P`="'.$p4P.'"
  
    where `p_id`="'.$pid.'"');

    // Add more queries for additional tables if needed

    // Commit the transaction
    $con->commit();




    echo '<script>';
    echo '
    Swal.fire({
       position: "top-end",
   
       icon: "success",
       title: "Your Rates has been updated",
       showConfirmButton: false,
      
       timer: 1500
     }).then(function() {
       // Redirect the user
       window.location.href = "view_mercedes_benz_classe_v";
   
       });
    ';
    echo '</script>';
  } catch (mysqli_sql_exception $e) {
    // An error occurred, rollback the transaction
    $con->rollback();
    echo "Transaction failed: " . $e->getMessage();
}


}
}
?>
<!--BLOCK#3 START DON'T CHANGE THE ORDER-->
<?php include_once("footer.php"); ?>
<!--END DON'T CHANGE THE ORDER-->