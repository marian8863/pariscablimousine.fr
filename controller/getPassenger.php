<?php
include_once("../config1.php");

           
if(isset($_POST['d_place']) && isset($_POST['place2_id'])){ 

    $pid2=$_POST['d_place'];
    $pid_id=$_POST['place2_id'];
    echo '<option value="null" selected disabled >---- Select the Passenger ---- </option>';

    $sql="select r.p_id from ratess r ,places_packages pp where pp.pa_id=r.pa_id and pp.p_id= '$pid_id' and pp.p_id2= '$pid2'";
    // $sql = "select p.pa_id,p.p1,p.p2,p.p3 from passenger p ,places_packages pp where pp.pa_id=p.pa_id and pp.p_id= '$pid_id' and pp.p_id2= '$pid2'";
    // $sql="select p.pa_id,p.p1,p.p2,p.p3 from passenger p ,places_packages pp where pp.pa_id=p.pa_id and pp.pa_id='$pid_id' and pp.p_id2='$pid2' group by pp.pa_id";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
        echo '<option  value="'.$row["p_id"].'" required>'.$row["p_id"].'</option>';
        }
    }else{
        echo '<option value="null"  disabled>-- No Passenger --</option>';
    }
}

?>