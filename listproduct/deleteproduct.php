<?php
    require_once '../database.php';
    $id = $_GET['id'];
    $sql = "DELETE FROM product where IDPR = $id";
    $query = mysqli_query($con, $sql);
    header('location: listproduct.php');
?>