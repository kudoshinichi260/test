<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form action="upload.php" method="POST" enctype ="multipart/form-data">
        <h1>Upload hình ảnh</h1>
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload Image" name="submit">
    </form>
    <div style = "width: 200px ; height: 200px">
        <img src="https://image.cellphones.com.vn/358x/media/catalog/product/_/0/_0005_layer_6.jpg" alt="">
    </div> -->
    <!-- <?php
        $conn = new mysqli ('localhost', 'root', '', 'csv_db 6');
        $sql = "SELECT * FROM hinhanh WHERE MASP='P1'" ;
        $result = $conn->query($sql);
        echo"<img src=".$row['LINK'].">";
        echo"Xin chào !";
    ?> -->
    <?php
    echo "<br>";
    echo "<br>";
    echo "<form method='post' action='' >";
        echo "<input type='hidden' name='thong_tin_khach_hang' value='co' > ";
        echo "<table>";
            echo "<tr>";
                echo "<td colspan='2' height='30px' >";
                    echo "<b>Thông tin mua hàng</b>";
                echo "</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td height='40px' >Lưu ý : </td>";
                echo "<td>";
                    echo "Tên người mua , địa chỉ , điện thoại bắt buộc phải điền vào";
                echo "</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td width='180px' >Tên người mua :</td>";
                echo "<td>";
                    echo "<input type='text' style='width:400px' name='ten_nguoi_mua' >";
                echo "</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>Email : </td>";
                echo "<td>";
                    echo "<input type='text' style='width:400px' name='email' >";
                echo "</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>Địa chỉ : </td>";                  
                echo "<td>";
                    echo "<textarea style='width:400px;' name='dia_chi' ></textarea>";
                echo "</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>Điện thoại : </td>";
                echo "<td>";
                    echo "<input type='text' style='width:400px' name='dien_thoai' >";
                echo "</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>Nội dung :</td>";
                echo "<td>";
                    echo "<textarea style='width:400px;height:100px' name='noi_dung' ></textarea>";
                echo "</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>&nbsp;</td>";
                echo "<td>";
                    echo "<input type='submit' value='Mua hàng' >";
                echo "</td>";
            echo "</tr>";
        echo "</table>";
    echo "</form>";
?>
</body>
</html>