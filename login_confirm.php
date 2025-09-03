<?php
session_start();
include "db_connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cust_email = trim($_POST["cust_email"]);
    $cust_password = trim($_POST["cust_password"]);

    $query = "SELECT cust_email, cust_password FROM tbl_cust WHERE cust_email = ?";
    $stmt = mysqli_prepare($conn, $query);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "s", $cust_email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if ($row = mysqli_fetch_assoc($result)) {
            if (password_verify($cust_password, $row['cust_password'])) {
                $_SESSION['login'] = $row['cust_email'];

                // ✅ Redirect to index.php after successful login
                header("Location: index.php");
                exit();
            } else {
                echo "<script>alert('Wrong Email or Password'); window.location.href='login.php';</script>";
            }
        } else {
            echo "<script>alert('Wrong Email or Password'); window.location.href='login.php';</script>";
        }
        mysqli_stmt_close($stmt);
    } else {
        die("Database query failed: " . mysqli_error($conn));
    }
}
?>
