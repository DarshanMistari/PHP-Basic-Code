<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password</title>
    <?php
        if(isset($_POST['btn']))
        {
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
        
            $sql = "update signup set passwords='".$passwords."' where email='".$email."'";
        
            $res = $con->query($sql);
        
            if($res == true)
            {
                header("Location:Login_Form.php");
            }
            else{
                header("Location:Forget_Password.php");
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
</style>
<body>
    <div>
        <form action="" method="post">
            <img src="contact_logo.jpg" id="img1">
            <br>
            <h1>Forget Password</h1>
            <br>
            <input type="email" name="email" id="input" placeholder="Email" require>
            <br><br>
            <input type="password" name="password" id="input" placeholder="New Password" require>
            <br><br>
            <input type="submit" name="btn" id="btn" value="Save">
        </form>
    </div>
</body>
</html>