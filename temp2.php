<?php

$name=$_POST['name'];
$roll_no=$_POST['no'];
$sem=$_POST['sem'];

$host="localhost";
$user="root";
$password="";
$database="project";
$conn=mysqli_connect($host,$user,$password,$database);

if(!$conn){
    echo "connection not established";
}
echo " ";
if($sem=="1st sem internal"){
    $semname="BTech I YEAR I SEMESTER(R20) REGULAR";
    $sem_no="1st";
}
else if($sem=="2nd sem internal")
{
    $semname="BTech I YEAR II SEMESTER(R20) REGULAR";
    $sem_no="2nd";
}
else if($sem=="3rd sem internal")
{
    $semname="BTech II YEAR I SEMESTER(R20) REGULAR";
    $sem_no="3rd";
}
else if($sem=="4th sem internal")
{
    $semname="BTech II YEAR II SEMESTER(R20) REGULAR";
    $sem_no="4th";
}
else if($sem=="5th sem internal")
{
    $semname="BTech III YEAR I SEMESTER(R20) REGULAR";
    $sem_no="5th";
}
else if($sem=="6th sem")
{
    $semname="BTech III YEAR II SEMESTER(R20) REGULAR";
    $sem_no="6th";
}
else if($sem=="7th sem internal")
{
    $semname="BTech IV YEAR I SEMESTER(R20) REGULAR";
    $sem_no="7th";
}
else if($sem=="8th sem internal")
{
    $semname="BTech IV YEAR II SEMESTER(R20) REGULAR";
    $sem_no="8th";
}

$sql="INSERT INTO student_marks VALUES ('$name','$roll_no','$semname','','')";
if(mysqli_query($conn,$sql))
{
    echo " ";
}

$database1="semester";
$conn1=mysqli_connect($host,$user,$password,$database1);
$sub_code=array();
$sub_name=array();
if($sem_no=="1st")
{
$sql1="SELECT sub_code, sub_name FROM 1stsem ";
$result=mysqli_query($conn1,$sql1);
if(mysqli_num_rows($result) >0)
{
    while($row=mysqli_fetch_assoc($result))
    {
    $sub_code[]=$row['sub_code'];
    $sub_name[]=$row['sub_name'];
    }
}


}
elseif($sem_no=="2nd")
{
$sql1="SELECT sub_code, sub_name FROM 2nd_sem ";
$result=mysqli_query($conn1,$sql1);
if(mysqli_num_rows($result) >0)
{
    while($row=mysqli_fetch_assoc($result))
    {
    $sub_code[]=$row['sub_code'];
    $sub_name[]=$row['sub_name'];
    }
}
}
elseif($sem_no=="3rd")
{
$sql1="SELECT sub_code, sub_name FROM 3rd_sem ";
$result=mysqli_query($conn1,$sql1);
if(mysqli_num_rows($result) >0)
{
    while($row=mysqli_fetch_assoc($result))
    {
    $sub_code[]=$row['sub_code'];
    $sub_name[]=$row['sub_name'];
    }
}
}
elseif($sem_no=="4th")
{
$sql1="SELECT sub_code, sub_name FROM 4th_sem ";
$result=mysqli_query($conn1,$sql1);
if(mysqli_num_rows($result) >0)
{
    while($row=mysqli_fetch_assoc($result))
    {
    $sub_code[]=$row['sub_code'];
    $sub_name[]=$row['sub_name'];
    }
}
}
elseif($sem_no=="5th")
{
$sql1="SELECT sub_code, sub_name FROM 5th_sem ";
$result=mysqli_query($conn1,$sql1);
if(mysqli_num_rows($result) >0)
{
    while($row=mysqli_fetch_assoc($result))
    {
    $sub_code[]=$row['sub_code'];
    $sub_name[]=$row['sub_name'];
    }
}
}
elseif($sem_no=="6th")
{
$sql1="SELECT sub_code, sub_name FROM 6th_sem ";
$result=mysqli_query($conn1,$sql1);
if(mysqli_num_rows($result) >0)
{
    while($row=mysqli_fetch_assoc($result))
    {
    $sub_code[]=$row['sub_code'];
    $sub_name[]=$row['sub_name'];
    }
}
}
elseif($sem_no=="7th")
{
$sql1="SELECT sub_code, sub_name FROM 7th_sem ";
$result=mysqli_query($conn1,$sql1);
if(mysqli_num_rows($result) >0)
{
    while($row=mysqli_fetch_assoc($result))
    {
    $sub_code[]=$row['sub_code'];
    $sub_name[]=$row['sub_name'];
    }
}
}
elseif($sem_no=="8th")
{
$sql1="SELECT sub_code, sub_name FROM 8th_sem ";
$result=mysqli_query($conn1,$sql1);
if(mysqli_num_rows($result) >0)
{
    while($row=mysqli_fetch_assoc($result))
    {
    $sub_code[]=$row['sub_code'];
    $sub_name[]=$row['sub_name'];
    }
}
}
else{

}

$sql2="SELECT * FROM student_info WHERE rollno='$roll_no'";
$result=mysqli_query($conn,$sql2);
if(mysqli_num_rows($result)>0)
{
    while($row=mysqli_fetch_assoc($result))
    {
        $no=$row['rollno'];
    }
}


$marks=array();
$subcodecom=array();
        $conn1=mysqli_connect($host,$user,$password,"project");
    $sql_result="SELECT internal_marks,sub_code FROM results WHERE semester='$sem_no'";

    if($roll_no===$no)
    {
    $value=mysqli_query($conn1,$sql_result);
    if(mysqli_num_rows($value)>0)
    {
        while($row=mysqli_fetch_assoc($value))
        {
            $code=$row['sub_code'];
            $subcodecom[]=$code;
            $marks[$code]=$row['internal_marks'];
           
        }
    }
}
mysqli_close($conn);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link  rel="stylesheet" href="temp2.css" >
<style>
    #btn {
    border:none;
    border-radius:20px;
    background:linear-gradient(to right,white,blue);
    margin:10px 120px;
    height:30px;
    font-size:large;
    width:200px;
}
#btn a{
    text-decoration:none;
    color:red;
}
#btn:hover{
    background-color:blue;
    color:white;
}
</style>

</head>
<body>
<header>
        <img src="enhanced_image (2).jpg" id="icon" >
        <h1>Online progress report </h1>
        <line></line>
        <h4>college Report</h4>
        <ul>  
        <li class="nav"><a href="homepage.html">Home</a></li>   
       <li> <button onclick="signuppop()" >SignIn</button></li>
       <li> <button onclick="loginpop()">LogIn</button></li>
        <li class="nav"><a href="About.html">About</a></li>
        </ul>
          <div>
              <img src="https://static.vecteezy.com/system/resources/thumbnails/007/407/996/small/user-icon-person-icon-client-symbol-login-head-sign-icon-design-vector.jpg" id="icon1" onclick="togglepopup()" >
              <div class="toggle" id="submenu">
                <div class="pop">
                 <h5>My profile</h5>
                 <h5>Sign In</h5>
                 <h5>sign out-></h5>
               </div>
             </div>
          </div>
            
    </header>
    
    <hr>
<section>
        <div id="user">
            <div id="logo">
                 <img src="https://upload.wikimedia.org/wikipedia/en/e/e3/Jawaharlal_Nehru_Technological_University%2C_Anantapur_logo.png">
            </div>
            <div id="head">
            <h2>Jawaharlal Nehru Technological University Anantapur</h2>
            <h3>(Established under A.P. Govt. Act No.30 of 2008)</h3>
            <h3>Ananthapuramu - 515002, Andhra Pradesh, India</h3>
            <h2 id="h22">ACCREDITED BY NAAC WITH 'A' GRADE</h2>
            </div>
            <div id="headright">
                       <h2>Follow Us:</h2>
                       <a href="https://www.facebook.com/profile.php?id=100071950200345"> <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTHA8a-u1SWwHz3AVpXEnT-aTPbXAPmzkIb2A&s" class="icon"></a>
                       <a href="https://twitter.com/jntuau"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS5LEV-ApZUO6OUnu1ulvL8F3L91AqHlpD0Hw&s" class="icon"></a>
                       <a href= "https://www.linkedin.com/school/jntua-college-of-engineering-anantapur/ "><img src="https://static.vecteezy.com/system/resources/previews/018/930/480/non_2x/linkedin-logo-linkedin-icon-transparent-free-png.png" class="icon"></a>
                       <a href= "https://youtube.com/@updatesjntua?si=yrPMOEC8qoTZTy1p" ><img src="https://cdn-icons-png.flaticon.com/512/1384/1384060.png" class="icon"></a>
                       <a href="" ><img src="https://ichef.bbci.co.uk/ace/standard/976/cpsprodpb/E802/production/_89649395_instagram_logo_976.jpg" class="icon"> </a>           
            </div>
        </div>
    </section>
    <section class="sec2">
        <div class="node">
            <div class="details">
                <h2>Student internal marks </h2>
                <h4>NAME: <?php echo $name;?> </h4>
                <h4>ADMISSION NO:  <?php echo $roll_no ;?> </h4>
                <h4>SEMESTER: <?php echo $semname ?> </h4>

            </div>
            <div>
                <table>
                    <tr>
                        <td>s.no</td>
                        <td>subject code</td>
                        <td>subject name</td>
                        <td>Marks</td>
                    </tr>
<?php for($i=0;$i<count($sub_code);$i++)
{ ?>
                    <tr>
                        <td><?php echo $i+1 ;?></td>
                        <td><?php echo $sub_code[$i] ;?></td>
                        <td><?php echo $sub_name[$i] ;?></td>
                        <td> <?php 
                             $code=$sub_code[$i];
                               echo  $marks[$code];
                          
                                     ?></td>
                    </tr>
<?php }?>
               </table>
  </div>
  </div>
  <button id="btn"><a href="user2.php"> Check external marks</a></button>
  <button id="btn"><a href="homepage.html"> Back</a></button>
  </section>
  
  
                
    <script src="home.js"></script> 
</body>
</html>