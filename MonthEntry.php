<!DOCTYPE html>
<html>
<head>
  <title>Monthly Entry</title>
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
                padding-left: 250px;
                left:80px;
                font-size: 20px;
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

          .text1 table{
              border-collapse: collapse;
            width:80%;
            column-gap: 50px;
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
            
}
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
        <li><a href="admin.php">Admin HOME</a></li>
        </ul>  
  </div>



</body>

<div class="text1">


<?php 
  $db = mysqli_connect('localhost','root','','login_temp')
                or die ('Error connecting to MySQL server.');

 /* $proc = "Delimiter $$
           create procedure MonthEntry()
           Begin
           select * from reservation;
           end $$
           delimiter ;";

  mysqli_query($db,$proc); */


  $q1 = "CALL MonthEntry()";
  $res = mysqli_query($db,$q1);
  $db->next_result();
  
  echo "<table>";
  echo "<tr><th><b>Username</b></th><th><b>Hotel</b></th><th><b>Location</b></th><th><b>Check-in date</b></th><th><b>Check-out date</b></th></tr>";
  while($row = mysqli_fetch_array($res))
  {
    $hid = $row['hid'];

    $q3 = "select * from hotel where hid='$hid';";
    $res3 = mysqli_query($db,$q3);
    $row3 = mysqli_fetch_array($res3);

    $in_date = date('d/M/Y', strtotime($row['in_date']));
      $out_date = date('d/M/Y', strtotime($row['out_date']));
      if((date("Y-m", strtotime($row['in_date'])) == date("Y-m", strtotime('today'))) && strcmp($row['status'],"Confirmed")==0)
    echo '<tr><td>'.$row['username'].'</td><td>'.$row3['hname'].'</td><td>'.$row3['hloc'].'</td><td>'.$in_date.'</td><td>'.$out_date.'</td></tr>';
  }


?>
</div>
</html>