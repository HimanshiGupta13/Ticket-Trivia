<?php
$a=0;
if(isset($_POST['Name'])){
$server="localhost";
$username="root";
$password="";

$con= mysqli_connect($server,$username,$password);

if(!$con){
    die("Connection to this database failed due to".mysqli_connect_error());
    //echo"Success connecting to the db";
}
$Name=$_POST['Name'];
$State=$_POST['State'];
$Adhaar=$_POST['Adhaar'];
$Phone=$_POST['Phone'];
$place=$_POST['place'];
//$Link=$_GET['Link'];
$Link = isset($_GET['Link']) ? $_GET['Link'] : '';
$sql="INSERT INTO `project`.`project` (`Name`, `State`, `Adhaar`, `Phone`, `place`) VALUES ('$Name', '$State','$Adhaar', '$Phone', '$place')";
if($con->query($sql) == true){
    //echo"Sucessfully recieved!";
$a=1;
}
else{
    echo"ERROR :$sql <br> $con->error";
}
$con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="bg.jpg" alt="indian culture" srcset="">
<div class="container">
<h1><b>TICKET TRIVIA</b></h1>
<br>
<p class="para"></p><br>
<?php
if($a==1){
echo"<p class='submit'><b>Your ticket is being processed. Thank you! </b></p>";
}
?>

<form action="index.php" method="post">
    <input type="text" name="Name" id="Name" placeholder="Enter your name">
    <input type="text" name="State" id="State" placeholder="Enter your permanent address">
    <input type="text" name="Adhaar" id="Adhaar" placeholder="Enter Adhaar number">
    <input type="text" name="Phone" id="Phone" placeholder="Enter Phone number">
    <input list="place" name="place" id="place" placeholder="Enter place">
 


    <button class="btn">PROCEED</button>


</form>

</div> 
<script src="index.js"></script>

</body>
</html>