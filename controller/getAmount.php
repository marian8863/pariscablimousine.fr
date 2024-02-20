<?php
include_once("../config1.php");
if(isset($_POST['passen_id']) && isset($_POST['place1_id']) && isset($_POST['place2_id']) ){
    $id = $_POST['passen_id'];
    $pid1 = $_POST['place1_id'];
    $pid2 = $_POST['place2_id'];


    // if($_POST['passen_id'] == "1_2P"){
        $sql = "select r.rates from ratess r ,places_packages pp where pp.pa_id=r.pa_id and pp.p_id='$pid1' and pp.p_id2='$pid2' and r.p_id = '$id'";
        $result = mysqli_query($con, $sql);
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            // echo '<option  value="'.$row["rates"].'" required>'.$row["rates"].'</option>';
            echo '<input class="form-control" type="text" id="amount" name="amount" value="'.$row["rates"].'" readonly>';
            // echo $row["rates"];
            }
        }else{
            // echo '<option value="null"  disabled>-- No Amount --</option>';
        }
   

}

?>