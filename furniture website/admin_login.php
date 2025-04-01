<?php
include("header.php");
?>

<?php
include("commoncode.php");
?>
<br><br>
<section id="contact" class="contact section">
        <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row justify-content-center gy-4">
            <div class="col-lg-8 ">
                <div class="d-flex justify-content-between">
                    <h1>Admin Login</h1>
                </div>
                <?php
                if(isset($_GET["msg"])){
                    echo "<div class='alert alert-info'>$_GET[msg]</div>";
                }
                ?>
               
            <form   method="post"  data-aos="fade-up" data-aos-delay="200">
                <div class="row gy-4">
             
                <div class="col-md-12 ">
                    <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                </div>
                <div class="col-md-12 ">
                    <input type="password" class="form-control" name="password" placeholder="Your Password" required="">
                </div>
               
                <div class="col-md-12 text-center">
                    <div class="loading">Loading</div>
                    <button type="submit" name="submit_btn">Submit</button>
                </div>

                </div>
            </form>
            </div><!-- End Contact Form -->

        </div>

        </div>
    </section><!-- /Contact Section -->
<br><br><br><br>
<?php
include("footer.php");
?>

<?php
if(isset($_REQUEST["submit_btn"])){
    $email=$_REQUEST["email"];
    $password=MD5($_REQUEST["password"]);
    // echo $email, $password; 
    include("connection.php");
    $query="SELECT * from `admin` where `email`='$email' and `password`='$password'";
    $res=mysqli_query($db,$query);
    // print_r($res);
    if(mysqli_num_rows($res)>0){
        $_SESSION["email"]=$email;  //create
        $_SESSION["user_type"]="admin";  //create
        echo "<script>window.location.assign('dashboard.php')</script>";
    }else{
        echo "<script>window.location.assign('admin_login.php?msg=Invalid credentials')</script>";
    }
}
?>