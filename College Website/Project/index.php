<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="shortcut icon" href="https://www.bing.com/th?id=OIP.03JzQpcFTF1ZcPYIq7N17gHaHa&w=150&h=150&c=8&rs=1&qlt=90&o=6&pid=3.1&rm=2" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style.css" />
        <link rel="stylesheet" href="/feeportal/homepagecss.css" />
        <link rel="stylesheet" href="homecss.css" />
        
        

</head>
<body>
   <?php include"navbar.php"?>
      
    
 <!--  Carousel -->
<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="Images/Image1.PNG" class="d-block w-100" alt="Error Loading Image">

    </div>
    <div class="carousel-item">
      <img src="Images/Image2.PNG" class="d-block w-100" alt="Error Loading Image">
    </div>
    <!--- <div class="carousel-item">
    <img src="345.png" class="d-block w-100" alt="Error">
  </div>--->
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>    
<div class="container">
  <div class="row">
    <div class="card col-lg-6 col-md-12 col-sm-12 mx-0" id="selectbranch">
  <div class="card-body">
    <h5 class="card-title">Select your polytechnic</h5>
  <div class="Maps">
     <form> <label for="location">Choose your Polytechnic :</label>
  <select name="location" id="location">
    <option value="Panchkula">Panchkula</option>
    <option value="Ambala">Ambala</option>
    <option value="Hathnikund">Hathnikund</option>
    <option value="Damla">Damla</option>
    <option value="Sadhaura">Sadhaura</option>
  </select>
 <button type="button" onclick="select1()">Submit</button>
     </form>
 </div>

<div class="value" ></div>
<div class="value1"></div>
<div class="value3"></div>
</div>
</div>
<script>
    function select1(){
         let a=document.getElementById('location').value;
         console.log(a);
         if(a=='Panchkula'){
         document.getElementsByClassName('value')[0].innerHTML=("Haryana State Board Of Technical Education, Bays 7-12, Sector 4, Panchkula, Haryana 134112");
         document.getElementsByClassName('value1')[0].innerHTML=(' <a href="https://maps.app.goo.gl/BVAW5pJqbZ8LKDCX8" class="links">Click here to open in Google Maps</a>');
         document.getElementsByClassName('value3')[0].innerHTML=('<a href="https://gppanchkula.ac.in" class="links"> Go to official website</a>');
         }
         if(a=='Ambala'){
         document.getElementsByClassName('value')[0].innerHTML=("Government Polytechnic College, Near Civil Hospital, Ambala, Haryana 134003");
         document.getElementsByClassName('value1')[0].innerHTML=('<a href="https://maps.app.goo.gl/1fYezq9cWsqvbqPaA" class="links"> Click here to open in Google Maps</a>');
         document.getElementsByClassName('value3')[0].innerHTML=('<a href="https://gpambala.ac.in" class="links" >Go to official website</a>');
         } 
         if(a=='Hathnikund'){
         document.getElementsByClassName('value')[0].innerHTML=("Ch Ranbir Singh Government Polytechnic, Hathnikund, Distt Yamunanagar, Haryana, India");
         document.getElementsByClassName('value1')[0].innerHTML=('<a href="https://maps.app.goo.gl/8de818DdVPF4ES7g7" class="links"> Click here to open in Google Maps</a>');
         document.getElementsByClassName('value3')[0].innerHTML=('<a href="https://crsgphathnikund.ac.in" class="links" >Go to official website</a>');
         }
         if(a=='Sadhaura'){
         document.getElementsByClassName('value')[0].innerHTML=("Government Polytechnic College,Village Rajpur,Sadhaura,Yamuna Nagar,Haryana 133204");
         document.getElementsByClassName('value1')[0].innerHTML=('<a href="https://maps.app.goo.gl/bA1ujB6SSKgcb3Z98  class="links" "> Click here to open in Google Maps</a>');
          document.getElementsByClassName('value3')[0].innerHTML=('<a href="https://gpsadhaura.ac.in class="links"" >Go to official website</a>');
         }
         if(a=='Damla'){
         document.getElementsByClassName('value')[0].innerHTML=("Seth Jai Prakash Polytechnic,Damla, Ambala, Haryana 135001");
         document.getElementsByClassName('value1')[0].innerHTML=('<a href="https://maps.app.goo.gl/nQmbEBo3vYAzA6W3A" class="links"> Click here to open in Google Maps</a>');
         document.getElementsByClassName('value3')[0].innerHTML=('<a href="https://sjpdamla.ac.in" class="links" >Go to official website</a>');
         }
    }        
  </script>
 <br> 

   <div class="col-lg-6 col-md-12 col-sm-12 mt-5">
      <a class="resultlink" href="https://hsbtehry.in/login">
    <div class="alert alert-danger" role="alert" >
      <center>Click here to check your result</center>
    </div></a>
        </div>
        </div>       
</div>
      <br>
 
        <DIV class="heading">
      <h4 style="text-align: center;">  DOWNLOAD PREVIOUS YEAR QUESTION PAPERS FROM LINKS GIVEN BELOW :-</h4>
    </DIV>    

         <div class="container branchlinks mx-auto">
          <div class="row">

              <div class="col-md-3 mx-sm-2 mx-auto">
          <div class="card">
            <a href="common 1st year.php" class="card-link">
            <div class="card-body">
              <h4>Common 1st Year</h4>
                </div></a>
          </div></div>

         <div class="col-md-3 mx-sm-2 mx-auto">
          <div class="card">
          <a href="computer.php" class="card-link">
            <div class="card-body">
              <h4>Computer</h4>
                </div></a>
          </div> </div>

         <div class="col-md-3 mx-sm-2 mx-auto">
          <div class="card">
            <a href="mechanical.php  " class="card-link">
            <div class="card-body">
              <h4>Mechanical</h4>
                </div></a>
          </div></div>

          <div class="col-md-3 mx-sm-2 mx-auto">
          <div class="card">
            <a href="#" class="card-link">
            <div class="card-body">
              <h4>Civil</h4>
                </div></a>
          </div></div>

         <div class="col-md-3 mx-sm-2 mx-auto">
          <div class="card">
            <a href="electrical.php" class="card-link"><div class="card-body">
              <h4>Electrical</h4>
                </div></a>
          </div></div>

         <div class="col-md-3 mx-sm-2 mx-auto">
          <div class="card">
            <a href="#" class="card-link">
              <div class="card-body">
              <h4>Electronics</h4>
                </div></a>
          </div></div>
     </div>
</div>
     
    <br><br>
    
</body>
</html>