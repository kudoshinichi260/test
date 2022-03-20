const edit_phone = document.querySelector('.c__item-edit-phone')
const edit_birthday = document.querySelector('.c__item-edit-birthday')
const edit_close = document.querySelector('.c__edit-close')
const customer = document.querySelector('.c__content-infor')
window.onload = function(){
    openHome();
    closeEdit();
}
function closeEdit(){
    edit_phone.style.display = 'none';
    edit_birthday.style.display = 'none';
    edit_close.style.display ='none';
}
function openEdit(){
    edit_phone.style.display = 'flex';
    edit_birthday.style.display = 'flex';
    edit_close.style.display ='block';
}
function openCustomer(){
    customer.style.display = 'block';
    document.querySelector('.c__content-history').style.display = 'none';
    document.querySelector('.c__content-home').style.display = 'none';
    document.querySelector('.c__content-support').style.display = 'none';
}
function openHome(){
    customer.style.display = 'none';
    document.querySelector('.c__content-history').style.display = 'none';
    document.querySelector('.c__content-home').style.display = 'block';
    document.querySelector('.c__content-support').style.display = 'none';
}
function openHistory(){
    customer.style.display = 'none';
    document.querySelector('.c__content-history').style.display = 'block';
    document.querySelector('.c__content-home').style.display = 'none';
    document.querySelector('.c__content-support').style.display = 'none';
}
function openSupport(){
    customer.style.display = 'none';
    document.querySelector('.c__content-history').style.display = 'none';
    document.querySelector('.c__content-home').style.display = 'none';
    document.querySelector('.c__content-support').style.display = 'block'
}