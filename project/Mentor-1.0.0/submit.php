<?php
    $name=$_REQUEST["name"];
    $email=$_REQUEST["email"];
    $phone=$_REQUEST["phn_no"];
    $address=$_REQUEST["address"];
    $qualification=$_REQUEST["qualification"];

    // echo $name, $email, $phone, $address, $qualification;
    
    $db=mysqli_connect("localhost","root","","details");
    $query= "INSERT INTO `teacher` (`name`, `email`, `phn_no`, `address`, `qualification`) VALUES ('$name', '$email', '$phone', '$address', ' $qualification')"    ;
    $res=mysqli_query($db,$query);
    if($res>0){
        echo "data added!";
    }
    else{
        echo "Error";
    }
?>
