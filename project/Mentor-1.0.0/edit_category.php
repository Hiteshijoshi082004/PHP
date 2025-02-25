<?php
$id=$_GET["id"]; 
//db connect 
include("connection.php");
//query 
$query="SELECT * from `category` where `id`='$id'";
//res
$res=mysqli_query($db,$query); 
// print_r($res);
$data=mysqli_fetch_assoc($res);
?>

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
            <h1>Category</h1>
            </div>
        </div>
        </div>
    </div>
    <nav class="breadcrumbs">
        <div class="container">
        <ol>
            <li><a href="index.php">Home</a></li>
            <li class="current">Category</li>
        </ol>
        </div>
    </nav>
    </div><!-- End Page Title -->
    <!-- Contact Section -->
    <section id="contact" class="contact section">
        <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row justify-content-center gy-4">
            <div class="col-lg-8">
                <h1>Edit Category</h1>
                <?php
                if(isset($_GET["msg"])){
                    echo "<div class='alert alert-info'>$_GET[msg]</div>";
                }
                ?>
               
            <form enctype="multipart/form-data"    method="post"  data-aos="fade-up" data-aos-delay="200">
                <div class="row gy-4">
                    <div class="col-md-4">
                        <!-- <img src="project_images/<?php echo $data['image']?>" style="height:100px; "> -->
                    </div>
                <div class="col-md-12">
                    <input type="text" name="category_name" class="form-control" placeholder="Your Name" required="" value="<?php echo $data['category_name']?>">
                </div>
                <div class="col-md-12 ">
                    <input type="file" class="form-control" name="image" placeholder="Your Email" required="" >
                    <input type="hidden" name="previous_image" value="<?php echo $data['image']?>">
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
<?php
    if(isset($_REQUEST["submit_btn"])){
        $category_name=$_REQUEST["category_name"];
        //store image
        $image=$_FILES["image"];
        //store name from image array
        $img_name=$image["name"];
        //store tmp path of the image so that we can make it permanent 
        $tmp_path=$image["tmp_name"];
        // echo $image_name, $tmp_path;
        //new name generation
        $new_name= rand()."-".$img_name;
        //photo/file store permanent 
        move_uploaded_file($tmp_path,"project_images/".$new_name);
        // echo $category_name;
        include("connection.php"); 
        $query="INSERT INTO `category`( `category_name`,`image`) VALUES ('$category_name','$new_name')";
        $res=mysqli_query($db,$query);
        if($res>0){
            echo "<script>window.location.assign('add_category.php?msg=Added successfully')</script>";
        }else{
            echo "<script>window.location.assign('add_category.php?msg=Error while adding')</script>";
        }
    }

?>
<?php
include("footer.php");
?>

