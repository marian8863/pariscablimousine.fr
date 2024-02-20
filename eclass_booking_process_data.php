<?php
    include_once("config1.php");

    if(!empty($_POST['EC_place_d'])&& 
    !empty($_POST['EC_d_place'])&&
     !empty($_POST['EC_passen_id'])&& 
     !empty($_POST['EC_amount'])&& 
     !empty($_POST['ec_adr'])&& 
     !empty($_POST['ec_cus_name'])&& 
     !empty($_POST['ec_ph_num'])&&
     !empty($_POST['ec_e_add'])&& 
     !empty($_POST['ec_p_date'])&& 
     !empty($_POST['ec_p_time'])&& 
     !empty($_POST['EC_book_ty']) == null &&
     !empty($_POST['ec_des'])){

        $EC_place_d=$_POST['EC_place_d'];
        $EC_d_place=$_POST['EC_d_place'];
        $EC_passen_id=$_POST['EC_passen_id'];
        $EC_amount=$_POST['EC_amount'];
        $ec_adr=$_POST['ec_adr'];
        $ec_cus_name=$_POST['ec_cus_name'];
        $ec_ph_num=$_POST['ec_ph_num'];
        $ec_e_add=$_POST['ec_e_add'];
        $ec_p_date=$_POST['ec_p_date'];
        $ec_p_time=$_POST['ec_p_time'];
        $EC_book_ty=$_POST['EC_book_ty'] = "travel";
        $ec_des=$_POST['ec_des'];
      
        $sql="INSERT INTO `ec_booking_details` (`EC_place_d`,`EC_d_place`,`EC_passen_id`,`EC_amount`,`ec_adr`,`ec_cus_name`,`ec_ph_num`,`ec_e_add`,`ec_p_date`,`ec_p_time`,`EC_book_ty`,`ec_des`) 
        values('$EC_place_d','$EC_d_place','$EC_passen_id','$EC_amount','$ec_adr','$ec_cus_name','$ec_ph_num','$ec_e_add','$ec_p_date','$ec_p_time','$EC_book_ty','$ec_des')";
        if(mysqli_query($con,$sql)){

        }else{
            echo "Error :-".$sql.
          "<br>"  .mysqli_error($con);
        }
    }elseif(!empty($_POST['EC_place_d'])&& 
    !empty($_POST['EC_d_place'])&&
     !empty($_POST['EC_passen_id'])&& 
     !empty($_POST['EC_amount'])&& 
     !empty($_POST['ec_adr'])&& 
     !empty($_POST['ec_cus_name'])&& 
     !empty($_POST['ec_ph_num'])&&
     !empty($_POST['ec_e_add'])&& 
     !empty($_POST['ec_p_date'])&& 
     !empty($_POST['ec_p_time'])&& 
     !empty($_POST['EC_book_ty'])&&
     !empty($_POST['ec_des'])){

        $EC_place_d=$_POST['EC_place_d'];
        $EC_d_place=$_POST['EC_d_place'];
        $EC_passen_id=$_POST['EC_passen_id'];
        $EC_amount=$_POST['EC_amount'];
        $ec_adr=$_POST['ec_adr'];
        $ec_cus_name=$_POST['ec_cus_name'];
        $ec_ph_num=$_POST['ec_ph_num'];
        $ec_e_add=$_POST['ec_e_add'];
        $ec_p_date=$_POST['ec_p_date'];
        $ec_p_time=$_POST['ec_p_time'];
        $EC_book_ty=$_POST['EC_book_ty'];
        $ec_des=$_POST['ec_des'];
      
        $sql="INSERT INTO `ec_booking_details` (`EC_place_d`,`EC_d_place`,`EC_passen_id`,`EC_amount`,`ec_adr`,`ec_cus_name`,`ec_ph_num`,`ec_e_add`,`ec_p_date`,`ec_p_time`,`EC_book_ty`,`ec_des`) 
        values('$EC_place_d','$EC_d_place','$EC_passen_id','$EC_amount','$ec_adr','$ec_cus_name','$ec_ph_num','$ec_e_add','$ec_p_date','$ec_p_time','$EC_book_ty','$ec_des')";
        if(mysqli_query($con,$sql)){

        }else{
            echo "Error :-".$sql.
          "<br>"  .mysqli_error($con);
        }
    }
    
    
?>