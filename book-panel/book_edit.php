<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Book</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body { background-color: #f8f9fa; }
        .card { border-radius: 15px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); }
        .form-control, .btn { border-radius: 10px; }
    </style>
</head>
<body>
<?php include "header.php"; ?>
<?php include "sidebar.php"; ?>

<div class="content-wrapper">
    <div class="container-fluid pt-4">
        <div class="card p-4">
            <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Update Book</h5>
                <a href="book_list.php" class="btn btn-dark">Book List</a>
            </div>
            <div class="card-body">
                <?php
                include "db_connection.php";

                if (!isset($_GET["book_id"])) {
                    die("Book ID is missing.");
                }
                $book_id = mysqli_real_escape_string($conn, $_GET["book_id"]);
                $query = "SELECT * FROM `tbl_book` WHERE `book_id`='$book_id'";
                $result = mysqli_query($conn, $query);
                $book = mysqli_fetch_assoc($result);
                if (!$book) {
                    die("Book not found.");
                }
                ?>
                <form action="book_update.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="book_id" value="<?= $book['book_id'] ?>">

                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label">Logo</label>
                            <input type="file" name="book_logo" class="form-control">
                            <?php if ($book["book_logo"]) { ?>
                                <img src="uploads/book/<?= $book['book_logo'] ?>" width="100" class="mt-2">
                            <?php } ?>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Book Title</label>
                            <input type="text" name="book_title" class="form-control" value="<?= $book['book_title'] ?>">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Book Category</label>
                            <select id="book_category" name="book_category" class="form-control">
                                <?php
                                $query = "SELECT * FROM book_category";
                                $categories = mysqli_query($conn, $query);
                                while ($row = mysqli_fetch_array($categories)) {
                                    $selected = ($row["category_id"] == $book["book_category"]) ? "selected" : "";
                                    echo "<option value='{$row["category_id"]}' $selected>{$row["category_name"]}</option>";
                                }
                                ?>
                            </select>
                        </div>
                       
                        <div class="col-md-6">
                            <label class="form-label">Author</label>
                            <input type="text" name="book_author" class="form-control" value="<?= $book['book_author'] ?>">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Rating</label>
                            <input type="text" name="book_rating" class="form-control" value="<?= $book['book_rating'] ?>">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Long Description</label>
                            <textarea name="book_review" class="form-control" rows="3"><?= $book['book_review'] ?></textarea>
                        </div>
                       
                        
                        <div class="col-12 text-end mt-3">
                            <input type="submit" value="Update" class="btn btn-success px-4">
                            <input type="reset" value="Reset" class="btn btn-danger px-4 ms-2">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>
</body>
</html>
