const productList = document.querySelector('.products__list');
const modalBody = document.querySelector('.cart_modal__body');
const totalToPay = document.querySelector('.total__pay');
let cart = [];

document.addEventListener('DOMContentLoaded', ()=>{
    if(localStorage.getItem('cart')){
        cart = JSON.parse(localStorage.getItem('cart'));
        showHTML();
    }
});

productList.addEventListener('click', (e)=>{
    if(e.target.classList.contains('atc__btn')){
        const productSelected = e.target.parentNode.parentNode;
        
        const ProductOnCart = {
            quantity: 1,
            title: productSelected.querySelector('.card-body').querySelector('h3').textContent,
            price: productSelected.querySelector('.card-body').querySelector('h5').textContent
        }
        
        const exits = cart.some(product => product.title == ProductOnCart.title);
        if(exits){
            const products = cart.map(product => {
                if(product.title==ProductOnCart.title){
                    product.quantity++;
                    return product;
                }else{
                    return product;
                }
            });
            cart = [...products]
        }else{
            cart = [...cart, ProductOnCart];
        }
        showHTML();
    }
});

modalBody.addEventListener('click', e=>{
    if(e.target.classList.contains('icon-close')){
        const product = e.target.parentElement;
        const title = product.querySelector('p').textContent;
        cart = cart.filter(product => product.title != title);
        showHTML();
    }
});

// Showing elements

const showHTML = () =>{

    if(!cart.length){
        modalBody.innerHTML=`
            <p class="empty-cart">El carrito está vacío</p>
        `
       localStorage.removeItem('cart');
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

//adding to cart - Showing product details

const details_container = document.querySelector('.offcanvas__product__info');
const num_of_products = document.querySelector('num_of_prod');

details_container.addEventListener('click', (e)=>{
    if(e.target.classList.contains('atc__btn__spd')){
        const productSelected = e.target.parentNode.parentNode;
        const nop = e.target.parentNode.querySelector('.num_of_prod');
        if(parseInt(nop.value)<1){
            nop.value = 1;
        }

        const ProductOnCart = {
            quantity: parseInt(nop.value),
            title: productSelected.querySelector('h3').textContent,
            price: productSelected.querySelector('h5').textContent
        }
        
        let exits = cart.some(product => product.title == ProductOnCart.title);
        if(exits){
            const products = cart.map(product => {
                if(product.title==ProductOnCart.title){
                    product.quantity+=ProductOnCart.quantity;
                    return product;
                }else{
                    return product;
                }
            });
            cart = [...products]
        }else{
            cart = [...cart, ProductOnCart];
        }
        showHTML();
    }
});