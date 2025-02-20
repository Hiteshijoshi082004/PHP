<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form submitted</title>
</head>
<body>
    <?php
    // echo "FORM SUBMITTED!!"
    $product=$_REQUEST["productname"];
    $amount=$_REQUEST["price"];
    $quantity=$_REQUEST["quantity"];
    $desc=$_REQUEST["description"];

    // echo $product, $amount, $quantity, $desc;
    
    $database=mysqli_connect("localhost","root","","details");
    $query= "INSERT INTO `products` (`productname`, `price`, `quantity`, `description`) VALUES ( '$product', '$amount', '$quantity', '$desc')";
    $result = mysqli_query($database,$query);
    if($result>0){
        echo "DETAILS ADDED!";
    }
    else{
        echo "ERROR NOT FOUND 404";
    }
    ?>
</body>
</html>