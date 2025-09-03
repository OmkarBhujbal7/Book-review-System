<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Movie</title>
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
                <h5 class="mb-0">Update Screenshot</h5>
                <a href="screenshot_list.php" class="btn btn-dark"> Screenshots</a>
            </div>
            <div class="card-body">
                <form action="screenshot_update.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="tms_id" value="<?= $tms_id ?>">

                    <div class="row g-3">
                        <input type="hidden" name="tms_id" value="<?= $_GET["tms_id"]?>">
                        <input type="hidden" name="movie_id" value="<?= $_GET["movie_id"]?>">
                    <div class="col-md-6">
                            <label class="form-label">Screenshot</label>
                            <input type="file" name="tms_image" class="form-control">
                            <?php if (!empty($movie["tms_image"])) { ?>
                            <img src="uploads/brand/<?= htmlspecialchars($movie["tms_image"]) ?>" width="100" class="mt-2">
                            <?php } ?>
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