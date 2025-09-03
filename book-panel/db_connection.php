<?php
$hostname="localhost";
$username="root";
$password="";
$dbname="book_panel";
$conn = mysqli_connect($hostname,$username,$password,$dbname);
if(!$conn){
    echo "connection failed!";

}

?>