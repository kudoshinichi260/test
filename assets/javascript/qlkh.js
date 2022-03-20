function checkall(source){
    // var checkbox = document.getElementsByClassName(class_name);
    // var checkbox = document.getElementsByName('name[]');
    // var obj = document.getElementById('checkbox-customer');
    // if(obj.checked == true){
    //     for (i=0; i<checkbox.length; i++){
    //         checkbox[0].checked = true;
    //     }
    // }else {
    //     for (i=0; i<checkbox.length; i++){
    //         checkbox[0].checked = false;
    //     }
    // }
    checkboxes = document.getElementsByName('check[]');
    for(var i=0, n=checkboxes.length;i<n;i++) {
      checkboxes[i].checked = source.checked;
    }
}
