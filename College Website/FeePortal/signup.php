<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome</title>
    <link rel="stylesheet" href="navstyle.css" />
    <link rel="stylesheet" href="formstyle.css" />
  </head>
  
  <body>
    <!-- navbar -->
    <nav>
      <ul class="topbar">
        <li>HSBTE</li>
        <li class="hidethis"><a href="">home</a></li>
        <li class="hidethis"><a href="">about</a></li>
        <li class="hidethis"><a href="">contact-us</a></li>
        <li>
          <svg
            id="openButton"
            style="fill: white"
            xmlns="http://www.w3.org/2000/svg"
            height="24"
            viewBox="0 -960 1000 960"
            width="24"
          >
            <path
              d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"
            />
          </svg>
        </li>
      </ul>

      <ul class="sidebar">
        <li>
          <svg
            id="closeButton"
            style="fill: white"
            xmlns="http://www.w3.org/2000/svg"
            height="24"
            viewBox="0 -960 960 960"
            width="24"
          >
            <path
              d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"
            />
          </svg>
        </li>

        <li><a href="">home</a></li>
        <li><a href="">about</a></li>
        <li><a href="">contact-us</a></li>
      </ul>
    </nav>

    <div class="headerparent">
    <div class="headerchild">
     <ul>
          <li>
           <img src="https://www.nicepng.com/png/full/536-5365113_haryana-govt-logo-png.png" height="50px" alt="" />
          </li>
          <li>
            <h3>Government Polytechnic, Rajpur <br />Sadhaura</h3>
          </li>
          <li>
            <img src="https://th.bing.com/th?id=OIP.Yj5vw78TEyR2RI4-4nSdXAHaHB&w=256&h=243&c=8&rs=1&qlt=90&o=6&pid=3.1&rm=2" height="50px" alt=""/>
          </li></ul >
    </div>
</div>
    <?php
if($_SERVER['REQUEST_METHOD']=='POST'){
  
$servername='localhost';
$username='root';
$password='';
$database='test';
$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn){
    die("Server down! Please try after sometime. ");
}

$fullname=$_POST["fullname"];
$fathername=$_POST["fathername"];
$rollno=$_POST["rollno"];
$passkey=$_POST["password"];
$UserName=substr(str_replace(' ','',$fullname),0,4).substr(uniqid(),-5);

$sql="INSERT INTO feeportal (Fullname,Fathername,RollNo,Passkey,UserName) VALUES ('$fullname','$fathername','$rollno','$passkey','$UserName') ";
$result=mysqli_query($conn,$sql);
if($result){
  echo '<div style="display:flex;justify-content:center"> <div style=" padding:10px; border-radius:10px; background-color:white; margin-top:20px; text-align:center; display:inline-block">Data submitted successfully. Your username is ',$UserName,' and password is ',$passkey,'</div> </div>';
}
else{
  echo '<div style=" display:flex;justify-content:center"> <div style=" padding:10px; border-radius:10px;background-color:white; margin-top:20px; text-align:center; display:inline-block">Error submitting data. Try again later.<br> Make sure you are not already registered.</div> </div>';
}

}
?>
    <div class="form">
      <form action="" method="POST" id="signupform">
        <div class="input-box">
          <input
            type="text"
            placeholder="Enter your fullname"
            name="fullname" required
          />
        </div>
        <div class="input-box">
          <input
            type="text"
            placeholder="Enter your father's name"
            name="fathername" required
          />
        </div>
        <div class="input-box">
          <input
            type="number"
            placeholder="Enter college roll-no"
            name="rollno" required
          />
        </div>
        <div class="input-box">
          <input
            type="date"
            placeholder="Enter your DOB"
            name="dob" required
          />
        </div>
        <div class="input-box">
          <input type="password" placeholder="Enter password" name="password" id="password1" required />
        </div>
        <div class="input-box">
          <input type="password" placeholder="Re-type password" id="password2" required/>
        </div>
        <div id="unmatched"></div>
       <input type="submit" value="Submit" id="submit" />
        <div class="backtologin">
          <p>Already have an account</p>
          <a href="login.php">Go to login</a>
        </div>
      </form>
    </div>
    <script src="navscript.js"></script>
    <script src="formscript.js"></script>
  </body>
</html>

