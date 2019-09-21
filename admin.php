<!DOCTYPE html>
<html>
<head>
  <title>Admin:Travotel</title>
   <link rel="shortcut icon" type="image/png" href="favicon.png">
   <style type="text/css">
    *{
  margin: 0;
  padding: 0;
}
header{
  background:linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8));
  height: 10vh;
  background-size: cover;
  background-position: center;
  font-family: Century Gothic;
}
ul{
  float: left;
  margin-left: 250px;
  list-style-type: none;
  margin-top: 150px;
  padding-right:130px;
}
ul li{
  display: inline-block;
}
ul li a{
  text-decoration: none;
  font-size: 50px;
  color: #000;
  padding: 5px 20px;
  border: 1px solid transparent;
  transition: 0.7s ease-out;
}
ul li a:hover{
  background-color: #000;
  color: #fff;
}
.logo img{
  float:left;
  width: 200px;
  height: auto;
  margin-top: 20px;
}
body
{
  background-color: #fff5cc;
  background-size: cover;
  background-repeat: no-repeat;
}
</style>
</head>
<body>

<header>
      <div class="main">
      	<div class="logo">
      		<img src="logo.png">
      	</div>
</header>
        <ul>

<li><a href="InsertHotel.php">Insert a new Hotel</a></li>
<br><br>
<li><a href="UpdateHotel.php">Update Hotel Details</a></li>
<br><br>
<li><a href="DeleteHotel.php">Delete Hotel </a></li>
<br><br>
<li><a href="InsertRoom.php">Insert Room Type for Hotel </a></li>
<br><br>
<li><a href="UpdatePrice.php">Update Room Price for Hotel </a></li>
<br><br>
<li><a href="ViewHotel.php">View Hotels </a></li>
<br><br>
<li><a href="MonthEntry.php">Bookings for Current Month </a></li>
<br><br>
<li><a href="Login.php">Logout </a></li>


</ul>
</div>
</body>
</html>

