<?php
$name=$_POST['name'];
$no=$_POST['no'];
$sem=$_POST['sem'];

 $host="localhost";
 $username="root";
 $password="";
 $database="project";
 $conn=mysqli_connect($host,$username,$password,$database);
if(!$conn)
{
    echo "connection not established";
}
echo "";

if($sem=="1st sem"){
    $semname="BTech I YEAR I SEMESTER(R20) REGULAR";
    $sem_no="1st";
}
else if($sem=="2nd sem")
{
    $semname="BTech I YEAR II SEMESTER(R20) REGULAR";
    $sem_no="2nd";
}
else if($sem=="3rd sem")
{
    $semname="BTech II YEAR I SEMESTER(R20) REGULAR";
    $sem_no="3rd";
}
else if($sem=="4th sem")
{
    $semname="BTech II YEAR II SEMESTER(R20) REGULAR";
    $sem_no="4th";
}
else if($sem=="5th sem")
{
    $semname="BTech III YEAR I SEMESTER(R20) REGULAR";
    $sem_no="5th";
}
else if($sem=="6th sem")
{
    $semname="BTech III YEAR II SEMESTER(R20) REGULAR";
    $sem_no="6th";
}
else if($sem=="7th sem")
{
    $semname="BTech IV YEAR I SEMESTER(R20) REGULAR";
    $sem_no="7th";
}
else if($sem=="8th sem")
{
    $semname="BTech IV YEAR II SEMESTER(R20) REGULAR";
    $sem_no="8th";
}

$sql="INSERT INTO student_marks(Name,Rollno,semester,marks,sub_code)VALUES('$name','$no','$semname','34', '') ";
if(mysqli_query($conn,$sql))
{
    echo" ";
}

$sqlx="SELECT * FROM student_marks";
$result=mysqli_query($conn,$sqlx);
if(mysqli_num_rows($result)>0)
{
    while($row=mysqli_fetch_assoc($result))
    {
        
         $semester=$row['semester'];
    }
}



$sql1="SELECT * FROM student_info ";
$result=mysqli_query($conn,$sql1);
if(mysqli_num_rows($result)>0)
{
    while($row=mysqli_fetch_assoc($result))
    {
         $name1=$row['name'];
         $rollno=$row['rollno'];
         $branch=$row['branch'];
    }
}

$database="semester";

if($sem=="1st sem")
{
 $conn=mysqli_connect($host,$username,$password,$database);
 $sql2="SELECT sub_code FROM 1stsem";
$result=mysqli_query($conn,$sql2);
$sub_code1=array();

if(mysqli_num_rows($result)>0)
{
    while($row=mysqli_fetch_assoc($result))
    {
         $sub_code1[]=$row;   
    }

}
$sql4="SELECT * FROM 1stsem";
$result=mysqli_query($conn,$sql4);
if(mysqli_num_rows($result)>0)
{
    while($row=mysqli_fetch_assoc($result))
    {
         $mon=$row['month & year'];   
    }

}

 $sql3="SELECT sub_name FROM  1stsem ";
 $sub_name1=array();
 $result=mysqli_query($conn,$sql3);
 if(mysqli_num_rows($result)>0)
{
     while($row=mysqli_fetch_assoc($result))
          {
          $sub_name1[]=$row;
             }
}
}
else if($sem=="2nd sem")
{
    $conn=mysqli_connect($host,$username,$password,$database);
    $sql2="SELECT sub_code FROM 2nd_sem";
   $result=mysqli_query($conn,$sql2);
   $sub_code1=array();
   
   if(mysqli_num_rows($result)>0)
   {
       while($row=mysqli_fetch_assoc($result))
       {
            $sub_code1[]=$row;   
       }
   
   }
   $sql4="SELECT * FROM 2nd_sem";
   $result=mysqli_query($conn,$sql4);
   if(mysqli_num_rows($result)>0)
   {
       while($row=mysqli_fetch_assoc($result))
       {
            $mon=$row['month & year'];   
       }
   
   }

   
    $sql3="SELECT sub_name FROM  2nd_sem ";
    $sub_name1=array();
    $result=mysqli_query($conn,$sql3);
    if(mysqli_num_rows($result)>0)
   {
        while($row=mysqli_fetch_assoc($result))
             {
             $sub_name1[]=$row;
                }
   }
}
else if($sem=="3rd sem")
{
    $conn=mysqli_connect($host,$username,$password,$database);
    $sql2="SELECT sub_code FROM 3rd_sem";
   $result=mysqli_query($conn,$sql2);
   $sub_code1=array();
   
   if(mysqli_num_rows($result)>0)
   {
       while($row=mysqli_fetch_assoc($result))
       {
            $sub_code1[]=$row;   
       }
   
   }
   $sql4="SELECT * FROM 3rd_sem";
   $result=mysqli_query($conn,$sql4);
   if(mysqli_num_rows($result)>0)
   {
       while($row=mysqli_fetch_assoc($result))
       {
            $mon=$row['month & year'];   
       }
   
   }
   
    $sql3="SELECT sub_name FROM  3rd_sem ";
    $sub_name1=array();
    $result=mysqli_query($conn,$sql3);
    if(mysqli_num_rows($result)>0)
   {
        while($row=mysqli_fetch_assoc($result))
             {
             $sub_name1[]=$row;
                }
   }
}
else if($sem=="4th sem")
{
    $conn=mysqli_connect($host,$username,$password,$database);
    $sql2="SELECT sub_code FROM 4th_sem";
   $result=mysqli_query($conn,$sql2);
   $sub_code1=array();
   
   if(mysqli_num_rows($result)>0)
   {
       while($row=mysqli_fetch_assoc($result))
       {
            $sub_code1[]=$row;   
       }
   
   }
   $sql4="SELECT * FROM 4th_sem";
   $result=mysqli_query($conn,$sql4);
   if(mysqli_num_rows($result)>0)
   {
       while($row=mysqli_fetch_assoc($result))
       {
            $mon=$row['month & year'];   
       }
   
   }
   
    $sql3="SELECT sub_name FROM  4th_sem ";
    $sub_name1=array();
    $result=mysqli_query($conn,$sql3);
    if(mysqli_num_rows($result)>0)
   {
        while($row=mysqli_fetch_assoc($result))
             {
             $sub_name1[]=$row;
                }
   }
}
else if($sem=="5th sem")
{
    $conn=mysqli_connect($host,$username,$password,$database);
    $sql2="SELECT sub_code FROM 5th_sem";
   $result=mysqli_query($conn,$sql2);
   $sub_code1=array();
   
   if(mysqli_num_rows($result)>0)
   {
       while($row=mysqli_fetch_assoc($result))
       {
            $sub_code1[]=$row;   
       }
   
   }
   $sql4="SELECT * FROM 5th_sem";
   $result=mysqli_query($conn,$sql4);
   if(mysqli_num_rows($result)>0)
   {
       while($row=mysqli_fetch_assoc($result))
       {
            $mon=$row['month & year'];   
       }
   
   }
   
    $sql3="SELECT sub_name FROM  5th_sem ";
    $sub_name1=array();
    $result=mysqli_query($conn,$sql3);
    if(mysqli_num_rows($result)>0)
   {
        while($row=mysqli_fetch_assoc($result))
             {
             $sub_name1[]=$row;
                }
   }
}
else if($sem=="6th sem")
{
    $conn=mysqli_connect($host,$username,$password,$database);
    $sql2="SELECT sub_code FROM 6th_sem";
   $result=mysqli_query($conn,$sql2);
   $sub_code1=array();
   
   if(mysqli_num_rows($result)>0)
   {
       while($row=mysqli_fetch_assoc($result))
       {
            $sub_code1[]=$row;   
       }
   
   }
   $sql4="SELECT * FROM 6th_sem";
   $result=mysqli_query($conn,$sql4);
   if(mysqli_num_rows($result)>0)
   {
       while($row=mysqli_fetch_assoc($result))
       {
            $mon=$row['month & year'];   
       }
   
   }
   
    $sql3="SELECT sub_name FROM  6th_sem ";
    $sub_name1=array();
    $result=mysqli_query($conn,$sql3);
    if(mysqli_num_rows($result)>0)
   {
        while($row=mysqli_fetch_assoc($result))
             {
             $sub_name1[]=$row;
                }
   }
}
else {
     
}


$marks=array();
$subcodecom=array();
        $conn1=mysqli_connect($host,$username,$password,"project");
    $sql_result="SELECT marks,sub_code FROM results WHERE semester='$sem_no'";

    if($no === $rollno)
    {
    $value=mysqli_query($conn1,$sql_result);
    if(mysqli_num_rows($value)>0)
    {
        while($row=mysqli_fetch_assoc($value))
        {
            $code=$row['sub_code'];
            $subcodecom[]=$code;
            $marks[$code]=$row['marks'];
           
        }
    }
    

// internal marks
    
$int_marks=array();
$subcodecom1=array();
$conn1=mysqli_connect($host,$username,$password,"project");
$sql_result="SELECT internal_marks,sub_code FROM results WHERE semester='$sem_no'";
$value=mysqli_query($conn1,$sql_result);
if(mysqli_num_rows($value)>0)
{
    while($row=mysqli_fetch_assoc($value))
    {
        $code=$row['sub_code'];
        $subcodecom1[]=$code;
        $int_marks[$code]=$row['internal_marks'];
       
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
    <link rel="stylesheet" href="user.css">
    <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
     <!-- <link rel="stylesheet" href="index.css">  -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>
    <link rel="stylesheet" href="temp1.css">

    <style>
        .h2{
            color:black;
            margin:30px 0px;
            padding:0px;
        }

        .info td{
            padding:12px 10px 28px 30px;
            
            text-align:left;
        
        }
        </style>
</head>
<body>
    <header>
        <img src="enhanced_image (2).jpg" id="icon" >
        <h1>Online progress report generator </h1>
        <line></line> 
        <h4>college Report</h4>
        <ul>   <li><a href="homepage.html" >Home</a></li>
                <li>Sign In</li>
                <li>Log In</li>
                <li>About</li>
        </ul>
    </header><hr>
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
    <section>
        <div class="memo">
              <div class="memo-temp">
                  <div class="memo-head">
                    
                        <img src="https://www.jntuacea.ac.in/images/jntuaceatp.png">
                        <div class="div">
                               <h1>Jawaharlal Nehru Technological University,Anantapur</h1>
                               <h2>COLLEGE OF ENGINEERING (AUTONOMOUS), ANANTHAPURAMU-515002</h2>
                               <h3>GRADE SHEET</h3>
                             </div>
                            </div>
                  <div class="memo-info">
                              <div class="div2">
                                <h2 class="h2"> EXAMINATION :<?php  echo $semester ;?></h2>
                                <h2 class="h2">BRANCH : <?php if($no == $rollno) {
                                    echo $branch; } ?></h2>
                            
                                <h2 class="h2">STUDENT NAME : <?php echo $name; ?></h2>
                                
                              </div>
                              <div class="2div">
                              <div class="div3">
                                <h2>HALL TICKETNO </h2>
                                <P><?php echo $no ;?></P>
                                </div>
                                <div class="div4">
                                <h3>MONTH&YEAR OF EXAM: <?php echo $mon; ?></h3> 
                                <p id="p1"> </P>
                              </div>
                            </div>
                  </div>
                  <div class="memo-marks">
                    <table>
                             <tr class="title">
                                <td>SNo</td>
                                <td id="sub">Subject Code</td>
                                <td id="sub-title">Subject Title</td>
                                <td class="marks">Internal Marks</td>
                                <td class="marks">External marks</td>
                                <td class="marks">Total Marks</td>
                                <td class="marks">Result</td>
                                <td class="marks">Credits</td>
                                <td class="marks">Grade</td>
                            </tr>
                            <?php $sum=0;  for($i=0;$i<count($sub_code1);$i++){ ?>

                            <tr class='info'>
                                        <td><?php echo $i+1; ?></td>
                                        <td><?php echo $sub_code1[$i]['sub_code']; ?></td>
                                        <td><?php echo $sub_name1[$i]['sub_name'];?></td>
                                        <td>
                                        <?php $code=$sub_code1[$i]['sub_code'];
                                          if(isset($int_marks[$code])){
                                        echo  $int_marks[$code];
                                        }
                                        else{
                                            echo" --";
                                        }
                                        ?>
                                        </td>
                                        <td><?php $code=$sub_code1[$i]['sub_code'];
                                          if(isset($marks[$code])){
                                        echo  $marks[$code];
                                        }
                                        else{
                                            echo" --";
                                        }
                                        ?></td>
                                        <td><?php
                                               $code=$sub_code1[$i]['sub_code'];
                                               $in=$int_marks[$code];
                                               $ex=$marks[$code];
                                               $total=$in+$ex;
                                              
                                               if(isset($total))
                                               {
                                               echo $total;
                                               $sum+=$total;
                                               }
                                               else{
                                                echo "--";
                                               }
                                            ?></td>
                                        <td><?php if($total<40 )
                                    {  if($total<30) echo" ";
                                        else
                                         echo "F";
                                    }
                                    else{
                                        echo "P";
                                    }
                                        ?></td>
                                        <td><?php if($i<=4) echo "3";
                                                  elseif($i>4 && $i<=8) echo "2";
                                                  else echo "1.5";
                                        ?></td>
                                        <td><?php if($total>=90) {echo "A+"; $gradepoint=10;}
                                                  else if($total >80 && $total <90) echo "A"; 
                                                  else if($total >70 && $total <80) echo "B"; 
                                                  else if($total >60 && $total <70) echo "C";
                                                  else if($total >50 && $total <60) echo "D"; 
                                                  else if($total >40 && $total<50) echo "E";
                                                  else if($total<30 || $total>=40 )echo " ";
                                                  else echo "F ";

                                        ?></td>
                            </tr> 
                               <?php } ?>
                          </table>
                    <div class="con">
                        <div class="con1">
                        <p>Aggregate(In Words): <?php   $sum1=strval($sum) ;echo "***";
                          for($j=0;$j <3;$j++)
                         {  
                              switch($sum1[$j]){
                                case 0: echo "zero" ;break;
                                case 1: echo "one";break;
                                case 2: echo "two";  break;
                                case 3: echo "three"; break;
                                case 4: echo "four"; break;
                               case 4: echo "four"; break;
                                case 4: echo "four"; break;
                                case 5: echo "five";break;
                                case 6: echo "six";break;
                                case 7: echo "seven"; break;
                               case 8: echo "eight";break;
                               case 9: echo "nine";break;
                              }

                       }
                        echo "***"; ?></p>
                        <p>SGPA : <?php echo number_format((float)$sum/860*10,2,'.','')
                        // ?></p>
                        </div>
                        <div class="con2">
                            <p>CGPA:  <?php  echo number_format((float)$sum/900*10,2,'.','')?></p>
                        </div>
                    </div>
                  </div>
                  <div class="memo-foot">
                        <div class="foot1">
                            <p>
                                Imstruction:
                            </p>
                            <p>Theory/drawing/design/Subjects</p>
                            <p>Practical Subjects</p>
                            <p>Audit Course</p>
                            <p>Project</p>
                        </div>
                        <div class="foot1">
                            <table>
                                <tr ><td colspan="3" style="text-align:center;">Maximium Marks</td></tr>
                                <tr>
                                    <td>Internal Marks</td>
                                    <td>External Marks</td>
                                    <td>Total of Int & Ext</td>
                                </tr>
                                <tr>
                                    <td>30</td>
                                    <td>70</td>
                                    <td>100</td>
                                </tr>
                                <tr>
                                    <td>30</td>
                                    <td>70</td>
                                    <td>100</td>
                                </tr>
                                <tr>
                                    <td>30</td>
                                    <td>.</td>
                                    <td>100</td>
                                </tr>
                                <tr>
                                    <td>.</td>
                                    <td>.</td>
                                    <td>.</td>
                                </tr>

                                <tr ><td colspan="3" style="text-align:center;"><img src=" " >Verified By</td></tr>
                            </table>
                        </div>
                        <div class="foot1">
                            <table>
                                <tr ><td colspan="2" style="text-align:center;">Maximium Marks</td></tr>
                                <tr>
                                    <td>External Exam</td>
                                    <td>Total of Int & Ext</td>
                                </tr>
                                <tr>
                                    <td>25</td>
                                    <td>40</td>
                                </tr>
                                <tr>
                                    <td>25</td>
                                    <td>40</td>
                                </tr><tr>
                                    <td>.</td>
                                    <td>12</td>
                                </tr>
                                <tr>
                                    <td>.</td>
                                    <td>.</td>
                                </tr>
                                <tr>
                                    <td> </td>
                                    <td></td>
                                </tr>

                                <tr id="sign" ><td colspan="3" style="text-align:center;"><img src="sign1.png " >Controller of Examinations</td></tr>
                            </table>
                        </div>
                  </div>
              </div>
        </div>
    </section>
    <footer>
        <button class="btn" onclick="saveaspdf()">
                 Download
        </button>
        <button class="btn">
          <a href="user.php" >BACK </a>
        </button>
    </footer>
    <script>
        function saveaspdf() {
        }
        </script>
</body>
</html>
