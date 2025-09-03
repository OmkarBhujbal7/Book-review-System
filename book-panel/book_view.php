<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            border-radius: 15px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        .info-box {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 15px;
        }
        .info-box img {
            border-radius: 10px;
            width: 120px;
            height: auto;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
        }
        .info-content {
            flex: 1;
        }
        .text-box {
            max-height: 150px;
            overflow-y: auto;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 10px;
            background-color: #fff;
        }
        .badge {
            font-size: 14px;
            padding: 8px 12px;
        }
    </style>
</head>
<body>
<?php include "header.php"; ?>
<?php include "sidebar.php"; ?>
<div class="content-wrapper">
    <div class="container-fluid pt-4">
        <div class="card p-4">
            <div class="card-header bg-primary text-white text-center">
                <h5 class="mb-0">Book Details</h5>
            </div>
            <div class="card-body">
                <?php
                include "db_connection.php";

                if (isset($_GET['book_id'])) {
                    $book_id = mysqli_real_escape_string($conn, $_GET['book_id']);
                    $query = "SELECT b.*, c.category_name 
                              FROM tbl_book b 
                              INNER JOIN book_category c ON b.book_category = c.category_id 
                              WHERE b.book_id = '$book_id'";
                    $result = mysqli_query($conn, $query);

                    if ($row = mysqli_fetch_array($result)) {
                        ?>
                        <!-- Book Title and Images -->
                        <div class="text-center mb-4">
                            <h3 class="text-primary"><?php echo $row['book_title']; ?></h3>
                            <div class="info-box justify-content-center">
                                <img src="uploads/book/<?= $row["book_logo"] ?>" alt="Book Logo">
                            </div>
                        </div>

                        <!-- Book Information -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="info-box">
                                    <strong>Category:</strong>
                                    <div class="info-content"><?php echo $row['category_name']; ?></div>
                                </div>
                               
                                <div class="info-box">
                                    <strong>Author:</strong>
                                    <div class="info-content"><?php echo $row['book_author']; ?></div>
                                </div>
                                <div class="info-box">
                                    <strong>Rating:</strong>
                                    <div class="info-content"><?php echo $row['book_rating']; ?></div>
                                </div>
                               
                                <div class="info-box">
                                    <strong>Status:</strong>
                                    <div>
                                        <?php echo $row["book_status"] == 1 
                                            ? "<div class='badge bg-success'>Active</div>" 
                                            : "<div class='badge bg-danger'>Inactive</div>"; ?>
                                    </div>
                                </div>
                            </div>

                            <!-- Review and Story -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <strong>Review:</strong>
                                    <div class="text-box"><?php echo nl2br($row['book_review']); ?></div>
                                </div>
                                
                            </div>
                        </div>

                        <?php
                    } else {
                        echo "<div class='alert alert-danger text-center'>Book not found.</div>";
                    }
                } else {
                    echo "<div class='alert alert-warning text-center'>Invalid request.</div>";
                }
                ?>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>
</body>
</html>
