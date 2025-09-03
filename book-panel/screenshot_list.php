<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Screenshot List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/8.2.0/mdb.min.css" rel="stylesheet" />
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

        .screenshot-image {
            width: 100px;
            height: 100px;
            object-fit: cover;
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

                <div class="card-header bg-primary text-white text-center">
                    <div class="d-flex justify-content-between">
                        <div>
                            Screenshot List
                        </div>
                        <div>
                            <a href="screenshot_add.php?movie_id=<?= $_GET["movie_id"] ?>" class="btn btn-primary">+ Add
                                screenshots</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div id="carouselExampleFade" class="carousel slide carousel-fade">
                        <div class="carousel-inner">
  
                            <?php

                            include "db_connection.php";
                            $movie_id = $_GET["movie_id"];
                            $query = "SELECT * FROM tbl_movie_screenshot where tms_movieid = '$movie_id'";
                            $scount = 1;
                            $result = mysqli_query($conn, $query);
                            while ($rowslider = mysqli_fetch_array($result)) {
                        ?>
                        
                            <div class="carousel-item <?= $scount == 1 ? " active" : " " ?>">
                                <img src="uploads/movie/<?= $rowslider["tms_image"] ?>" style="height: 350px;" class="img-fluid d-block w-100"
                                    alt="Wild Landscape" />
                            </div>
                            <?php
                            }
                            ?>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <div class="table-responsive mt-3">
                        <table class="table table-light table-bordered table-hover text-center">
                            <thead class="table-dark">
                                <tr>
                                    <th>SR.NO.</th>
                                    <th>Screenshot</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $count = 1;
                                $resultdata = mysqli_query($conn, $query);
                                while ($row = mysqli_fetch_array($resultdata)) {
                                    ?>
                                    <tr>
                                        <td><?php echo $count++ ?></td>

                                        <td>
                                            <img height="100" width="100" src="uploads/movie/<?= $row["tms_image"] ?>"
                                                alt="Screenshot">
                                        </td>
                                        <td>
                                            <?php echo $row["tms_status"] == 1 ? "<div class='badge bg-success'>Active</div>" : "<div class='badge bg-danger'>Inactive</div>"; ?>
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="screenshot_edit.php?tms_id=<?php echo $row['tms_id']; ?>&movie_id=<?= $row["tms_movieid"]?>"
                                                    class="btn btn-success" title="Edit">
                                                    <i class="fas fa-pen"></i>
                                                </a>

                                                <a onclick="return confirm('Are you Sure?');"
                                                    href="screenshot_delete.php?tms_id=<?php echo $row['tms_id']; ?>&movie_id=<?= $row["tms_movieid"]?>"
                                                    class="btn btn-danger" title="Delete">
                                                    <i class="fas fa-trash"></i>
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
    <!-- MDB -->
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/8.2.0/mdb.umd.min.js"></script>
    <?php include "footer.php"; ?>
</body>

</html>