<?php
session_start();
include "db_connection.php";

// Redirect if not logged in
if (!isset($_SESSION['login'])) {
    echo "<script>window.location.href='login.php';</script>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>BookSaw - Book review</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="icomoon/icomoon.css">
    <link rel="stylesheet" type="text/css" href="css/vendor.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body data-bs-spy="scroll" data-bs-target="#header" tabindex="0">
    <div id="header-wrap">
        <header id="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-2">
                        <div class="main-logo">
                            <a href="index.php"><img src="image/book logo.png" alt="logo"></a>
                        </div>
                    </div>

                    <div class="col-md-10">
                        <nav id="navbar">
                            <div class="main-menu stellarnav">
                                <ul class="menu-list">
                                    <li class="menu-item active"><a href="index.php">Home</a></li>

                                    <li class="menu-item has-sub">
                                        <a href="#">Genre</a>
                                        <ul>
                                            <?php
                                            $query = "SELECT DISTINCT category_name FROM book_category";
                                            $result = mysqli_query($conn, $query);
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo '<li><a href="#">' . htmlspecialchars($row["category_name"]) . '</a></li>';
                                            }
                                            ?>
                                        </ul>
                                    </li>

                                    <!-- User Panel -->
                                    <?php if (isset($_SESSION["login"])): ?>
                                        <li class="menu-item">
                                            <a href="#" class="nav-link">Welcome, <?= htmlspecialchars($_SESSION["login"]); ?></a>
                                        </li>
                                        <li class="menu-item"><a href="logout.php" class="nav-link">LogOut</a></li>
                                    <?php else: ?>
                                        <li class="menu-item"><a href="login.php" class="nav-link">LogIn</a></li>
                                        <li class="menu-item"><a href="signup.php" class="nav-link">SignUp</a></li>
                                    <?php endif; ?>
                                </ul>
                                <div class="hamburger">
                                    <span class="bar"></span>
                                    <span class="bar"></span>
                                    <span class="bar"></span>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
    </div><!--header-wrap-->
</body>
</html>