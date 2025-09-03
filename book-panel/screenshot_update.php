<?php
include "db_connection.php";
$tms_id = $_POST["tms_id"];
$movie_id = $_POST["movie_id"];
$filename = $_FILES["tms_image"]["name"];
$tmp_name = $_FILES["tms_image"]["tmp_name"];

// Make sure to check if the file is uploaded
if ($filename && move_uploaded_file($tmp_name, "uploads/movie/$filename")) {
    // Remove the extra comma before WHERE clause
    $query = "UPDATE tbl_movie_screenshot SET tms_image = '$filename' WHERE tms_id = '$tms_id'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "<script> alert('Movie Updated Successfully'); window.location.href='screenshot_list.php?movie_id=$movie_id';</script>";
    } else {
        echo "Error updating movie: " . mysqli_error($conn);
    }
} else {
    echo "Error uploading the image.";
}
?>