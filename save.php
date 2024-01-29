<html>
<head></head>
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
  float:right;
  width:30%;
  height:20%;
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
 .carousel-inner img {

      width: 100%; /* Set width to 100% */
      margin: auto;
  }
  .carousel-caption h3 {
      color: #fff !important;
  }
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
  }
  
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








<body>

<body style bgcolor="e4efe9">


<div style="background-color:#e5e5e5;padding:15px;text-align:center;">
  <h1><u>Railway Ticket Booking System</U></h1>
</div>


<ul>
  <li><a class="active" href="home.html">Home</a></li>
  <li><a href="registration.html">Registration</a></li>
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

//$cid = $_POST["Customer_ID"];

if (!empty($_POST['Customer_ID']) && !empty($_POST['Customer_Name']) && !empty($_POST['Customer_Address']) && !empty($_POST['Customer_TP'])){

if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO customer (Customer_ID, Customer_Name,Customer_Address,Customer_TP)
VALUES ('$_POST[Customer_ID]','$_POST[Customer_Name]','$_POST[Customer_Address]','$_POST[Customer_TP]')";

if ($conn->query($sql) === TRUE)
{
    echo "<center><h1>New record created successfully</h1></center>";
} else
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}else{ echo "please fill the all details";}
//$conn->close();
?>

    

   
   <div class="footer">
  <p>Railway Ticket Booking System Sri Lanka</p>
</div>
    
</body>

</html>