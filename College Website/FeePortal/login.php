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

}?>
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
      <form action="<?php
if($_SERVER['REQUEST_METHOD']=='POST'){

  if(mysqli_num_rows($result)>0){
  echo "redirect.php";
  }
  else{
    echo "wrongcredentials.html";
  }    
  }  ?>" method="POST">
        <div class="input-box">
          <input type="text" placeholder="Enter username" name="UserName" required/>
        </div>
        <div class="input-box">
          <input type="password" placeholder="Enter password" name="password" required/>
        </div>

        <input type="submit" value="Submit" id="submit"  />
        <div class="newacc">
          <p id="newacc">Don't have an account</p>
          <a href="signup.php">Create new !</a>
        </div>
      </form>
    </div>
    <script src="navscript.js"></script>
  </body>
</html>
