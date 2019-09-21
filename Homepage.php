<!DOCTYPE html>
<html>
<head>
  <title>Travotel</title>
  <link rel="shortcut icon" type="image/png" href="favicon.png">
  <style type="text/css">
    *{
  margin: 0;
  padding: 0;
}
header{
  background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(resort.jpg);
  height: 80vh;
  background-size: cover;
  background-position: center;
  font-family: Century Gothic;
}
ul{
  float: right;
  list-style-type: none;
  margin-top: 25px;
  padding-right:130px;
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
  margin-top: 20px;
}
.SearchBox
{
  position: absolute;
  top: 60%;
  left:52%;
  width: 500px;
  transform: translate(-50%,-50%);
}
input
{
  position: relative;
  display: inline-block;
  font-size: 20px;
  box-sizing: border-box;
  transition: 0.9s;
}
input[type="text"]
{
  background: #fff;
  width: 340px;
  height: 50px;
  border: none;
  outline: none;
  padding: 0 25px;
  border-radius: 25px 0 0 25px;
}
input[type="submit"]
{
  position: relative;
  left: -50px;
  border-radius: 0 25px 25px 0;
  width: 150px;
  height: 50px;
  border: none;
  outline: none;
  cursor: pointer;
  background: #ffc107;
  color: #fff;
}
input[type="submit"]:hover
{
  background: #ff3333;
}


.main{
  max-width: 1200px;
  margin:auto;
}
.title{
  position: absolute;
  top: 45%;
  left: 50%;
  transform: translate(-50%,-50%);
  color: #fff;
  font-size: 90px;
}
.division1
{
  background-color: ;
}
.column {
    float: left;
    width: 30%;
    padding: 15px;
  padding-left: 30px;
}
.row:after {
    content: "";
    display: table;
    clear: both;
}
.division1 img{
  transition: 0.6s ease;
  overflow: hidden;
}
.division1 img:hover{
  -moz-transform: scale(1.1);
  -webkit-transform: scale(1.1);
  transform: scale(1.1);
}
img[src="Moscow.jpg"] 
{
  border-radius: 10px;
  width: 90%;
  height: auto;

}
img[src="New Delhi.jpg"] 
{
  border-radius: 10px;
  width: 90%;
  height: auto;

}
img[src="Miami.jpg"] 
{
  border-radius: 10px;
  width: 90%;
  height: auto;

}
img[src="London.jpg"] 
{
  border-radius: 10px;
  width: 90%;
  height: auto;

}
img[src="Oslo.jpg"] 
{
  border-radius: 10px;
  width: 90%;
  height: auto;

}
img[src="Toronto.jpg"] 
{
  border-radius: 10px;
  width: 90%;
  height: auto;

}
img[src="Ratings.png"]
{
  width: 70%;
  height: auto;
}
.division2
{
  background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(luxury.jpg);
  height: 60vh;
  background-size: cover;
  background-position: center;
}
.division2 p
{
  color: white;
}
.row1:after {
    content: "";
    display: table;
    clear: both;
}

.footer {
    padding: 20px;
    text-align: center;
    background:  #000;
    margin-top: 20px;
}
  </style>
</head>
<body>
    <header>
      <div class="main">
      	<div class="logo">
      		<img src="logo.png">
      	</div>
        <ul>
          <li><a href="#">
            <?php
               $db = mysqli_connect('localhost','root','','login_temp') or die ('Error connecting to MySQL server.');
        
                     if(!isset($_SESSION["user1"]))
                     {
                          session_start();
                      }
                    echo $_SESSION["user1"];
                ?>



          </a></li>
          <li><a href="MyAccount.php">My Account</a></li>
          <li><a href="http://localhost/Forms/Login.php">Log Out</a></li>
        </ul>
      </div>
      <div>
      	<h1 class="title">Travotel Hotels</h1>
      </div>

      <div class="SearchBox">
        <form method="get" action = "http://localhost/Forms/Hotel_search.php?searched=searched&searchbutton=Search">
          <input type="text" name="searched" placeholder="Eg. New Delhi" required>
          <input type="submit" name="searchbutton" value="Search">
        </form>
      </div>
    </header>
    
<div class="division1">
<div class="row">
	<h1 style="font-family: Bradley Hand ITC;font-size:300%;color: white;background-color: black;"><center>Popular Destinations   </center></h1>
	<h3 style="font-family: Courier;"><center>Explore Deals In Every City</center></h3>
  <div class="column">
    <p><center><a href="http://localhost/Forms/Hotel_search.php?searched=moscow&searchbutton=Search"><img src="Moscow.jpg"></a></center></p>
  </div>
  <div class="column">
    <p><center><a href="http://localhost/Forms/Hotel_search.php?searched=new+delhi&searchbutton=Search"><img src="New Delhi.jpg"></a> </center></p>
  </div>
  <div class="column">
    <p><center><a href="http://localhost/Forms/Hotel_search.php?searched=miami&searchbutton=Search"><img src="Miami.jpg"></a> </center></p>
  </div>
</div>
<div class="row">
  <div class="column">
    <p><center><a href="http://localhost/Forms/Hotel_search.php?searched=london&searchbutton=Search"><img src="London.jpg"></a> </center></p>
  </div>
  <div class="column">
    <p><center><a href="http://localhost/Forms/Hotel_search.php?searched=oslo&searchbutton=Search"><img src="Oslo.jpg"></a> </center></p>
  </div>
  <div class="column">
    <p><center><a href="http://localhost/Forms/Hotel_search.php?searched=Toronto&searchbutton=Search"><img src="Toronto.jpg"></a> </center></p>
  </div>
</div>
</div>
<br>
<div class="division2">
<div class="row1"><hr>
	<h1 style="font-family: Bradley Hand ITC;font-size:300%;color: white;"><center>People Are Talking</center></h1>
  	<div class="column">
    <p>
    	<img src="Ratings.png">
    </p>
    <p style="font-family: Footlight MT Light;font-size:175%">
    	So easy to use, Works like a charm. In addition, the deals are insane. Really impressive service.<br>
    	- KtotheAyo, App Store
    </p>
  	</div>
  	<div class="column">
    <p>
    	<img src="Ratings.png">
    </p>
    <p style="font-family: Footlight MT Light;font-size:175%">
    	Can't believe how incredibly convenient it is to use and how great the prices are! It's saved us a ton of money and potential stress.<br>
    	- Kat K, Google Play
    </p>
	</div>
    <div class="column">
    <p>
    	<img src="Ratings.png">
    </p>
    <p style="font-family: Footlight MT Light;font-size:175%">
    	This is the best website for hotels that I have found in a very long time. Their prices are unbeatable.<br>
    	- FightingtheFight99, App Store
    </p>
	</div>
</div></div><hr>



<div class="footer" style="color: white;font-family: Verdana">
  <p> &copy 2018 Travotel.</p>
</div>
</body>
</html>