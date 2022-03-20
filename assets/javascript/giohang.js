window.onload = function(){
    // giohang();
    thanhtoan();
    document.querySelector('.overlay').style.display = 'none';
}
function tru(){
    var result = document.getElementById('quantity');
    var qty = result.value; 
    if(  qty > 1 ) result.value--;
    return false;
} 
function cong(){
    var result = document.getElementById('quantity');
    var qty = result.value; 
    if( !isNaN(qty)) result.value++; return false;
}
function giohang(){
    document.getElementById('GioHang').style.display = 'block';
    document.getElementById('ThanhToan').style.display = 'none';
}
function thanhtoan(){
    document.getElementById('GioHang').style.display = 'none';
    document.getElementById('ThanhToan').style.display = 'block';
}
function thaydoi(){
    document.querySelector('.overlay').style.display = 'block';
}
function xacnhan(){
    document.querySelector('.overlay').style.display = 'none';
}