<?php
$book_id = $_GET["book_id"];
include "db_connection.php";
$query = "DELETE FROM `tbl_book` WHERE `book_id`='$book_id'";
$result = mysqli_query($conn,$query);
if($result){
    echo "<script> alert('Data Deleted Successfully!');window.location.href='book_list.php';</script>";
}
else{
    echo "Data Not Deleted";
}
?>