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
    $paid=$_GET['get_id'];
    $sql="SELECT p1t.pa_id,p1t.pa_name,p1t.description,p1tr.1_4P,p1tr.4_6P from m_benz_v_package p1t , m_benz_v_package_rate p1tr where p1t.pa_id=p1tr.pa_id and p1t.pa_id='$paid'";
    $result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result)==1) {       
        $row=mysqli_fetch_assoc($result);
        $pa_name=$row['pa_name'];
        $description=$row['description'];
        $p1_4P=$row['1_4P'];
        $p4_6P=$row['4_6P'];
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
            <h1 class="m-0 text-dark">MERCEDES-BENZ Classe V Package Detail</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">MERCEDES-BENZ Classe V Package
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
                    <h3 class="card-title">Edit MERCEDES-BENZ Classe V Package</h3>
                <?php
                }else{
                ?>
                    <h3 class="card-title">Create MERCEDES-BENZ Classe V Package</h3>
                <?php
                }
                ?>
            </div>
                <!-- /.card-header -->
                <div class="card-body">
                <form method="POST">
                 <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Details</label>
                        <input type="text" class="form-control" name="pa_name" value="<?php if(isset($_GET['get_id'])){ echo $pa_name;}?>" placeholder="Enter ..." >
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" rows="3" placeholder="Enter ..." name="description" required><?php if(isset($_GET['get_id'])){ echo $description;}?></textarea>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>1_4P.</label>
                        <input type="text" class="form-control" name="p1_4P" value="<?php if(isset($_GET['get_id'])){ echo $p1_4P;}?>" placeholder="Enter ...">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>4_6P</label>
                        <input type="text" class="form-control" name="p4_6P" value="<?php if(isset($_GET['get_id'])){ echo $p4_6P;}?>" placeholder="Enter ...">
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
    if(!empty($_POST['pa_name'])&& 
    !empty($_POST['description'])&& 
    !empty($_POST['p1_4P'])&& 
    !empty($_POST['p4_6P'])){
    $paid=$_GET['get_id'];

try {
   
    
    // Set the PDO error mode to exception
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);    
    // Begin a transaction
    $con->begin_transaction();

    // Replace 'your_id', 'new_value1', 'new_value2', etc., with actual values
    $paid=$_GET['get_id'];
    $pa_name=$_POST['pa_name'];
    $description=$_POST['description'];
    $p1_4P=$_POST['p1_4P'];
    $p4_6P=$_POST['p4_6P'];

    // Update the first table
    $con->query('UPDATE  `m_benz_v_package`
    set `pa_name` ="'.$pa_name.'",
    `description`="'.$description.'"
  
    where `pa_id`="'.$paid.'"');

    // Update the second table
    $con->query('UPDATE  `m_benz_v_package_rate`
    set `1_4P`="'.$p1_4P.'",
    `4_6P`="'.$p4_6P.'"
  
    where `pa_id`="'.$paid.'"');

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
       window.location.href = "view_m_benz_v_package";
   
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