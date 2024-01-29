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



<h2>All trains schedule</h2>
    <table border="2px"; solid black>
      <tr>
        <th>train ID</th>
        <th>train name</th>
        <th>start place</th>
        <th>end place</th>
		<th>start time</th>
		<th>end time</th>
		<th>start date</th>
		<th>end date</th>
		
		
		
      </tr>
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

$sql = "SELECT train_ID, train_name, start_place, end_place, start_time, end_time,start_date,end_date from train";
$result = $conn-> query($sql);

if ($result-> num_rows > 0) {
  while ($row = $result-> fetch_assoc()) {
    echo "<tr><td>". @$row["train_ID"] ."</td><td> ".@ $row["train_name"] ."</td><td> ". @$row["start_place"] ." </td><td>". @$row["end_place"] ."</td><td> ". @$row["start_time"] ." </td><td>". @$row["end_time"] ." </td><td>". @$row["start_date"] ."</td><td> ". @$row["end_date"] ."</td></tr>";
  }
  echo "</table>";
}
else {
  echo "No Result Found";
}
$conn->close();
?>

</table>

<div class="footer">
  <p>Railway Ticket Booking System Sri Lanka</p>
</div>

</body>

</html>