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

// //Image replacement of slider depending on the screen
// const imagenes = document.getElementsByClassName('slider__img');
// if(window.screen.width <= 600){
//     imagenes[1].src = "./assets/bg/paf-1.jpg";
//     imagenes[2].src = "./assets/bg/bf-2.jpg";
//     imagenes[3].src = "./assets/bg/DSC_0299.JPG";
//     imagenes[4].src = "./assets/bg/tf-4.jpg";
//     imagenes[0].src = "./assets/bg/uf-5.jpg";
// }