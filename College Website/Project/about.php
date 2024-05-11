<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
   
   <style>
        body background: linear-gradient(
    rgb(237 237 237),
    rgb(230 230 230),
    rgb(158 161 161)
  );
         .container{
        padding:60px;

        display:flex;
        flex-direction:row;
        justify-content:center;
        align-items:center;
        width:100vw;
        color:rgb(0,9,9);
        gap:40px;
    }
    .box{
        padding:1%;
        display:flex;
        flex-direction:column;
        justify-content:center;
        align-items:center;
        max-width:90%;
        background: rgb(154 206 223);
        box-shadow: 10px 10px 20px black;

    }
    p{
        font-size:20px;

    }
  
    .container .box ol li{
        padding:20px;
        font-size:20px;
    }
    .container .box ol li a{
        text-decoration:underline;
        color:black;
    
    }
   </style>
</head>
<body>
    <?php include"navbar.php"?>
<div class="container">
  <div class="box">
    <ol style=" list-style-type:square;">
    <li>This portal allows users to pay their institute fee</li>

      <li>
        New users should firstly register themselves by going to
        <a href="/feeportal/signup.php">THIS PAGE</a>
      </li>
      <li>
        Users who are already registered should login using their credentials
        <a href="/feeportal/login.php">HERE</a>
      </li>
        <li> Previous year question papers of different subjects are also provided  </li>
    <li>Users can also check their result by clicking on the button to check the result</li>
    <p>(For this they will be redirected to the official portal)</p>
     <li>A link in navbar named "FILL USER FORM" takes users to a form where they can submit their suggestions(or reviews)</li>
    </ol>
  </div>
</div>
</body>
</html>