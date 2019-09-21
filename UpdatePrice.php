<!DOCTYPE html>
<html>
<head>
  <title>Update hotel</title>
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

   input[type=text]{
                width: 20%;
                padding: 15px;
                margin: auto;
                display: inline-block;
                border: groove;
                background: #f1f1f1;
            }
  input[type=text]:focus{
                background-color: #ddd;
                outline: none;
            }

          .submitbtn {
                background-color: #4CAF50;
                color: white;
                padding: 16px 20px;
                margin: 8px 0;
                border: none;
                cursor: pointer;
                width: 30%;
                opacity: 0.9;
              }

            .submitbtn:hover {
                opacity: 1;
            }

            .text1{
                  
                  padding-top: 100px;
                  font-family:'Azul',Footlight MT Light;
                color: black;
                height: 100%;
                width: 100%;
                padding-left: 450px;
                left:100px;
                font-size: 25px;
           }
}
}
</style>
</head>
<body>

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
<h2 style="font-family: 'Azul',Arial;padding-top: 100px;"><center>Update Hotel Details</center></h2>
<div class="text1">

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
 
  Hotel ID:&emsp;&emsp;&emsp;&emsp;<input  required type="text" name="hid" placeholder="eg:12">
  <br><br>
  Room Name:&emsp;&emsp;&nbsp;<input  required type="text" name="rtname" placeholder="eg:Single">
  <br><br>
  Room Price: &emsp;&nbsp;<input  required type="text" name="rprice" placeholder="eg:4000">
  <br><br>
  <input type="submit" name="save" class="submitbtn" value="Submit">
</form>
</body>
</html>

<?php //include('updateenterid.php'); 

/*function dialogb()
{
  if(isset($res1))
  {
    echo "$res1 hotels added!";
    return true;
  }
  else
  {
    echo "Insertion unsuccessfull";
    return false;
  }
}*/
$servername="localhost";
$username="root";
$password="";
$db="login_temp";

$conn=mysqli_connect($servername,$username,$password,$db) or die("Error connecting to MYSQL server.");
 
$rtname = $hid = $rprice = "";
if(isset($_POST['save']))
{
  $hid = $_POST["hid"];
  $rtname = $_POST["rtname"];
  $rprice = $_POST["rprice"];
  $q1="update room_type set rtprice = '$rprice' where hid='$hid' and rtname = '$rtname'";

  $res1=mysqli_query($conn,$q1) or die('Error querying request');
 
}
?>
