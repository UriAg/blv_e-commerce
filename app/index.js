import './slider.js';
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