<?php
session_start();
    include "db_connection.php";
    $email=$_POST["email"];
    $password=$_POST["password"];
     $query = "select * FROM tbl_users WHERE email = '$email' and password = '$password'";
    $result = mysqli_query($conn,$query);
if($row=mysqli_fetch_array($result)){
    $_SESSION['login'] = $row['email'];
    echo "<script> alert('login succesfull');window.location.href='book_list.php';</script>";
}
else{
    echo "Wrong Email or Password";
}
 ?>