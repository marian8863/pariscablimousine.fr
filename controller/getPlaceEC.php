<?php
include_once("../config1.php");
$dp=null;
if(isset($_POST['ECplace'])){
    $id = $_POST['ECplace'];

    echo '<option value="null" selected disabled>-- select the Drop Place --</option>';

    $sql = "select p_id2 from eclass_places where p_id  = '$id'";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
        // echo '<option  value="'.$row["p_id2"].'" required>'.$row["p_id2"].'</option>';
        echo '<option  value="'.$row["p_id2"].'" required';
        if($row["p_id2"]== $dp) echo ' selected';
        echo '>'.$row["p_id2"].'</option>';
        }
    }else{
        echo '<option value="null"  disabled>-- No Place --</option>';
    }
}

?>