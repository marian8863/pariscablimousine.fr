<html>
    <head>
    <script src="dist/sweetalert2.js"></script>
  <link rel="stylesheet" href="dist/sweetalert2.css">
    </head>
    <body>
        
    </body>
</html>

<?php

//process_data.php

    include_once("config1.php");
    if(!empty($_POST['email'])){
        $email=$_POST['email'];
      
       
      
        $sql="INSERT INTO `subscribe` (`email`) values('$email')";
        if(mysqli_query($con,$sql)){
            // $message ="<h4 class='text-success' >New record created successfully</h4>";
         
        }else{
            echo "Error :-".$sql.
          "<br>"  .mysqli_error($con);
        }
    }
    
?>