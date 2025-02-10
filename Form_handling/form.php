<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form method="post">
        <label>Email</label>
        <input type="email" name="email" required>
        <br>
        <label>Password</label>
        <input type="password" name="password" required>
        <br>
        <button type="submit" name="submit">Submit</button>
    </form> 
    <?php
    $email=$_REQUEST["email"];
    $password=$_REQUEST["password"]; 
    // echo $email, $password;
    if($email=="admin@gmail.com" && $password=="123"){
        //url redirection 
        echo "<script>window.location.assign('submitadmin.php')</script>";
    } 
    elseif ($email=="hiteshi@gmail.com" && $password=="2025") {
        echo "<script>window.location.assign('submitperson.php')</script>";
    }
    else{
        echo "Invalid";
    }
    ?>
</body>
</html>
