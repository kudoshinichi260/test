<?php
    require_once('sql_connect.php');
    $id = $_GET['MAKH'];
    $sql ="SELECT TRANGTHAI FROM khachhang WHERE MAKH=$id";
    $b = mysqli_query($conn, $sql);
    $row = mysqli_fetch_row($b);
    if( $row[0] === "FA"){
        $update = "UPDATE khachhang SET TRANGTHAI='F0' WHERE MAKH=$id";
        $query = mysqli_query($conn, $update);
    }else {
        $update = "UPDATE khachhang SET TRANGTHAI='FA' WHERE MAKH=$id";
        $query = mysqli_query($conn, $update);
    }
    header('location: index.php');
