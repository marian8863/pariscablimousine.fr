<?php
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

      
        $sql="INSERT INTO `booking_details` (`place_d`,`d_place`,`nopassenger`,`amount`,`adr`,`cus_name`,`ph_num`,`e_add`,`p_date`,`p_time`,`des`,`t6_book_ty`) 
        values('$place_d','$d_place','$passen_id','$amount','$adr','$cus_name','$ph_num','$e_add','$p_date','$p_time','$des','$t6_book_ty')";
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

      
        $sql="INSERT INTO `booking_details` (`place_d`,`d_place`,`nopassenger`,`amount`,`adr`,`cus_name`,`ph_num`,`e_add`,`p_date`,`p_time`,`des`,`t6_book_ty`) 
        values('$place_d','$d_place','$passen_id','$amount','$adr','$cus_name','$ph_num','$e_add','$p_date','$p_time','$des','$t6_book_ty')";
        if(mysqli_query($con,$sql)){
  
        }else{
            echo "Error :-".$sql.
          "<br>"  .mysqli_error($con);
        }
    }
    
?>