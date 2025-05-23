<?php
include("header.php");
?>
<main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
    <div class="heading">
        <div class="container">
        <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
            <h1>Login</h1>
            </div>
        </div>
        </div>
    </div>
    <nav class="breadcrumbs">
        <div class="container">
        <ol>
            <li><a href="index.php">Home</a></li>
            <li class="current">Login</li>
        </ol>
        </div>
    </nav>
    </div><!-- End Page Title -->
    <!-- Contact Section -->
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
</main>

<footer id="footer" class="footer position-relative light-background">

<div class="container footer-top">
  <div class="row gy-4">
    <div class="col-lg-4 col-md-6 footer-about">
      <a href="index.php" class="logo d-flex align-items-center">
        <span class="sitename">Mentor</span>
      </a>
      <div class="footer-contact pt-3">
        <p>A108 Adam Street</p>
        <p>New York, NY 535022</p>
        <p class="mt-3"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
        <p><strong>Email:</strong> <span>info@example.com</span></p>
      </div>
      <div class="social-links d-flex mt-4">
        <a href=""><i class="bi bi-twitter-x"></i></a>
        <a href=""><i class="bi bi-facebook"></i></a>
        <a href=""><i class="bi bi-instagram"></i></a>
        <a href=""><i class="bi bi-linkedin"></i></a>
      </div>
    </div>

    <div class="col-lg-2 col-md-3 footer-links">
      <h4>Useful Links</h4>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About us</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Terms of service</a></li>
        <li><a href="#">Privacy policy</a></li>
      </ul>
    </div>

    <div class="col-lg-2 col-md-3 footer-links">
      <h4>Our Services</h4>
      <ul>
        <li><a href="#">Web Design</a></li>
        <li><a href="#">Web Development</a></li>
        <li><a href="#">Product Management</a></li>
        <li><a href="#">Marketing</a></li>
        <li><a href="#">Graphic Design</a></li>
      </ul>
    </div>

    <div class="col-lg-4 col-md-12 footer-newsletter">
      <h4>Our Newsletter</h4>
      <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
      <form action="forms/newsletter.php" method="post" class="php-email-form">
        <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Subscribe"></div>
        <div class="loading">Loading</div>
        <div class="error-message"></div>
        <div class="sent-message">Your subscription request has been sent. Thank you!</div>
      </form>
    </div>

  </div>
</div>

<div class="container copyright text-center mt-4">
  <p>© <span>Copyright</span> <strong class="px-1 sitename">Mentor</strong> <span>All Rights Reserved</span></p>
  <div class="credits">
    <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you've purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> Distributed by <a href=“https://themewagon.com>ThemeWagon
  </div>
</div>

</footer>

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Preloader -->
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

<!-- Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>
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
  echo "<script>window.location.assign('dashboard.php')</script>";
}
else{
      echo "<script>window.location.assign('admin_login.php?msg=Invalid credentials')</script>";
    }
}
?>


