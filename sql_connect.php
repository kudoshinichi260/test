<?php
  $conn = mysqli_connect('localhost', 'root','','qlbh');
  if (!$conn) {
   die('Không thể kết nối: ' . mysqli_error($conn));
   exit();
  }
//   echo 'Kết nối thành công';
//   mysqli_close($conn);
?>