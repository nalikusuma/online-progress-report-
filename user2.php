<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="index.css"> -->
    <link rel="stylesheet" href="user.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>
    <style>
        marquee a{
    color:red;
 text-shadow:1px 2px 2px red;
    font-size:18px;
    font-weight:bold;
    width:700px;
    
}
body{
    background-color:rgb(22,12,159);
}
</style>
                
</head>
<body>
    <header>
        <img src="enhanced_image (2).jpg" id="icon" >
        <h1>Online progress report generator </h1>
        <line></line>
        <h4>college Report</h4>
        <ul>   <li>Home</li>
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
    <marquee>
             <a href="user.php">REQUIRED EXTERNAL MARKS</a>
        </marquee><br>
    <section id="sec2">
        <form action=" temp2.php" method="post">
            <label>Username</label><br>
            <input type="text" name="name" placeholder="Username"><br>
            <label>Admission No</label><br>
            <input type="username" name="no" placeholder="enter hall ticket no"><br>
            <label>semester</label><br>
            <select name="sem">
                <option>select</option>
                <option >1st sem internal</option>
                <option >2nd sem internal</option>
                <option >3rd sem internal</option>
                <option >4th sem internal</option>
                <option >5th sem internal</option>
                <option >6th sem internal</option>
                <option >7th sem internal</option>
            </select><br>
            <button type="submit">Submit</button>
        </form>
    </section>
    
</body>
</html>



 




