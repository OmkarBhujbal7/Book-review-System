<?php
$category_id = $_GET["category_id"];
include "db_connection.php";
$query = "DELETE FROM `book_category` WHERE `category_id`='$category_id'";
$result = mysqli_query($conn,$query);
if($result){
    echo "<script> alert('Data Deleted Successfully!');window.location.href='category_list.php';</script>";
}
else{
    echo "Data Not Deleted";
}
?>