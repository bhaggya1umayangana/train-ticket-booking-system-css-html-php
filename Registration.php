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



<div class="right">
    
    
  
<form action="save.php" method="POST"> 
				<table> 
					<tr> 
						<td><h2><center><h4>Customer Registration</h4></center></h2></td> 
					</tr>
					<tr> 
						<td><label for="Customer_ID">Customer ID: </label></td>
						<td><input type="text" id="Customer_ID" name="Customer_ID"/><td> 
					</tr> 
					<tr> 
						<td><label for="Customer_Name">Customer Name: </label></td> 
						<td><input type="text" id="Customer_Name" name="Customer_Name" /></td> 
					</tr>
					<tr> 
						<td><label for="Customer_Address">Customer Address: </label></td> 
						<td><input type="text" id="Customer_Address" name="Customer_Address" /></td> 
					</tr>
					<tr> 
						<td><label for="Customer_TP">Customer Telephone: </label></td>
						<td><input type="text" id="Customer_TP" name="Customer_TP" /></td> 
					</tr>
					 					
				</table> 
				<br></br> <input type="submit" value="submit"> 
			</form> 

			
			
			 <input type="button" onclick="location.href='Add_customer_details.html'" value="Add another customer" />
             <input type="button" onclick="location.href='customer_registration_edit.html'" value="Edit Details"/>
             <input type="button" onclick="location.href='details_delete.html'" value="Delete details"/>
</div>


 <IMG STYLE="position:absolute; TOP:175px; right:10px; WIDTH:1000; HEIGHT:500px" SRC="tips-on-budget-Train-travel-in-Sri-Lanka.jpg">

</body>
</html>