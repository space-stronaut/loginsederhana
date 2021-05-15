<?php 

    include "config.php";

    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' and password='$password'");
    $cek = mysqli_num_rows($query);

    if($cek > 0){
        header("location:home.php?username='$username'");
    }else{
        header("location:login.php");
    }
    

?>