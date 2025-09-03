<?php
$tms_id = $_GET["tms_id"];
$movie_id = $_GET["movie_id"];
include "db_connection.php";
$query = "DELETE FROM tbl_movie_screenshot WHERE tms_id='$tms_id'";
$result = mysqli_query($conn,$query);
if($result){
    echo "<script> alert('Data Deleted Successfully!');window.location.href='screenshot_list.php?movie_id=$movie_id';</script>";
}
else{
    echo "Data Not Deleted";
}
?>