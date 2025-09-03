<?php
include "db_connection.php";
$category_name=$_POST["category_name"];



$query = "INSERT INTO `book_category`(`category_name`) VALUES ('$category_name')";
$result = mysqli_query($conn,$query);
if($result){
    echo "<script> alert('Data Inserted Successfully');window.location.href='category_list.php';</script>";
}
else{
    echo "Data Not Inserted";
}
?>