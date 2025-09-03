<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie List</title>
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
                <h5 class="mb-0">Movie screenshots</h5>
                <a href="screenshot_list.php" class="btn btn-dark">Screenshots</a>
            </div>
            <div class="card-body">
           
                <form action="screenshot_insert.php" method="post" enctype="multipart/form-data">
                    <div class="row g-3">
                    <div class="col-md-6">
                      
                        <input type="hidden" value="<?= isset($_GET["movie_id"]) ? htmlspecialchars($_GET["movie_id"]) : '' ?>" name="movie_id">
                            <label class="form-label">Screenshot</label>
                            <input type="file" name="tms_image" class="form-control">
                            
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