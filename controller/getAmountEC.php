<?php
include_once("../config1.php");

           
if(isset($_POST['EC_d_place_id']) && isset($_POST['EC_place2_id'])){ 

    $EC_d_place_id=$_POST['EC_d_place_id'];
    $EC_place2_id=$_POST['EC_place2_id'];

    $sql="select er.rates from eclass_places ep ,eclass_rates er where ep.pa_id=er.pa_id and ep.p_id='$EC_d_place_id' and ep.p_id2='$EC_place2_id'";
    // $sql = "select p.pa_id,p.p1,p.p2,p.p3 from passenger p ,places_packages pp where pp.pa_id=p.pa_id and pp.p_id= '$pid_id' and pp.p_id2= '$pid2'";
    // $sql="select p.pa_id,p.p1,p.p2,p.p3 from passenger p ,places_packages pp where pp.pa_id=p.pa_id and pp.pa_id='$pid_id' and pp.p_id2='$pid2' group by pp.pa_id";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
        // echo '<option  value="'.$row["rates"].'" required>'.$row["rates"].'</option>';

            echo '<input class="form-control" type="text" id="EC_amount" name="EC_amount" value="'.$row["rates"].'" readonly>';
        }
    }else{
        echo '<option value="null"  disabled>-- No Amout --</option>';
    }
}

?>