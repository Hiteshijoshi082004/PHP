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
            <div class="col-lg-10 table-responsive">
            <?php
                if(isset($_GET['msg'])){
                ?>
                <div class="alert alert-info"><?php echo $_GET['msg']?></div>
                <?php
                }
                ?>
                <h1>Manage Category</h1>
                <table class="table table-striped table-bordered table-hover">
                    <tr class="table-dark">
                        <th>Sno</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                    <?php
                    include("connection.php");
                    $query="SELECT * from `categories`";
                    
                    $res=mysqli_query($db,$query);
                    $sno=1;
                    while($data=mysqli_fetch_assoc($res)){
                    ?>
                    <tr>
                        <td><?php echo $sno;?></td>
                        <td><?php echo $data["category_name"];?></td>
                        <td>
                            <img src="project_images/<?php echo $data["image"];?>" style="height:100px; width:100px">
                        </td>
                       <td>
                        <a class="" href="edit_category.php?id=<?php echo $data['id']?>">
                        <button type="button" class="btn btn-outline-success">Edit</button>
                        </a>
                       </td>
                    </tr>
                    <?php   
                    $sno++;
                    }
                    ?>
                </table>
           
            </div>

        </div>

        </div>
    </section>

    <br><br><br><br><br><br><br>
<?php 
include("footer.php")
?>
