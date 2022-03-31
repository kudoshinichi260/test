<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GioHang</title>
    <link rel="stylesheet" href="./assets/css/giohang.css">
    <link rel="stylesheet" href="./assets/javascript/giohang.js">
    <link rel="stylesheet" href="./assets/fonts/fontawesome-free-5.15.4-web/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    
<div id="main">
    <div id="header">
       
    </div>
    <div id="GioHang">
        <div id="GH__header">
            <h1>Giỏ hàng</h1>
        </div>
        <div id="GH__container">
            <form action="" method="post">
            <div class="GH__c-h">
                <ul class="h-list">
                    <li class="h-item__cb" style="width: 55px; height: 18px; ">
                        <label class="h-item__checkbox" type="checkbox">
                            <input class="checkbox-input" type="checkbox" onclick="checkall(this);"> 
                        </label>
                    </li>
                    <li class="h-item__sp" style="width: 506px;">Sản phẩm</li>
                    <li class="h-item__dg" style="width: 173px;">Đơn giá</li>
                    <li class="h-item__sl" style="width:168px;">Số lượng</li>
                    <li class="h-item__st" style="width: 114px;">Số tiền</li>
                    <li class="h-item__tt" style="width: 138px;">Thao tác</li>
                </ul>
            </div>
            <?php
                require_once('sql_connect.php');
                $sql = "SELECT sanpham.TENSP,sanpham.GIA,giohang.SOLUONG,giohang.MASP FROM sanpham,giohang WHERE sanpham.MASP=giohang.MASP";
                $query = mysqli_query($conn, $sql);
                $giohang = array();
                while($row = mysqli_fetch_array($query,1)){
                    $giohang[] = $row;
                }
                for($i = 0; $i < count($giohang); $i++){
                    $masp = $giohang[$i]['MASP'];
                    $sqlha = "SELECT LINK FROM hinhanh WHERE MASP = '$masp'  LIMIT 1";
                    $hinhanh = mysqli_query($conn, $sqlha);
                    $link = mysqli_fetch_row($hinhanh);
            ?>
            <div class="GH__c-p">
                <div class="GH__c-pcb" style="width: 55px; ">
                    <label class="pcb-checkbox" type="checkbox" >
                        <input class="pcb-checkbox_input" type="checkbox" name="check[]" value="<?php echo $giohang[$i]['MASP']?>">
                    </label>
                </div>
                <div class="GH__c-pimg" style="width: 480px; justify-content:left">
                    <img src="<?php echo $link[0] ?>" alt=""> 
                    <div class="GH__c-pname"><?php echo $giohang[$i]['TENSP'] ?> </div>
                </div>
                <div class="GH__c-pdg" style="width: 173px;"><?php echo $giohang[$i]['GIA'] ?></div>   
                <div class="GH__c-sl" style="width: 168px">
                    <input onclick="tru(<?php echo $giohang[$i]['MASP'] ?>)" type='button' value='-' />
                    <input id='<?php echo $giohang[$i]['MASP'] ?>' min='1' name='quantity' type='text' value='<?php echo $giohang[$i]['SOLUONG'] ?>' style="width: 40px;" />
                    <input onclick="cong(<?php echo $giohang[$i]['MASP'] ?>)" type='button' value='+' />
                </div>
                <div class="GH__c-st" style="width: 130px"><?php echo $giohang[$i]['GIA']*$giohang[$i]['SOLUONG'] ?></div>
                <div class="GH__c-tt" style="width: 138px">xóa</div>
                <div class="gh_update"></div>
            </div>
            <?php        
                }
            ?>
            </form>
            <!-- <div class="GH__c-p">
                <div class="GH__c-pcb" style="width: 55px; ">
                    <label class="pcb-checkbox" type="checkbox" >
                        <input class="pcb-checkbox_input" type="checkbox" name="check[]">
                    </label>
                </div>
                <div class="GH__c-pimg" style="width: 480px; justify-content:left">
                    <img src="https://image.cellphones.com.vn/358x/media/catalog/product/8/0/800x800-1-640x640-5_2.png" alt=""> 
                    <div class="GH__c-pname">Nguyễn Hoàng Gia Đại </div>
                </div>
                <div class="GH__c-pdg" style="width: 173px;">138.000đ</div>   
                <div class="GH__c-sl" style="width: 168px">
                    <input onclick="tru()" type='button' value='-' />
                    <input id='quantity' min='1' name='quantity' type='text' value='1' style="width: 40px;" />
                    <input onclick="cong()" type='button' value='+' />
                </div>
                <div class="GH__c-st" style="width: 130px">₫138.000</div>
                <div class="GH__c-tt" style="width: 138px">xóa</div>
            </div> -->
        </div>
        <div class="GH__thanhtoan">
            <div class="GH__tt-tongtien">
                <div class="tt-tongtien">Tổng tiền: </div>
                <div class="tt-tong"></div>
            </div>
            <button class="GH__tt-muahang" onclick="thanhtoan();">
                <span>Mua hàng</span>
            </button>
        </div>
    </div>
    <div id="ThanhToan">
        <div class="TT__header">
            <h1>Thanh Toán</h1>
        </div>
        <div class="TT__container">
            <div class="TT__form-back">
                <u onclick="giohang();"><i class="fa-solid fa-angle-left"></i>Trở lại</u>
            </div>
            <div class="TT__profile-df">
                <h3> <i class="fa-solid fa-location-dot"></i> Địa chỉ nhận hàng</h3>
                <div class="profile-df">
                    <div class="df-name">
                        Nguyễn Hoàng Gia Đại
                    </div>
                    <div class="df-phone">
                        0357802648
                    </div>
                    <div class="df-address">
                        Thành phố Hồ Chí Minh
                    </div>
                    <a href="#" class="profile-change" onclick="thaydoi();">
                        Thay đổi
                    </a>
                </div>
            </div>
            <div class="TT__product">
                <div class="TT__product-h">
                    <h3 style="margin-left: 50px;">Sản phẩm</h3>
                    <div class="TT__h-dg" style="margin-left: 580px;">Đơn giá</div>
                    <div class="TT__h-sl" style="margin-left: 80px;">Số lượng</div>
                    <div class="TT__h-tt" style="margin-left: 120px;">Thành tiền</div>
                </div>
                <!-- <div class="TT__product-c">
                    <div class="TT__product-img" style="width: 80px;">
                        <img src="https://image.cellphones.com.vn/358x/media/catalog/product/i/p/iphone_13-_pro-5_4_1.jpg" alt="">
                    </div>
                    <div class="TT__product-name" style="width: 580px; padding-left: 20px;">
                        <p>iphone_13-_pro-5_4_1</p>
                    </div>
                    <div class="TT__product-price" style="width: 160px; text-align: center;" >
                        <p>3300000VND</p>
                    </div>
                    <div class="TT__product-amount" style="width: 125px; text-align: center;">
                        <p>1</p>
                    </div>
                    <div class="TT__product-tp" style="width: 255px; text-align: center;">
                        <p>330000000VND</p>
                    </div>
                </div>-->
                <div class="TT__product-c">
                    <div class="TT__product-img">

                    </div>
                    <div class="TT__product-name">

                    </div>
                    <div class="TT__product-price">

                    </div>
                    <div class="TT__product-amount">

                    </div>
                    <div class="TT__product-tp">

                    </div>
                </div>
                <div class="TT__thanhtoan">
                    <div class="TT__tt-tongthanhtoan">
                        <div class="tt-tongtthanhtoan">Tổng tiền: </div>
                        <div class="tt-tongtt"></div>
                    </div>
                    <button class="TT__tt-muahang" onclick="thanhtoan();">
                        <span>Đặt hàng</span>
                    </button>
                </div>
            </div>
            <div class="overlay">
                <div class="TT__form">
                <h2>Thông tin đặt hàng</h2>
                <form action="" class="TT__form-db">
                    <input type="text" name="customername" id="TT__form-name" value="" placeholder="Họ tên">
                    <br>
                    <input type="text" name="customerphone" id="TT__form-phone" value="" placeholder="Số điện thoại">
                    <br>
                    <input type="text" name="customeremail" id="TT__form-phone" value="" placeholder="Email">
                    <br>
                    <input type="text" name="customremail" id="TT__form-address" value="" placeholder="Địa chỉ"> 
                </form>
                <button class="TT__xacnhan" onclick="xacnhan();">
                    <span>Xác nhận</span>
                </button>
                </div>
            </div>
        </div>
    </div>
    <script src="./assets/javascript/giohang.js">

    </script>
</div>    
</body>
</html>