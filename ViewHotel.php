<!DOCTYPE html>
<html>
<head>
  <title>View hotel</title>
  <link rel="shortcut icon" type="image/png" href="favicon.png">
  <link href="https://fonts.googleapis.com/css?family=Alike+Angular|Asul|Eczar|Work+Sans" rel="stylesheet">
<style type="text/css">
				*{
				  margin: 0;
				  padding: 0;
				}
				header{
	  				background :linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8));
	  				height: 10vh;
	  				background-size: cover;
	  				background-position: center;
	  				font-family: Century Gothic;
				}
				ul{
				  float: right;
				  list-style-type: none;
				  margin-top: 25px;
				  padding-right:60px;
				}
				ul li{
				  display: inline-block;
				}
				ul li a{
				  text-decoration: none;
				  color: #fff;
				  padding: 5px 20px;
				  border: 1px solid transparent;
				  transition: 0.9s ease-out;
				}
				ul li a:hover{
				  background-color: #fff;
				  color: #000;
				}
				.logo img{

				  float:left;
				  width: 200px;
				  height: auto;
				  margin-top: 10px;
				}
				.main{
				  max-width: 1200px;
				  margin:auto;
				}  
				body
				{
					background-color: #fff5cc;
				    background-size: cover;
				    background-repeat: no-repeat;
				}
	          .text1{
	              	
	              	padding-top: 100px;
	              	font-family:'Azul',Footlight MT Light;
	           		color: white;
		            height: 100%;
		            padding-left: 350px;
		            left:100px;
		            font-size: 35px;
		       }
		       .text1 table{
		       		border-collapse: collapse;
    				width:70%;
    				background-color: #fff;
		       }
		       th, td {
				    padding: 10px;
				    text-align: left;
				    border-bottom: 1px solid #ddd;

				}
				th{
					background-color: black;
				}
				td
				{
					color: black;
				}
				tr:hover {background-color:#d1e0e0;transition: 0.9s ease-in-out;}
</style>
</head>
<body>
<header>
      <div class="main">
        <div class="logo">
          <img src="logo.png">
        </div>
        <ul>
        <li><a href="admin.php">Admin HOME</a></li>
        </ul>  
  </div>
</header>



<div class="text1">


<?php 
$servername="localhost";
$username="root";
$password="";
$db="login_temp";
$conn=mysqli_connect($servername,$username,$password,$db) or die("Error connecting to MYSQL server.");

$q1="select * from hotel";
$res1=mysqli_query($conn,$q1);
echo "<table>";
echo "<tr><th>ID</th><th>NAME</th><th>LOCATION</th></tr>";
while($row=mysqli_fetch_assoc($res1))
{
	echo "<tr><td>{$row['hid']}</td><td>{$row['hname']}</td><td>{$row['hloc']}</td></tr>";
}
echo "</table>";
?>
</div>
</body>

</html>


