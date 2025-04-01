<?php
include("header.php")
?>

<?php
include("commoncode.php")
?>
<br><br>
<section id="contact" class="contact section">
        <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row justify-content-center gy-4">
            <div class="col-lg-8">
                <h1>Add Category</h1>
                <?php
                if(isset($_GET["msg"])){
                    echo "<div class='alert alert-info'>$_GET[msg]</div>";
                }
                ?>
               
            <form enctype="multipart/form-data"    method="post"  data-aos="fade-up" data-aos-delay="200">
                <div class="row gy-4">
                <div class="col-md-6">
                    <input type="text" name="category_name" class="form-control" placeholder="Category Name" required="">
                </div>
                <div class="col-md-6 ">
                    <input type="file" class="form-control" name="image" placeholder="Your Email" required="">
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

<?php
    if(isset($_REQUEST["submit_btn"])){
        $category_name=$_REQUEST["category_name"];
        $image=$_FILES["image"];
        $img_name=$image["name"];
        $tmp_name=$image["tmp_name"];
        // echo $img_name, $tmp_name;
        $new_name=rand()."-".$img_name;
        // echo $new_name;
        move_uploaded_file($tmp_name,"project_images/".$new_name);
        include("connection.php"); 
        $query="INSERT INTO `categories`( `category_name`,`image`) VALUES ('$category_name','$new_name')";
        $res=mysqli_query($db,$query);
        if($res>0){
            echo "<script>window.location.assign('addCategory.php?msg=Added successfully')</script>";
        }else{
            echo "<script>window.location.assign('addCategory.php?msg=Error while adding')</script>";
        }
    }
?>
<br><br><br><br>
<?php
include("footer.php")
?>