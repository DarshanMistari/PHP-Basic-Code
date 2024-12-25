<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>

<?php
    
    if(isset($_POST['btn']))
    {
        $username = $_POST['username'];
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

        $sql = "select username , passwords from signup where username='".$username."' and passwords='".$passwords."'";

        $res = $con->query($sql);

        if($row=$res->fetch_assoc())
        {
            header("Location:Success.html");
        }
        else{
            header("Location:Error.html");
        }
    }
?>
    
</head>
<style>
    body{
    background-image: url("Bgimage2.jpg");
    background-repeat: no-repeat;
    background-size: cover;
}
div{
    width: 300px;
    height: 400px;
    background-color: white;
    margin-left: 500px;
    margin-top: 90px;
    opacity: 0.9;
    border-radius: 0px 40px;
}
#img1{
    width: 100px;
    height: 100px;
    margin-left: 100px;
    margin-top: -40px;
    opacity: 0.6;
    border-radius: 50px;
}
#input{
   margin-left: 60px;
   margin-top: 30px;
   padding: 10px;
}
p{
    text-align: center;
}
#btn{
    margin-top: 5px;
    margin-left: 110px;
    padding: 10px 20px 10px 20px;
}
#img2{
    width: 220px;
    height: 70px;
    margin-left: 40px;
    margin-top: 10px;
}



</style>
<body>
    <div>
        <img src="contact_logo.jpg" id="img1">
        <form action="" method="post">
            <input type="text" name="username" id="input" placeholder="Username" required>
            <br>
            <input type="password" name="password" id="input" placeholder="Password" required>
            <br>
            <p><a href="Forget_Password.php">Forget Password</a></p>
            <br>
            <input type="submit" value="Login" id="btn"  name="btn" required>
            <br>
            <img src="Social_logo.jpg" id="img2">
        </form>
    </div> 
</body>
</html>