<?php
    include_once('sql_connect.php');
    $id=$_GET['MAKH'];
    $sql ="DELETE FROM khachhang WHERE MAKH=$id";
    $query = mysqli_query($conn, $sql);
    header('location: index.php');
    // $id = $_POST['delete_id'];
    // $sql ="DELETE FROM khachhang WHERE MAKH=$id";
    // $query = mysqli_query($conn, $sql);
    header('location: index.php');
?>