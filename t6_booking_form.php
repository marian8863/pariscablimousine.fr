<form class="needs-validation"  method="POST" id="booking-form">
      <!-- Basic info-->
      <section class="card card-dark card-body border-0 shadow-sm p-4 mb-4" id="basic-info">
      <h2 class="h4 mb-4 text-dark"><i class="fi-info-circle text-primary fs-5 mt-n1 me-2 "></i>Select Details</h2>
      <!-- <div class="mb-3">
            <label class="form-label" for="ap-title">Title <span class="text-danger">*</span></label>
            <input class="form-control" type="text" id="ap-title" placeholder="Title for your property" value="Pine Apartments" required><span class="form-text">48 characters left</span>
      </div> -->
      <div class="row">
      <div class="col-sm-6 mb-3">
            <label class="form-label text-dark" for="ap-type "> Pick Place <span class="text-danger">*</span></label>
            <select class="form-select" id="place_d" name="place_d" onchange="showPlace(this.value)" >
            <option value="null" selected disabled >---- Select the Pick Place ---- </option>
            <?php
            $sql="select p_id from places_packages group by p_id";
            $result = mysqli_query($con,$sql);
            if (mysqli_num_rows($result) > 0 ) {
            while($row=mysqli_fetch_assoc($result)){
                  echo '<option  value="'.$row["p_id"].'" required';
                  if($row["p_id"]== $pp) echo ' selected';
                  echo '>'.$row["p_id"].'</option>';
            }}
            ?>
            </select>
      </div> 

      <div class="col-sm-6 mb-3">
            <label class="form-label text-dark" for="ap-type "> Drop Place <span class="text-danger">*</span></label>
            <select class="form-select" id="d_place" name="d_place" onchange="showPassenger(this.value)" required>

            </select>
      </div> 

      <div class="col-sm-6 mb-3">
            <label class="form-label text-dark" for="ap-type "> No Of Passenger <span class="text-danger">*</span></label>
            <select class="form-select" id="passen_id" name="passen_id"  onchange="showAmount(this.value)">

            </select>
      </div> 

      <div class="col-sm-6 mb-3">
            <label class="form-label text-dark" for="ap-type "> Rates <span class="text-danger">*</span></label>
            <div id="amount" name="amount">
            <?php     echo '---- Select the Passenger to show Rates ---- ';?>
            </div>
      </div> 

      <div class="col-sm-12 mb-3">
            <label class="form-label text-dark" for="sc-description">Pick Address <span class="text-danger">*</span></label>
            <textarea class="form-control" id="adr" name="adr" rows="5" placeholder="Type your address" required></textarea><span class="form-text text-light opacity-50">Write your address....</span>
            <div class="invalid-feedback">Please, enter your Pick Address</div>
      </div>
      </div>
      </section>

      <!-- Person -->
      <section class="card card-body card-dark  border-0 shadow-sm p-4 mb-4" id="location">
      <h2 class="h4 mb-4 text-dark"><i class="fi-map-pin text-primary fs-5 mt-n1 me-2"></i>Personal Details</h2>

      <div class="row">
            <div class="col-sm-6 mb-3">
                  <label class="form-label text-dark" for="ap-address">Name <span class="text-danger">*</span></label>
                  <input class="form-control" type="text" name="cus_name" id="cus_name" value="" placeholder="Eg:- Suman" required>
                  <div class="invalid-feedback">Please, enter your Name</div>
            </div>
            <div class="col-sm-6 mb-3">
                  <label class="form-label text-dark" for="ap-address">Mobile Number <span class="text-danger">*</span></label>
                  <input class="form-control" type="number" name="ph_num" id="ph_num" value="" placeholder="Eg:- 00331456785" onkeypress="return onlyNumberKey(event)" required>
                  <div class="invalid-feedback">Please, enter your Mobile Number</div>
            </div>
            <div class="col-sm-6 mb-3">
                  <label class="form-label text-dark" for="ap-address">Email Address <span class="text-danger">*</span></label>
                  <input class="form-control" type="email" name="e_add" id="e_add" value="" placeholder="Eg:- Suman@hotmail.com" required>
                  <div class="invalid-feedback">Please, enter your Email Address</div>
            </div>
      </div>

      </section>

      <!-- other-->
      <section class="card card-body card-dark  border-0 shadow-sm p-4 mb-4" id="location">
      <h2 class="h4 mb-4 text-dark"><i class="fi-map-pin text-primary fs-5 mt-n1 me-2"></i>Other Details</h2>

      <div class="row">
            <div class="col-sm-6 mb-3">
                  <label class="form-label text-dark" for="ap-address"> Pickup Date <span class="text-danger">*</span></label>
                  <input class="form-control" type="date" name="p_date" id="p_date"  required>
                  <div class="invalid-feedback">Please, enter your Pickup Date</div>
            </div>
            <div class="col-sm-6 mb-3">
                  <label class="form-label text-dark" for="ap-address"> Pickup Time <span class="text-danger">*</span></label>
                  <input class="form-control" type="time" name="p_time" id="p_time"  required>
                  <div class="invalid-feedback">Please, enter your Pickup Time</div>
            </div>
            <div class="col-sm-6 mb-3">
            <label class="form-label text-dark" for="ap-type "> Booking Type <span class="text-danger">*</span></label>
            <select class="form-select" name="t6_book_ty"  onchange="t6_flight_number(this.value);" required >
                  <option value="null" selected disabled >---- Select Booking Type ---- </option>
                  <option value="flight_number">Flight Number</option>
                  <option value="travel">Travel</option>
            </select>
            </div> 
            <div class="col-sm-6 mb-3">
            <label class="form-label text-dark" for="ap-address" ></label>
            <input class="form-control" type="text" name="t6_book_ty" id="t6_book_ty" placeholder="Eg:- BA2490"  style="display:none;">
            <div class="invalid-feedback">Please, enter your Flight Number</div>
            </div>
            <div class="col-sm-12 mb-3">
            <label class="form-label text-dark" for="sc-description">Description </label>
            <textarea class="form-control" id="des" name="des" rows="5" placeholder="Describe your vehicle" required></textarea><span class="form-text text-light opacity-50">Write something</span>
            <div class="invalid-feedback">Please, enter your Description</div>
            </div>
      </div>

      </section>
      <input type="submit" class="btn btn-primary btn-lg d-block mb-2" value="+ submit" name="add"> 

      <!-- <button type="submit" value="submit" id="submit" name="submit" class="btn btn-primary btn-lg d-block mb-2">Book Now</button> -->
</form> 


<?php
if(isset($_POST['add'])){
    include_once("config1.php");
    if(!empty($_POST['place_d'])&& 
    !empty($_POST['d_place'])&&
     !empty($_POST['passen_id'])&& 
     !empty($_POST['amount'])&& 
     !empty($_POST['adr'])&& 
     !empty($_POST['cus_name'])&& 
     !empty($_POST['ph_num'])&&
     !empty($_POST['e_add'])&& 
     !empty($_POST['p_date'])&& 
     !empty($_POST['p_time'])&& 
     !empty($_POST['des'])&&
     !empty($_POST['t6_book_ty']) == null){
        $place_d=$_POST['place_d'];
        $d_place=$_POST['d_place'];
        $passen_id=$_POST['passen_id'];
        $amount=$_POST['amount'];
        $adr=$_POST['adr'];
        $cus_name=$_POST['cus_name'];
        $ph_num=$_POST['ph_num'];
        $e_add=$_POST['e_add'];
        $p_date=$_POST['p_date'];
        $p_time=$_POST['p_time'];
        $des=$_POST['des'];
        $t6_book_ty=$_POST['t6_book_ty'] = "travel";

      
        $sql='INSERT INTO `booking_details` (`place_d`,`d_place`,`nopassenger`,`amount`,`adr`,`cus_name`,`ph_num`,`e_add`,`p_date`,`p_time`,`des`,`t6_book_ty`) 
        values("'.$place_d.'","'.$d_place.'","'.$passen_id.'","'.$amount.'","'.$adr.'","'.$cus_name.'","'.$ph_num.'","'.$e_add.'","'.$p_date.'","'.$p_time.'","'.$des.'","'.$t6_book_ty.'")';
        if(mysqli_query($con,$sql)){
  
        }else{
            echo "Error :-".$sql.
          "<br>"  .mysqli_error($con);
        }
    }elseif(!empty($_POST['place_d'])&& 
    !empty($_POST['d_place'])&&
     !empty($_POST['passen_id'])&& 
     !empty($_POST['amount'])&& 
     !empty($_POST['adr'])&& 
     !empty($_POST['cus_name'])&& 
     !empty($_POST['ph_num'])&&
     !empty($_POST['e_add'])&& 
     !empty($_POST['p_date'])&& 
     !empty($_POST['p_time'])&& 
     !empty($_POST['des'])&&
     !empty($_POST['t6_book_ty'])){
        $place_d=$_POST['place_d'];
        $d_place=$_POST['d_place'];
        $passen_id=$_POST['passen_id'];
        $amount=$_POST['amount'];
        $adr=$_POST['adr'];
        $cus_name=$_POST['cus_name'];
        $ph_num=$_POST['ph_num'];
        $e_add=$_POST['e_add'];
        $p_date=$_POST['p_date'];
        $p_time=$_POST['p_time'];
        $des=$_POST['des'];
        $t6_book_ty=$_POST['t6_book_ty'];

      
        $sql='INSERT INTO `booking_details` (`place_d`,`d_place`,`nopassenger`,`amount`,`adr`,`cus_name`,`ph_num`,`e_add`,`p_date`,`p_time`,`des`,`t6_book_ty`) 
        values("'.$place_d.'","'.$d_place.'","'.$passen_id.'","'.$amount.'","'.$adr.'","'.$cus_name.'","'.$ph_num.'","'.$e_add.'","'.$p_date.'","'.$p_time.'","'.$des.'","'.$t6_book_ty.'")';
        if(mysqli_query($con,$sql)){
  
        }else{
            echo "Error :-".$sql.
          "<br>"  .mysqli_error($con);
        }
    }
}
    
?>
    
