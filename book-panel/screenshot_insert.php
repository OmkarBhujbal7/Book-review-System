<?php
include "db_connection.php";
$movie_id = $_POST["movie_id"];
$filename = $_FILES["tms_image"]["name"];
$tmp_name = $_FILES["tms_image"]["tmp_name"];
move_uploaded_file($tmp_name, "uploads/movie/".$filename);

$query = "INSERT INTO tbl_movie_screenshot( tms_movieid,tms_image) 
          VALUES ('$movie_id','$filename')";    

$result = mysqli_query($conn, $query);

// Check for errors and output detailed message
if ($result) {
    echo "<script> alert('Data Inserted Successfully'); window.location.href='screenshot_list.php?movie_id=$movie_id'; </script>";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>