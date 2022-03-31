function checkall(source){
    checkboxes = document.getElementsByName('check[]');
    for(var i=0, n=checkboxes.length;i<n;i++) {
      checkboxes[i].checked = source.checked;
    }
}
// function messagedel(){
//   document.querySelector('.overlay__message-del').style.display ='block';
// }
// function yes(){
//   document.querySelector('.overlay__message-del').style.display ='none';
// }
// function Khong(){
//   document.querySelector('.overlay__message-del').style.display ='none';
// }
function del_user(id){
  if(confirm("Bạn có chắc chắn muốn xóa người này không ?")){
    $.ajax({
      type: post,
      url: 'delete_user.php',
      data: {delete_id: id},
      success: function(data){
         $('#delete'+id).hiden('slow');
      }
    });
  }
}