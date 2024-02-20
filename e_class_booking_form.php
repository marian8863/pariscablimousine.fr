<form class="needs-validation" novalidate action="javascript:void(0)" method="post" id="eclass_booking_form">
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
            <select class="form-select" id="EC_place_d" name="EC_place_d" onchange="showECPlace(this.value)" >
            <option value="null" selected disabled >---- Select the Pick Place ---- </option>
            <?php
            $sql="SELECT * FROM `eclass_places` group by p_id";
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
            <label class="form-label text-dark" for="ap-type ">Drop Place<span class="text-danger">*</span></label>
            <select class="form-select" id="EC_d_place" name="EC_d_place" onchange="showECAmount(this.value)" required>

            </select>
        </div> 

        <div class="col-sm-6 mb-3">
            <label class="form-label text-dark" for="ap-type "> No Of Passenger <span class="text-danger">*</span></label>
            <!-- <select class="form-select" id="EC_passen_id" name="EC_passen_id" disabled>
            <option value="3P" selected disabled >---- 3 Passenger ---- </option>
            </select> -->
            <input class="form-control" type="text" name="EC_passen_id" id="EC_passen_id" value="3P"  readonly>
        </div> 

        <div class="col-sm-6 mb-3">
            <label class="form-label text-dark" for="ap-type "> Rates <span class="text-danger">*</span></label>
            <div id="EC_amount" name="EC_amount">
            <?php     echo '---- Select the Passenger to show Rates ---- ';?>
            </div>
        </div> 

        <div class="col-sm-12 mb-3">
        <label class="form-label text-dark" for="sc-description">Pick Address <span class="text-danger">*</span></label>
        <textarea class="form-control" id="ec_adr" name="ec_adr" rows="5" placeholder="Type your address" required></textarea><span class="form-text text-light opacity-50">Write your address....</span>
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
                <input class="form-control" type="text" name="ec_cus_name" id="ec_cus_name" value="" placeholder="Eg:- Suman" required>
                <div class="invalid-feedback">Please, enter your Name</div>
            </div>
            <div class="col-sm-6 mb-3">
                <label class="form-label text-dark" for="ap-address">Mobile Number <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="ec_ph_num" id="ec_ph_num" value="" placeholder="Eg:- 00331456785" onkeypress="return onlyNumberKey(event)" required>
                <div class="invalid-feedback">Please, enter your Mobile Number</div>
            </div>
            <div class="col-sm-6 mb-3">
                <label class="form-label text-dark" for="ap-address">Email Address <span class="text-danger">*</span></label>
                <input class="form-control" type="email" name="ec_e_add" id="ec_e_add" value="" placeholder="Eg:- Suman@hotmail.com" required>
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
                <input class="form-control" type="date" name="ec_p_date" id="ec_p_date"  required>
                <div class="invalid-feedback">Please, enter your Pickup Date</div>
            </div>
            <div class="col-sm-6 mb-3">
                <label class="form-label text-dark" for="ap-address"> Pickup Time <span class="text-danger">*</span></label>
                <input class="form-control" type="time" name="ec_p_time" id="ec_p_time"  required>
                <div class="invalid-feedback">Please, enter your Pickup Time</div>
            </div>

            <div class="col-sm-6 mb-3">
                <label class="form-label text-dark" for="ap-type "> Booking Type <span class="text-danger">*</span></label>
                <select class="form-select" name="EC_book_ty"  onchange="ec_flight_number(this.value);" required >
                    <option value="null" selected disabled >---- Select Booking Type ---- </option>
                    <option value="flight_number">Flight Number</option>
                    <option value="travel">Travel</option>
                </select>
            </div> 
            <div class="col-sm-6 mb-3">
                <label class="form-label text-dark" for="ap-address" ></label>
                <input class="form-control" type="text" name="EC_book_ty" id="EC_book_ty" placeholder="Eg:- BA2490"  style="display:none;">
                <div class="invalid-feedback">Please, enter your Flight Number</div>
            </div>
            <div class="col-sm-12 mb-3">
            <label class="form-label text-dark" for="sc-description">Description </label>
            <textarea class="form-control" id="ec_des" name="ec_des" rows="5" placeholder="Describe your vehicle" required></textarea><span class="form-text text-light opacity-50">Write something</span>
            <div class="invalid-feedback">Please, enter your Description</div>
            </div>
        </div>

    </section>


    <button type="submit" value="submit" id="submit" name="submit" class="btn btn-primary btn-lg d-block mb-2">Book Now</button>
</form> 
<p id="ec_show_message_booking_form" style="display: none" class="text-dark">EClass Booking Success.. Our Driver Contact to you. <i class="fi-mail"></i> </p>


