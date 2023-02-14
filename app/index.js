import './navigation.js';
import './mail.js';

//REDIRECTIONS TO PRODUCTS PAGE
/* Product page redirect */
const products = document.querySelectorAll('.product__section');

products.forEach(product =>{
    product.onclick = ()=>{
        location.href="./pages/products.php";
    }
});

//Image replacement of slider depending on the screen
const images = document.getElementsByClassName('slider__img');
if(window.screen.width <= 600){
    images[1].src = "./assets/bg/paf-1.jpg";
    images[2].src = "./assets/bg/bf-2.jpg";
    images[3].src = "./assets/bg/DSC_0299.JPG";
    images[4].src = "./assets/bg/tf-4.jpg";
    images[0].src = "./assets/bg/uf-5.jpg";
}