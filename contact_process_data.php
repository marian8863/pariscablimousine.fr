<!-- <html>
    <head>
    <script src="dist/sweetalert2.js"></script>
  <link rel="stylesheet" href="dist/sweetalert2.css">
    </head>
    <body>
        
    </body>
</html> -->

<?php

//process_data.php

    include_once("config1.php");
    if(!empty($_POST['c_name']) && !empty($_POST['c_email']) && !empty($_POST['c_message'])){
        $c_name=$_POST['c_name'];
        $c_email=$_POST['c_email'];
        $c_message=$_POST['c_message'];

        $sql="INSERT INTO `contact_message` (`c_name`,`c_email`,`c_message`) values('$c_name','$c_email','$c_message')";
        if(mysqli_query($con,$sql)){
            // $message ="<h4 class='text-success' >New record created successfully</h4>";
         
        }else{
            echo "Error :-".$sql.
          "<br>"  .mysqli_error($con);
        }
    }
    
?>