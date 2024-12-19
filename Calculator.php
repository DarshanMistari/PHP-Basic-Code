<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <?php
    $no1 = "";
    $no2 = "";
    $reult = "";

    if(isset($_POST['btn'])){
        $no1 = $_POST['no1'];
        $no2 = $_POST['no2'];
        $result = $no1 + $no2;
    }
    else{
        $no1 = "";
        $no2 = "";
        $result = "";
    }
    ?>
</head>
<body align="center">
    <h1> Calculator </h1>
    <form action="" method="post">
        No1 : <input type="text"  name="no1" required value="<?php  echo $no1 ?>">
        <br><br>
        No2 : <input type="text"  name="no2" required value="<?php  echo $no2 ?>">
        <br><br>
        Result : <input type="text"  name="result" value="<?php  echo $result ?>">
        <br><br>
        <input type="submit" name="btn"  value="Submit">
        <input type="submit" name="reset"  value="Reset">

    </form>
</body>
</html>