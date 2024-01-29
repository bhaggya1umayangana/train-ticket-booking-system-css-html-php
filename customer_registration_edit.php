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
  float:left;
  width:33%;
  height:40%;
  padding:15px;
  margin-top:7px;
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

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}
@$Customer_ID = $_REQUEST["Customer_ID"];
@$Customer_Name = $_POST["Customer_Name"];
@$Customer_Address = $_POST["Customer_Address"];
@$Customer_TP = $_POST["Customer_TP"];

$sql = "UPDATE customer
        SET Customer_Name = '$Customer_Name', Customer_Address = '$Customer_Address', Customer_TP = '$Customer_TP'
        WHERE Customer_ID = '$Customer_ID'";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
  }
  $conn->close();

?>
















			
			 <IMG STYLE="position:absolute; TOP:175px; right:10px; WIDTH:1000; HEIGHT:500px" SRC="railroad-railroad-track-railway-325200.jpg">

</body>
</html>