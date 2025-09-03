<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            border-radius: 15px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }
        .form-control {
            border-radius: 10px;
        }
        .btn {
            border-radius: 10px;
        }
    </style>
</head>
<body>
<?php include "header.php"; ?>
<?php include "sidebar.php"; ?>

<div class="content-wrapper">
    <div class="container-fluid pt-4">
        <div class="card p-4">
            <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Book List</h5>
                <a href="book_list.php" class="btn btn-dark">Books</a>
            </div>
            <div class="card-body">
                <form action="book_insert.php" method="post" enctype="multipart/form-data">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label">Cover Image</label>
                            <input type="file" name="book_logo" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Book Title</label>
                            <input type="text" name="book_title" class="form-control" placeholder="Title">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Book Category</label>
                            <select id="book_category" name="book_category" class="form-control">
                                <?php
                                    include "db_connection.php";
                                    $query = "SELECT * FROM book_category";
                                    $result = mysqli_query($conn,$query);
                                    while($row = mysqli_fetch_array($result)){ 
                                ?>
                                    <option value="<?= $row["category_id"] ?>"><?= $row["category_name"] ?></option>
                                <?php } ?> 
                            </select>
                        </div>
                        
                        <div class="col-md-6">
                            <label class="form-label">Author</label>
                            <input type="text" name="book_author" class="form-control" placeholder="Author">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Rating</label>
                            <input type="text" name="book_rating" class="form-control" placeholder="Rating">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Long Description</label>
                            <textarea name="book_review" class="form-control" rows="5" placeholder="Description"></textarea>
                        </div>
                       
                        
                        
                        <div class="col-12 text-end mt-3">
                            <input type="submit" value="Add" class="btn btn-success px-4">
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
