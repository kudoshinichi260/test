window.onload = function(){
    // giohang();
    thanhtoan();
    document.querySelector('.overlay').style.display = 'none';
}
document.get
function tru(id){
    console.log(id);
    var tmp = id;
    var result = document.getElementById(tmp);
    var qty = result.value; 
    if(  qty > 1 ) result.value--;
    return false;
} 
function cong(id){
    var result = document.getElementById(id);
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
function checkall(source){
    checkboxes = document.getElementsByName('check[]');
    for(var i=0, n=checkboxes.length;i<n;i++) {
      checkboxes[i].checked = source.checked;
    }
}
