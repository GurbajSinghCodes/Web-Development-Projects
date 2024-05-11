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
$username=$_POST['UserName'];
$passkey=$_POST['password'];

$sql="SELECT * from feeportal where UserName='$username' and PassKey='$passkey'";
$result=mysqli_query($conn,$sql);
if($result){
    if(mysqli_num_rows($result)>0){
        $row=mysqli_fetch_assoc($result);
        $fullname=$row['Fullname'];
        $fathername=$row['FatherName'];
        $rollno=$row['RollNo'];   }
    else{
          $fullname="unavailable";
          $fathername="unavailable";
          $rollno="0";
        }
}}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome</title>
    <link rel="stylesheet" href="navstyle.css" />
  </head>
  <link rel="stylesheet" href="formstyle.css" />
  
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
            <img
              src="https://www.nicepng.com/png/full/536-5365113_haryana-govt-logo-png.png"
              height="50px"
              alt=""
            />
          </li>
          <li>
            <h3>Government Polytechnic, Rajpur <br />Sadhaura</h3>
          </li>
          <li>
            <img
              src="https://th.bing.com/th?id=OIP.Yj5vw78TEyR2RI4-4nSdXAHaHB&w=256&h=243&c=8&rs=1&qlt=90&o=6&pid=3.1&rm=2"
              height="50px"
              alt=""
            />
          </li></ul >
    </div>
</div>
    <div class="form">
      <form action="paymentportal.html" method="POST" id="signupform">
        <div class="input-box">
          <input
          disabled=true;
            type="text"
            id="fullname"
            placeholder="Enter your fullname "
            name="fullname"
            value=<?php echo $fullname ?>
          />
        </div>
        <div class="input-box">
          <input
          disabled=true;
            type="text"
            placeholder="Enter your father's name"
            name="fathername"
            value=<?php echo $fathername ?>
          />
        </div>
        <div class="input-box">
          <input
          disabled=true;
            type="number"
            placeholder="Enter college roll-no"
            name="rollno"
            value=<?php echo $rollno ?>
          />
        </div>
        <div class="input-box">

          <input disabled=true; type="password" placeholder="Enter password" name="password" id="password1" value=<?php echo $passkey ?> />
</div>
       <input type="submit" value="Go to Payment Portal" id="submit" disabled="<?php if($fullname=="unavailable") echo 'true'; else echo'false';  ?>"/>
        
      </form>
    </div>
    <script src="navscript.js"></script>
    <script src="formscript.js"></script>
  </body>  
</html>

