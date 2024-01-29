<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #87efef;
}

li {
    float: left;
}

li a {
    display: block;
    color: black;
    text-align: left;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #abdcdc;
}

.topnav input[type=text] {
    float: right;
    padding: 6px;
    border: none;
    margin-top: 8px;
    margin-right: 16px;
    font-size: 17px;
}

* {
  box-sizing: border-box;
}

.right {
  background-color:#b7c2bc;
  float:center;
  width:33%;
  height:40%;
  padding:15px;
  margin-top:7px;
  margin-left:0px;
  text-align:center;
}
.main {
   background-color:#e5e5e5;
  float:right;
  width:40%;
  padding: 20px;
  margin-top:7px;
  margin-left:7px;
  text-align:center;
}
body {font-family: Verdana, sans-serif;}

.footer {
   position: fixed;
   left: 0;
   bottom: 10px;
   width: 100%;
   background-color:  #4c4d4e ;
   color: white;
   text-align: center;
}
  

</style>
</head>
<body> <body style bgcolor="e4efe9">


<div style="background-color:#e5e5e5;padding:15px;text-align:center;">
  <h1><u>Railway Ticket Booking System</U></h1>
</div>


<ul>
  <li><a class="active" href="home.html">Home</a></li>
  <li><a href="Registration.html">Registration</a></li>
  <li><a href="Booking.html">Booking</a></li>
  
  
  <div class="topnav">
  <input type="text" placeholder="Search..">
</div>

</ul>



<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "railwaybooking";


$cid = $_POST["Customer_ID"];
$tid  = $_POST["Train_ID"]; 
$dt = $_POST["Date"];
$clz =$_POST ["class"];
$sts = $_POST ["seats"];
// Create connection
$conn = mysqli_connect ($servername, $username, $password, $dbname);
// Check connection
//if ($conn->connect_error)
//{
    //die("Connection failed: " . $conn->connect_error);
//}
$insert = "INSERT INTO booking (Customer_ID,train_ID,date,class,seats) VALUES ('$_POST[Customer_ID]','$_POST[Train_ID]','$_POST[Date]','$_POST[class]','$_POST[seats]')";

if (!empty($cid)&&!empty($tid)&&!empty($dt)&&!empty($clz)&&!empty($sts)){

if (mysqli_query($conn,$insert))
{
    echo "<h1>New record created successfully</h1>";
} else
{
   // echo "Error: " . $insert . "<br>" . $conn->error;
   echo "please check customer ID and train_ID";
   
}
}else{ echo "please fill the all details";}
//$conn->close();
?>
    
    
  



</body>

</html>