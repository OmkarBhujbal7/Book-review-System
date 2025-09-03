<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            border-radius: 15px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }
        .table {
            border-radius: 10px;
            overflow: hidden;
        }
        .btn-group {
            display: flex;
            justify-content: center;
            gap: 10px;
        }
    </style>
</head>
<body>
<?php include "header.php"; ?>
<?php include "sidebar.php"; ?>

<div class="content-wrapper">
    <div class="container-fluid pt-4">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <a href="book_add.php" class="btn btn-dark"> +Add Books</a>
        </div>
        <div class="card p-4">
            <div class="card-header bg-primary text-white text-center">
                <h5 class="mb-0">Books List</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-light table-bordered table-hover text-center">
                        <thead class="table-dark">
                            <tr>
                                <th>SR.NO.</th>
                                <th>Cover</th>
                                <th>Book Title</th>
                                <th>Category</th>
                                <th>Author</th>
                                <th>Rating</th> 
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        include "db_connection.php";
                        $query = "SELECT * FROM tbl_book";
                        $count = 1;
                        $result = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_array($result)) {
                            ?>
                            <tr>
                                <td><?php echo $count++ ?></td>
                                <td>
                                    <img class="img-thumbnail" height="100" width="90" src="uploads/book/<?= $row["book_logo"] ?>" alt="Book Cover">
                                </td>
                                <td><?php echo $row['book_title']; ?></td>
                                <td><?php echo $row['book_category']; ?></td>
                                <td><?php echo $row['book_author']; ?></td>
                                <td><?php echo $row['book_rating']; ?></td> 
                               
                                <td><?php echo $row["book_status"] == 1 ? "<div class='badge bg-success'>Active</div>" : "<div class='badge bg-danger'>Inactive</div>"; ?></td>
                                <td>
                                    <div class="btn-group">
                                        <a href="book_view.php?book_id=<?php echo $row['book_id'];?>" class="btn btn-info" title="View">
                                            <i class="fas fa-eye"></i>
                                        </a>

                                       

                                        <a onclick="return confirm('Are you Sure?');" href="book_delete.php?book_id=<?php echo $row['book_id'];?>" class="btn btn-danger" title="Delete">
                                            <i class="fas fa-trash"></i>
                                        </a>

                                        <a href="book_edit.php?book_id=<?php echo $row['book_id'];?>" class="btn btn-success" title="Edit">
                                            <i class="fas fa-pen"></i>
                                        </a>
                                        
                                    </div>
                                </td>
                            </tr>
                            <?php
                        }
                        ?> 
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "footer.php"; ?>
</body>
</html>
