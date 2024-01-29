html>
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
  margin-top:100px;
  margin-left:450px;
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

$sql = "DELETE FROM customer WHERE Customer_ID = '$Customer_ID'";

if ($conn->query($sql) === TRUE) {
  echo "<h1>Record Delete successfully</h1>";
} else {
  echo "Error Delete record: " . $conn->error;
  }
  $conn->close();

?>







    
  

<IMG STYLE="position:absolute; TOP:175px; right:10px; WIDTH:1000; HEIGHT:500px" SRC="asdfg.jpg">

</body>

</html>