<?php
include "db_connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $book_id = mysqli_real_escape_string($conn, $_POST["book_id"]);
    $book_title = mysqli_real_escape_string($conn, $_POST["book_title"]);
    $book_category = mysqli_real_escape_string($conn, $_POST["book_category"]); 
    $book_author = mysqli_real_escape_string($conn, $_POST["book_author"]);
    $book_rating = mysqli_real_escape_string($conn, $_POST["book_rating"]);
    $book_review = mysqli_real_escape_string($conn, $_POST["book_review"]);
   

    // Handle file uploads
    $filename = $_FILES["book_logo"]["name"];
    $tmp_name = $_FILES["book_logo"]["tmp_name"];
    
  
    
    move_uploaded_file($tmp_name, "uploads/book/" . $filename);

    
    // Construct the UPDATE query
    $query = "UPDATE `tbl_book` SET 
              `book_title` = '$book_title', 
              `book_category` = '$book_category',  
              
              `book_author` = '$book_author',
              `book_rating` = '$book_rating',
              `book_review` = '$book_review'";

    // Update logo if a new one is uploaded
    if (!empty($filename)) {
        $query .= ", `book_logo` = '$filename'";
    }

    // Update banner if a new one is uploade

    $query .= " WHERE `book_id` = '$book_id'";

    // Execute query
    if (mysqli_query($conn, $query)) {
        echo "<script> alert('Book Updated Successfully'); window.location.href='book_list.php';</script>";
    } else {
        echo "Error updating book: " . mysqli_error($conn);
    }
}
?>
