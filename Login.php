
<!DOCTYPE html>
<html>
<head>
	<title>Sign In</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style type="text/css">
		body {
             background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(resort.jpg);
            height: 100%;
            background-size: cover;
            background-position: center;
        }


        .body {
             font-family: Arial, Helvetica, sans-serif;
            font-style: italic;
            font-size: 15;
            color: white;
            text-align: center;
            padding-top: 150px; 
            }
            input[type=text]:focus, input[type=password]:focus {
                background-color: #ddd;
                outline: none;
            }

            * {
                margin: 0;
                padding: 0;
            }

          hr {
                border: 1px solid #f1f1f1;
                margin-bottom: 25px;
            }
          input[type=text], input[type=password] {
                width: 20%;
                padding: 15px;
                margin: auto;
                display: inline-block;
                border: groove;
                background: #f1f1f1;
            }
            .registerbtn {
                background-color: #4CAF50;
                color: white;
                padding: 16px 20px;
                margin: 8px 0;
                border: none;
                cursor: pointer;
                width: 15%;
                opacity: 0.9;
            }
             .container {
                padding: 16px;
            }
             .signin {
                text-align: center;
                padding-top: 230px;
                color: white;
            }

            .logo img
            {
                float: left;
                width: 200px;
                height: auto;
                margin-top: 25px;
                padding-left: 40px;
            }
             ul
        {
            float:right;
            list-style-type: none;
            margin-top: 25px;
            padding-right: 130px;

        }

        ul li{
            display: inline-block;
        }

        ul li a
        {
            text-decoration: none;
            color: #fff;
            padding: 5px 20px;
            border: 1px solid transparent;
            transition: 0.9s ease-out;
        }

        ul li a:hover
        {
            background-color: #fff;
            color: #000;
        }   
        .error
            {
                font-style: italic;
                color: red;
            }

        </style>
    </head>


    <body>

         <div class="error">
    <?php 
    $user = $psw = $err = null;
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $db = mysqli_connect('localhost','root','','login_temp')
                or die ('Error connecting to MySQL server.');

                if (isset($_POST['save'])) 
                {
                    $user = $_POST['user'];
                    $psw = $_POST['psw'];
                    $flag=0;
                     $que = "select username,psw from registered where username='$user' and psw = '$psw'"; 
                     $res = mysqli_query($db,$que);
                     $que2 = "select username,psw from admin where username='$user' and psw = '$psw'"; 
                     $res2 = mysqli_query($db,$que2);
                        
                        session_start();
                        $_SESSION["user1"] = $user;
                }

                if(mysqli_num_rows($res)==1)
                {
                    header("location:Homepage.php");
                    $flag=1;
                }
                if(mysqli_num_rows($res2)==1)
                {
                    header("location:admin.php");
                    $flag=1;
                }
                if($flag==0)
                    {
                        $err = "*Username/Password is/are invalid";
                    }
            }
    
    ?>
    </div>  
        <header>
            <div class="logo">
                <img src = "logo.png" alt="Image not found">
                <ul>
                    <li style="font-family: Century Gothic"><a href="Register.php">Sign Up</a></li>  
                </ul>
            </div>
        </header>

        <div class="body">
         <form method="post" action="Login.php"> <div class="container">
        Username &emsp;&emsp;<input required type="text" name="user" placeholder = "Enter Username" value="<?php echo $user;?>">
      <br><br>
      Password&emsp;&emsp;&nbsp; <input required type="password" name="psw" placeholder = "Enter Password" value="<?php echo $psw;?>">
      <br><br><span class="error"> <?php echo $err;?></span>
      <br><br>

    <button type="submit" class="registerbtn" name="save" >Sign In</button>
    </div>
        <div class="container signin">
    <p>Haven't created an account yet? <a href="Register.php" >Register</a>.</p>
        </div>
    </div>
    </form>


    



   </body>
</html>