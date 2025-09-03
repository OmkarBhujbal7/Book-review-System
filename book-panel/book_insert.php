<?php
include "db_connection.php";

// Escape special characters to prevent SQL injection
$book_title = mysqli_real_escape_string($conn, $_POST["book_title"]);
$book_category = mysqli_real_escape_string($conn, $_POST["book_category"]);
$book_author = mysqli_real_escape_string($conn, $_POST["book_author"]);
$book_rating = mysqli_real_escape_string($conn, $_POST["book_rating"]);
$book_review = mysqli_real_escape_string($conn, $_POST["book_review"]); // Corrected column name

$filename = $_FILES["book_logo"]["name"];
$tmp_name = $_FILES["book_logo"]["tmp_name"];
$upload_dir = "uploads/book/";

// Ensure the upload directory exists
if (!is_dir($upload_dir)) {
    mkdir($upload_dir, 0777, true);
}

$target_file = $upload_dir . basename($filename);

// Move uploaded file and insert data if successful
if (move_uploaded_file($tmp_name, $target_file)) {
    $query = "INSERT INTO `tbl_book` (`book_title`, `book_category`, `book_author`, `book_rating`, `book_review`, `book_logo`) 
              VALUES ('$book_title', '$book_category', '$book_author', '$book_rating', '$book_review', '$filename')";
    
    $result = mysqli_query($conn, $query);
    
    if ($result) {
        echo "<script> alert('Data Inserted Successfully'); window.location.href='book_list.php'; </script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    echo "Error: File upload failed.";
}
?>
