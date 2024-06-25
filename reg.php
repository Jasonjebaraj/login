<?php
$conn=mysqli_connect("localhost","root","","test");
if($conn)
{
    echo "CONNECTED";  
}else
{
   echo "Failed";
}
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$cpassowrd=$_POST['cpassword'];
$data="INSERT INTO register VALUES ('','$name','$email','$password','$cpassowrd')";
$check = mysqli_query($conn,$data);
if($check)
{
    echo "  DATA SENDED";  
}else
{
   echo "DATA NOT SENDED";
}

?>



