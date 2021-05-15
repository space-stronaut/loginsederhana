<?php 

    include "config.php";

    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($conn, "INSERT INTO users VALUES('', '$email', '$username', '$password')");


    header('location:login.php');
?>