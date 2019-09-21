<!DOCTYPE html>
<html>
<head>
  <title>Insert hotel</title>
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
                  
                  padding-top: 60px;
                  font-family:'Azul',Footlight MT Light;
                color: black;
                height: 100%;
                width: 100%;
                padding-left: 450px;
                left:100px;
                font-size: 25px;
           }
            .error
            {
              font-size: 25px;
              font-color: red;
              text-decoration-color: red;
              margin-bottom: 20px;
            }


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
    </header>
  </div>
<h2 style="font-family: 'Azul',Arial;padding-top: 90px;"><center>Insert Hotel Details</center></h2>
<div class="text1">

<form method="post" action="" enctype="multipart/form-data">  

  Hotel ID:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input required type="text" name="hid" placeholder="eg:12">
  <br><br>
  Hotel Name: &emsp;&emsp;&emsp;&emsp;<input required type="text" name="hname" placeholder="eg:Taj">
  
  <br><br>
  Hotel location: &emsp;&emsp;&emsp;&nbsp;<input required type="text" name="hloc" placeholder="eg:Pune">
  
  <br><br>
  Description: &emsp;&emsp;&emsp;&emsp;&nbsp;<input required type="text" name="hdesc" >
  <br><br>
  
  Address:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input required type="text" name="haddr" >
  <br><br>

  <h2>&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;Image Upload</h2><br>

       &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; Image:
        <input type="file" name="img" required>

  
 
   <br><br>&emsp;&emsp;
    <input type="submit" name="save_btn" class="submitbtn" value="Submit">  
    
  </form>

</header>
  <?php

$servername="localhost";
$username="root";
$password="";
$db="login_temp";

$conn=mysqli_connect($servername,$username,$password,$db) or die("Error connecting to MYSQL server.");

$hloc = $hdesc = $hname = $hid = $haddr = "";
if(isset($_POST['save_btn']))
{
  $hid = $_POST['hid'];
  $hname = $_POST['hname'];
  $hloc = $_POST['hloc'];
  $hdesc = $_POST['hdesc'];
  $haddr = $_POST['haddr'];


        $filetemp=$_FILES['img']['tmp_name'];
        $filename=$_FILES['img']['name'];
        $filetype=$_FILES['img']['type'];
        $filepath="pics/".$filename;

        
/*
        $query=mysqli_query($conn,"call insertimg('$filename','$filepath','$filetype')");
        if($query)
        {
          echo "Image Uploaded Successfully.";
        }
        else
        {
          echo "Upload Failed.";
        }*/

        $que = "select * from hotel"; 
        $res = mysqli_query($conn,$que);
        $flag=0;
        while($row = mysqli_fetch_array($res))
        {
          if($row['hid']==$hid)
          {
            $flag=1;
            echo '<div class="error">Hotel ID already in use. Re-enter details</div>';
          }
        }
        if($flag==0)
        {

          $q1="insert into hotel(hid,hname,hloc,hdesc,haddr,imgname,path,type) values('$hid','$hname','$hloc','$hdesc','$haddr','$filename','$filepath','$filetype')";
          $res1=mysqli_query($conn,$q1);
          move_uploaded_file($filetemp, $filepath);
        }
}
?>
</div>
</body>
</html>