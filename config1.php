 <?php
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','pcl_web');

$con=mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
// $con = mysqli_connect('localhost','ceadhzdi_cedar', 'JKjayanth96@', 'ceadhzdi_pcl');
// $con = mysqli_connect('localhost','c1987705c', '7u33gvqUWtktw25', 'c1987705c_pcl');
// $con = mysqli_connect('localhost','c1987705c', '7u33gvqUWtktw25', 'c1987705c_pariscablimousine.fr');



if(mysqli_connect_errno()){
    echo "Failed to connect to Mysql :".mysqli_connect_error();
}else{
    // echo "Connected successfully";
}


?>





