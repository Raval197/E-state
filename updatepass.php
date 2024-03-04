<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forget update</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
            display:flex;
            justify-content: center;
            align-items: center;
            height: 100vh;

        }
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            padding: 0;
        }
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 300px;
            height: 300px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        h3 {
            margin: 0 0 20px;
            font-size: 24px;
            font-weight: bold;
            color: #333;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            color: #333;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            background-color: #4CAF50;
            color: #fff;
        }
  
        input[type="submit"]:hover {
            background-color: #3e8e41;
        }
    
    </style>
</head>
<body>
<?php 

include("config.php");


if(isset($_GET['email']) && isset($_GET['reset_token']))
{
    date_default_timezone_set('Asia/kolkata');
    $date=date("Y-m-d");
    $email = $_GET['email'];
    $reset_token =$_GET['reset_token'];
    $query="SELECT * from `user` WHERE `uemail` = '$email' AND `resettoken` = '$reset_token' AND `resetexpiry` = '$date'";
    $result = mysqli_query($con, $query);
if($result)
{
    if(mysqli_num_rows($result) == 1) 
    {
                echo "
                <form method='POST'>
                <h3>Create New Password</h3>
                <input type='text' placeholder='New Password' name='balo' pattern='(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}' id='pwd' required>
                <input type='submit' name='updatepassword' value='update'>
                <input type='hidden' name='email' value='$_GET[email]'>
                <div id='message'>
                    <h4>Password must contain the following:</h4>
                     <p id='length' class='invalid'>Minimum <b>8 characters</b></p>
                     <p id='letter' class='invalid'>A <b>lowercase and uppercase</b> letter</p>
                     <p id='number' class='invalid'>A <b>number</b></p>
                </div>
                </form>
                ";
    }
    else{
                echo "
                <script>
                alert('Invalid email or reset token!');
                window.location.href='login.php';   
                </script>";
    }
}
else 
{
    echo "
    <script>
    alert('Not logged in!');
    </script>";
}
}
    
?>
<?php


if(isset($_POST['updatepassword']))
{
    $password1 =$_POST['balo'];
    $password=sha1($password1);
    $email =$_POST['email'];

    $update="UPDATE `user` SET `upass`='$password',`resettoken`=NULL,`resetexpiry`=NULL WHERE `uemail`='$email'";
    $qty=mysqli_query($con, $update);
    if($qty)
    {
        echo "
        <script>
        alert('Password updated successfully!');
        window.location.href='login.php';
        </script>";
    }
    else{

        echo "
        <script>
        alert('Failed to update password. Please try again. Error: ');
        window.location.href='login.php';
        </script>";
    }
}


?>



</body>

</html>