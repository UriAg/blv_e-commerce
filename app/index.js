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

//Showing cart products
const modalBody = document.querySelector('.cart_modal__body');
const totalToPay = document.querySelector('.total__pay');
let cart = [];

document.addEventListener('DOMContentLoaded', ()=>{
    if(localStorage.getItem('cart')){
        cart = JSON.parse(localStorage.getItem('cart'));
        showHTML();
    }
});

modalBody.addEventListener('click', e=>{
    if(e.target.classList.contains('icon-close')){
        const product = e.target.parentElement;
        const title = product.querySelector('p').textContent;
        cart = cart.filter(product => product.title !== title);
        showHTML();
    }
});

// Showing elements

const showHTML = () =>{

    if(!cart.length){
        modalBody.innerHTML=`
            <p class="empty-cart">El carrito está vacío</p>
        `
    }else{
        modalBody.innerHTML='';
    }

    let total = 0;
    cart.forEach(product =>{
        const containerProduct = document.createElement('div');
        containerProduct.classList.add('cart-product');
        containerProduct.innerHTML = `
            <div class="info__cart__products">
                <span class="prod__quantity">${product.quantity}</span>
                <p class="prod__title">${product.title}</p>
                <span class="prod__price">${product.price}</span>
                <svg
                    xmlns="https://www.w3.org/2000/svg"
                    fill="none"
                    viewbox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="icon-close svg-close-image">
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M6 18L18 6M6 6l12 12"
                    />
                </svg>
            </div>
        `

        modalBody.appendChild(containerProduct);
        let clearNumber= product.price.replace(/[^\w]/gi, '');
        total = total + product.quantity * parseFloat(clearNumber);
        localStorage.setItem('cart', JSON.stringify(cart));
    });
    totalToPay.innerText = `Total: $${total.toLocaleString('en')}`;
} 