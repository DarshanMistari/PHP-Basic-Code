<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <?php
        $username = $_POST['username'];
        $password = $_POST['password'];

        if(isset($_POST['btn']))
        {
            $username = $_POST['username'];
            $passwords = $_POST['password'];

            $servername = "localhost";
            $user = "root";
            $password = "";
            $dbname="Signup";

            $con = mysqli_connect($servername , $user ,$password , $dbname);

            if($con -> connect_error)
            {
                die("Conection is Fail.");
            }
            
            $sql=" select username , passwords from signup where username='".$username."',passwords='".$passwords."'";
            $res = $con->query($sql);

            if($row = $res->fetch_assoc())
            {
                header("Location:Success.html");
            }
            else
            {
                header("Location:Error.html");
            }

        }
    ?>
</head>
<body>
    <center>
        <form action="#" method="post">
             <h1>Login Page</h1>
             <br>
            <input type="text" name="username" placeholder="Username" require>
            <br><br>
            <input type="Password" name="password" placeholder="Password" require>
            <br><br>
            <a href="#">Forget Password</a>
            <br><br>
            <input type="submit" name="btn" value="Login">
        </form>
    </center>
</body>
</html>