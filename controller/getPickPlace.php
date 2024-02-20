<?php
include_once("../config1.php");
if(isset($_POST['city'])){
    $id = $_POST['city'];
    $sql = "select r.amount as amount from select_places sp , rates r where sp.p_id=r.p_id and r.p_id = '$pi'";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
        echo '<option  value="'.$row["p_id"].'" required>'.$row["amount"].'</option>';

        }
    }else{
        echo '<option value="null"   selected disabled>-- No Place --</option>';
    }
}

?>