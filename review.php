<?php
include "head.php";
include "db_connection.php";

// Check if book_id is set in the URL
if (isset($_GET['book_id'])) {
    $book_id = $_GET['book_id'];

    // Secure the input to prevent SQL injection
    $book_id = mysqli_real_escape_string($conn, $book_id);

    // Fetch only the specific book
    $query = "SELECT * FROM tbl_book 
              INNER JOIN book_category 
              ON book_category.category_id = tbl_book.book_category
              WHERE tbl_book.book_id = '$book_id'";

    $result = mysqli_query($conn, $query);

    // Check if the book exists
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);

        // Convert rating into a 10-scale format
        $rating = floatval($row['book_rating']); // Ensure it's a float
?>
        <div class="container my-5">
            <div class="book-details d-flex align-items-center border rounded p-4 mb-4 shadow-sm">
                <div class="book-image me-4">
                    <img src="http://localhost/bookpanel/uploads/book/<?php echo $row['book_logo']; ?>" 
                         alt="<?php echo $row['book_title']; ?>" class="img-fluid rounded" style="max-width: 200px;">
                </div>
                <div class="book-info">
                    <h2 class="mb-2"><?php echo $row["book_title"]; ?></h2>
                    <p class="text-muted mb-2"><strong>Author:</strong> <?php echo $row["book_author"]; ?></p>
                    <h3>REVIEW:</h3>
                    <p class="mb-2"><?php echo $row["book_review"]; ?></p>
                    
                    <!-- Book Rating (out of 10) -->
                    <p class="mb-2"><strong>Rating:</strong> <?php echo $rating; ?>/10</p>
                </div>
            </div>
        </div>
<?php
    } else {
        echo "<div class='container my-5'><p class='alert alert-danger'>Book not found!</p></div>";
    }
} else {
    echo "<div class='container my-5'><p class='alert alert-warning'>No book selected!</p></div>";
}
?>

</body>
</html>
