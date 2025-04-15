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
               
            
                <!-- <div class="col-md-6 ">
                    <input type="file" class="form-control" name="image" placeholder="Your Email" required="">
                </div> -->
                <form enctype="multipart/form-data" method="POST">
                <div class="row">
                  <div class="col-6">
                    <div class="form-group">
                      <label class="text-black" for="fname">Category Name</label>
                      <input type="text" class="form-control" name="category_name" placeholder="Category">
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label class="text-black" for="lname">Image of Category</label>
                      <input type="file" name="image" placeholder="Image" required="">
                    </div>
                  </div>
            </div>
<br><br>
                <button type="submit" name="submit_btn" class="btn btn-primary-hover-outline">Add Category</button>
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
        $new_name=rand()."-".$img_name;
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