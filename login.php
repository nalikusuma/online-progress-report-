<?php
$email1=$_POST['email'];
$password3=$_POST['password'];
$host="localhost";
$username="root";
$password="";
$database="project";
$conn=mysqli_connect($host,$username,$password,$database);
if(!$conn){
    echo " connection not established";
}
else{
echo " ";


// else{
//     mysqli_query($conn,$sql1);
// }
}
?>