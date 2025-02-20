<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
<center>
    <h1 class="text-center">STORE PRODUCT DETAILS</h1>
    <div class="row p-5">
        <!-- FORM STARTED-->
          <div class="col-lg-12">
            <form action="submit.php" method="post" data-aos="fade-up" data-aos-delay="200">

              <div class="row">
                <div class="col-md-12">
                  <label for="">Product:</label>
                  <input type="text" name="productname" class="form-control" placeholder="name of the product" required="">
                </div>
                </br>       
                <div class=" first col-md-6 ">
                <label for="">Price:</label>
                  <input type="text" class="form-control" name="price" placeholder="Price of the Product" required="">
                </div>
                </br>
                <div class="col-md-12">
                  <label for="">Quantity:</label>
                  <input type="text" class="form-control" name="quantity" placeholder="quantity" required="">
                </div>
                </br>
                <div class="col-md-12 second">
                  <label for="" class="">Description:</label>
                  <input class="form-control" name="description" rows="6" placeholder="description" required=""></textarea>
                </div>
                </br>
                <div class="col-md-12 text-center">
                  <button type="submit">Submit Details</button>
                </div>
             </div>
            </form>
            <!-- FORM ENDED -->
          </div>
</center>
</body>
</html>