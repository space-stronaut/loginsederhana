<?php 

    $conn = mysqli_connect('localhost', 'root', '', 'login');

    $query = mysqli_query($conn, "SELECT * FROM users");

?>