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
            <h1 class="m-0 text-dark">MERCEDES-BENZ E class or Tesla Y Packages</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item ">MERCEDES-BENZ E class or Tesla Y Packages
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
          <div class="col-12">
            <div class="card">
              <!-- <div class="card-header">
                <h3 class="card-title">DataTable with minimal features & hover style</h3>
              </div> -->
              <!-- /.card-header -->

              <div class="card-body">
              <div class="row">
                <div class="col-9">
                </div>
                <!-- /.col -->
                <div class="col-3">
                    <a href="create_driver" class="btn btn-primary btn-block"> + Add</a>

                </div>
                </div>
                <br>
                
                <table id="example2"  class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <!-- <th data-visible="false">Id</th> -->
                    <th>Packages</th>
                    <th>Amount</th>
                    <th>Action</th>
                    <!-- <th data-visible="false">Create Date</th> -->
                  </tr>
                  </thead>
                  <?php
                    // if(isset($_GET['delete_id']))
                    // {                
                    //     $p_id = $_GET['delete_id'];

                    //     $sql = "DELETE from driver where d_id = $p_id";

                    //     if(mysqli_query($con,$sql))
                    //     { }
                    //     else
                    //     {}
                    // }
                    ?>
                  <tbody>
               
                    <?php  
                    $sql="select p1ec.pa_id1, p1ec.pa_name1,p1er.p1er_rate from m_benz_e_or_tesla_y_package p1ec,m_benz_e_or_tesla_y_package_rate p1er where p1ec.pa_id1=p1er.pa_id1";         
                    $res=$con->query($sql);
                    while($row=$res->fetch_assoc()){    
                            
                    ?>
                    <tr>
                    <!-- //<td>< $row['d_id']?></td> -->
                        <td><?= $row['pa_name1']?></td>
                        <td><?= $row['p1er_rate']?></td>
                        <td>
                            <a href="create_m_benz_e_or_tesla_y_package.php?get_id=<?= $row["pa_id1"]?>" class="btn btn-info"><i class="fas fa-edit"></i></a>
                            <!-- <button  data-href="?delete_id=<$row["p_id"]?>" data-toggle="modal" data-target="#confirm-delete"  class="btn btn-danger"><i class="fas fa-trash"></i></button> -->

                        </td>
                    </tr>
                    <?php } ?>
                  
                  </tbody>
                  </tfoot>
                </table>
  
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

        
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
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
<?php include_once("footer.php"); ?>
<!--END DON'T CHANGE THE ORDER-->