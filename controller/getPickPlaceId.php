<?php
include_once("../config1.php");
$id=$id1=$id2=null;
if(isset($_POST['city']) || isset($_POST['city_d']) || isset($_POST['p_P_id']) ){
    $id = $_POST['city'];
    $id1 = $_POST['city_d'];
    $id2 = $_POST['p_P_id'];

    $sql = "SELECT * FROM `place`  WHERE `c_id` = '$id' ";
    $result = mysqli_query($con, $sql);

    $sql1 = "SELECT * FROM `place`  WHERE `c_id` = '$id1'";
    $result1 = mysqli_query($con, $sql1);

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
        echo '<option  value="'.$row["p_id"].'" required>'.$row["p_name"].'</option>';

        }
    }elseif(mysqli_num_rows($result1) > 0) {
        while($row = mysqli_fetch_assoc($result1)) {
            echo '<option  value="'.$row["p_id"].'" required>'.$row["p_name"].'</option>';
        }
    }else{
        echo '<option value="null"   selected disabled>-- No Place --</option>';
    }
}

?>