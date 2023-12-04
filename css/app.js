const sliderMain = document.querySelector('.main-slider');
const widthSlider = document.querySelector('.slider').clientWidth;

var index = 1;
changeImage =function(){
    var imgs =["../img/images/banner1.webp","../img/images/banner3.jpg"];
    document.getElementById('img').src=imgs[index];
    index ++;
    if(index==2){
        index=0;
    }
   

}
setInterval(changeImage,2000);


const item_product = document.querySelectorAll('.item-product');


item_product.forEach((item) => {
    item.addEventListener('mouseover', () => {
        item.firstElementChild.classList.add('icon-heart-active');
        item.lastElementChild.classList.add('wrapper-btn-active');
    });
    item.addEventListener('mouseout', () => {
        item.firstElementChild.classList.remove('icon-heart-active');
        item.lastElementChild.classList.remove('wrapper-btn-active');
    });
});


const btn_action_buy = document.querySelectorAll('.btn-action-buy');
const btn_action_add_cart = document.querySelectorAll('.btn-action-addCart');
const icon_cart = document.querySelector('.icon-cart span');
let listCart = [];
btn_action_add_cart.forEach((element) => {
    element.addEventListener('click', () => {
        const checkAdd = listCart.includes(element.parentElement.id);
        if (!checkAdd) {
            listCart.push(element.parentElement.id);
            icon_cart.innerText = listCart.length;
        } else {
            alert('Đã tồn tại trong giỏ hàng');
        }
    });
});


const icon_heart = document.querySelectorAll('.icon-heart');
icon_heart.forEach((item) => {
    item.addEventListener('click', () => {
        item.classList.toggle('heart-active');
    });
});


btn_action_buy.forEach((item) => {
    item.addEventListener('click', () => {
        alert('Bạn cần đăng nhập mới sử đụng được chức năng này !!!');
    });
});


const btn_user = document.querySelector('.btn-user');
const overlay = document.querySelector('.module-overlay');
btn_user.addEventListener('click', () => {
    btn_user.nextElementSibling.classList.add('overlay-active');
});


overlay.addEventListener('click', () => {
    btn_user.nextElementSibling.classList.remove('overlay-active');
});




    


var giohang = new Array();

function themvaogiohang(x) {
    var boxsp = x.parentElement.children;
    var hinh = boxsp[0].children[0].src;
    var gia = boxsp[1].children[0].innerText;
    var tensp = boxsp[2].innerText;
    var soluong = boxsp[3].value;
    var sp = new Array(hinh, gia, tensp, soluong);

    giohang.push(sp);

    console.log(giohang);
    showcountsp();

}

function showcountsp() {
    document.getElementById("countsp").innerHTML = giohang.length;
}