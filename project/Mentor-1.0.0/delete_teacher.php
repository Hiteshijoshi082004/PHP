<?php
$id= $_GET["id"];
//db connect
include("connection.php"); 
//query 
$query="DELETE from `teacher` where `id`='$id'";
//res
$res=mysqli_query($db,$query);
if($res>0){
    echo "<script>window.location.assign('manage_teacher.php?msg=Deleted successfully')</script>";
}else{
    echo "<script>window.location.assign('manage_teacher.php?msg=Error while deleting')</script>";
}
?>