<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Singup Page</title>
    
<?php

    if(isset($_POST['btn']))
    {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $passwords = $_POST['password'];

        $serername = "localhost";
        $user = "root";
        $password = "";
        $dbname = "Signup";

        $con = mysqli_connect($serername , $user , $password , $dbname);

        if($con -> connect_errno)
        {
            echo("Connection is Fails.");
        }

        echo("Connection is SuccessFully...");

        $sql = "insert into signup values('".$username."','".$email."','".$passwords."')";

        $res = $con->query($sql);

        if($res == true)
        {
            echo("Data is Inserted SuccessFully...");
        }
        else
        {
            echo("Data is not Inserted in Database..");
        }
    }
?>
    
</head>
<style>
    body{
        background-image: url(BgImage2.jpg);
        background-repeat: no-repeat;
        background-size: cover;
    }
    div{
        width: 300px;
        height: 400px;
        background-color: white;
        margin-left: 500px;
        margin-top: 100px;
        opacity: 0.9;
        border-radius: 0px 40px;
    }
    #img1{
        width: 100px;
        height: 100px;
        margin-left: 100px;
        margin-top: -40px;
        border-radius: 50px
    }
    h1{
        text-align: center;
        margin-top: -7px;
    }
    input{
        margin-left: 60px;
        margin-top: 10px;
        padding: 5px;
        font-weight: bold;
        color: black;
    }
    #btn{
        margin-left: 110px;
        margin-top: 15px;
        padding: 5px 10px 5px 10px;
        border-radius: 10px;
    }
    #btn:hover{
        background-color: lightgreen;
        color: black;
        font-size: 15px;
    }
    p{
        margin-left: 30px;
        font-weight: bold;
        font-size: 17px;
    }
    a{
        color: blue;
    }
</style>
<body>
    <div>
        <img src="contact_logo.jpg" id="img1">
        <h1>Singup Page</h1>
        <form action="" method="post">
            <input type="text" name="username" id="input" placeholder="Username" required>
            <br>
            <input type="email" name="email" id="input" placeholder="Email id" required>
            <br>
            <input type="text" name="password" id="input" placeholder="Password" require>
            <br>
            <input type="submit"  value="Signup" id="btn" name="btn">

            <p>Already have an account ? <a href="Login_Form.php">Login</a></p>
        </form>
    </div>
</body>
</html>