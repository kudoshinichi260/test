
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/qlkh.css">
    <link rel="stylesheet" href="./assets/javascript/qlkh.js">
    <link rel="stylesheet" href="./assets/fonts/fontawesome-free-5.15.4-web/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Document</title>
</head>
<body>
<?php
    require_once('sql_connect.php');
    if(isset($_POST["submit"])){
        if(!empty($_POST["check"])){
            foreach($_POST["check"] as $id){
                $a="DELETE FROM khachhang WHERE MAKH=$id";
                mysqli_query($conn, $a);
            }
        }
        else {
            echo 'xxxxxxx';
        }
    }
?>
<div id="main">
    <div id="qlkh__header"></div>
    <div id="qlkh__container">
        <div id="qlkh__c-header">
            <h2>Quản lí khách hàng</h2>
        </div>
        <form action="" method="post">
        <div id="qlkh__c-manipulation">
            <div class="qlkh__mpt-del" onclick="messagedel();">
            
               <input type="submit" name="submit" value ="Delete" onclick="return confirm('Bạn có chắc không ?')">
           
            </div>
            <div class="qlkh__mpt-block">
                Block
            </div>
            <div class="qlkh__mpt-block">
                UNBlock
            </div>
            <div class="qlkh__mpt-search">
                <input type="text" name="" id="" placeholder="Search...">
                <button>
                    <span>Tìm kiếm</span>
                </button>
            </div>
        </div>
        <div id="qlkh__c-content">
            
            <table class="qlkh__content-table">
                <thead>
                    <td> 
                        <label class="checkbox-customer" type="checkbox">
                            <input type="checkbox" id="checkbox-customer" onclick="checkall(this)">
                        </label>
                    </td>
                    <td>STT</td>
                    <td>Mã khách hàng</td>
                    <td>Họ Tên</td>
                    <td>Ngày sinh</td>
                    <td>Số điện thoại</td>
                    <td>Email</td>
                    <td>Trạng thái</td>
                </thead>
                <tbody id="qlkh__table-c">
                    <?php
                    include ("sql_connect.php");

                    $sql = "SELECT * FROM khachhang";
                    $query = mysqli_query($conn, $sql);
                    $data = array();
                    while ($row = mysqli_fetch_array($query,1 )){
                        $data[] = $row;
                    } 
                    for ($i=0 ; $i < count($data); $i++){
                    ?>
                        <tr>
                            <td>  
                                    <input class="checkbox1" type="checkbox" id="" name="check[]" value="<?php echo $data[$i]['MAKH'] ?> " >
                            </td>
                            <th><?php echo ($i+1) ?> </th>
                            <th><?php echo $data[$i]['MAKH'] ?></th>
                            <th><?php echo $data[$i]['HOTEN'] ?></th>
                            <th><?php echo $data[$i]['NGAYSINH'] ?></th>
                            <th><?php echo $data[$i]['SODT'] ?></th>
                            <th><?php echo $data[$i]['EMAIL'] ?></th>
                            <th><?php echo $data[$i]['TRANGTHAI'] ?></th>
                            <th id="delete<?php echo $data[$i]['MAKH'] ?>" class="del-customer">
                                <!-- <button onclick="del_user(<?php echo $data[$i]['MAKH'] ?>)"><i class="fa-solid fa-trash-can"></i></button> -->
                               <a href="delete_user.php?MAKH=<?php echo $data[$i]['MAKH'];?>" > <i class="fa-solid fa-trash-can"></i> </a>
                            </th>
                            <th class="block-customer">
                               <a href="trangthai.php?MAKH=<?php echo $data[$i]['MAKH'];?>"> <i class="fa-solid fa-lock"></i></a>
                            </th>
                        </tr>
                    <?php
                    };
                    mysqli_close($conn);
                    ?>
                </tbody>
                
            
            </form> 
        </div>
        </table>
    </div>
    <!-- <div class="overlay__message-del" style="display: none;">
        <div class="qlkh__massage-delct">
                <h3 class="message-title">Bạn có chắc muốn xóa sản phẩm này ?   </h3>
                <div class="message-option">
                    <button class="delct-yes" onclick="yes();">Có</button>
                    <button class="delct-no" onclick="Khong();">Không</button>
                </div>
        </div> 
    </div> -->
    <!-- <script type ="text/javascript">
        function del_user(id){
        if(confirm("Bạn có chắc chắn muốn xóa người này không ?")){
        $.ajax({
        type: 'POST',
        url: 'delete_user.php',
        data: {delete_id: id},
        success: function(data){
            $('#delete'+id).hiden('slow');
                }
            });
            }
        }
    </script> -->
    <script src="./assets/javascript/qlkh.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</div>
</body>
</html>