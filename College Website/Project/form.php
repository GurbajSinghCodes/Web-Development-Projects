<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        label{
            color: aliceblue;
            display: inline-block;
            width:100px;
        }
        body{
            background-image: linear-gradient(to right,rgb(32, 142, 182),rgb(115, 190, 211),rgb(255, 255, 255));
        }
        legend{
            font-size: 20px;
            color: yellow;
        }
    </style>
</head>
<body>
<?php include"navbar.php"?>
    <form action="" method="POST">
        <fieldset>
            <legend align="center">FILL YOUR INFORMATION BELOW</legend>
            <label for="Firstname">Firstname : </label><input type="text" name="firstname" placeholder="Enter your firstname" required><br><br>
            <label for="Lastname">Lastname : </label><input type="text" name="lastname" placeholder="Enter your lastname"><br><br>
            <label for="Roll">Roll.No :</label><input type="number" name="rollno" placeholder="Enter your board Roll.No." required><br><br>
            <label for="Branch">Branch :</label>
            <select name="branch">
                <option>----Select----</option>
                <option>Computer</option>
                <option>Civil</option>
                <option>Mechanical</option>
                <option>Electrical</option>
                <option>Electronics</option>
            </select><br><br>
            <label for="Suggestions">Suggestion(s) :</label><textarea name="suggestions" id="" cols="50" rows="5" placeholder="Drop any suggestion(s) for improvements"></textarea> <br><br>
        
            <input type="submit" name="" id="">
            <input type="reset">
        </fieldset>
    </form>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
$servername=''; /* Your servername here*/
$username='';   /* Your hosting username here*/
$password='';    /* Your password here*/
$database='';    /* Database name here*/

$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn){
    echo "Can't connect".mysqli_connect_error();
 }



    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $rollno=$_POST['rollno'];
    $branch=$_POST['branch'];
    $suggestions=$_POST['suggestions'];



        $sql="INSERT INTO formdata(Firstname,Lastname,RollNo,Branch,Suggestions) values('$firstname','$lastname','$rollno','$branch','$suggestions')";
        
$result=mysqli_query($conn,$sql);
if($result ===TRUE ){
    echo '<script>alert("Data Submitted Successfully")</script>';
}
else{
    echo '<script>alert("Can not Submit data")</script>';
}
}
?>
</body>
</html>