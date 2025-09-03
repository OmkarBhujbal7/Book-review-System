<?php
include "db_connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = mysqli_real_escape_string($conn, $_POST['fullName']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];  // No escaping needed
    $confirmPassword = $_POST['confirmPassword'];

    // Check if passwords match
    if ($password !== $confirmPassword) {
        echo "<script>alert('Passwords do not match!'); window.history.back();</script>";
        exit();
    }

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    // Check if email already exists
    $emailCheckQuery = "SELECT * FROM tbl_cust WHERE cust_email = '$email'";
    $emailCheckResult = mysqli_query($conn, $emailCheckQuery);

    if (mysqli_num_rows($emailCheckResult) > 0) {
        echo "<script>alert('Email already exists! Try another.'); window.history.back();</script>";
        exit();
    }

    // Insert user into the database
    $query = "INSERT INTO tbl_cust (cust_name, cust_email, cust_password) 
              VALUES ('$fullName', '$email', '$hashedPassword')";

    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Signup successful!'); window.location.href='login.php';</script>";
    } else {
        echo "<script>alert('Database error: " . mysqli_error($conn) . "'); window.history.back();</script>";
    }
}
?>