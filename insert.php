<?php
// if(isset($_GET['debug'])){
// var_dump($_GET);
// }
// if(isset($_GET['name1']))
// {
//     $name=$_GET['name1'];
// }
// else{
//     echo "username not provided";
// }
// print_r($_GET);
// include 'homepage.html';
// $name=$_POST["name"];
// $email=$_POST['email'];
// $password=$_POST['password'];
$host="localhost";
$user="root";
$password="kusuma12#";
$database="project";
$conn=mysqli_connect($host,$user,$password,$database);
if(!$conn){
   echo "connection not established" ;
}
echo"connection established";

$sql="INSERT INTO student(name,email,pasword) VALUES('kusuma','kusuma2004@gmail.com','123581dw')";
if(mysqli_query($conn,$sql))
{
   echo "data inserted";
}
mysqli_close($conn);
?>