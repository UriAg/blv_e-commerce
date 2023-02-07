//INDEX USER LOGIN MOFICATION
//Change "login" to "logout" 
const login =document.querySelector(".login");
const logout =document.querySelector(".logout");

if(localStorage.getItem('name')!==null){
    login.style.display = "none";
    logout.style.display = "inline";
}else{
    logout.style.display = "none";
    login.style.display = "inline";
}

//Logout function
logout.addEventListener('click', ()=>{
    localStorage.clear();
    logout.style.display = "none";
    login.style.display = "inline";
});


//NAVBAR BACKGROUND COLOR CHANGE EFFECT
/* Scroll navbar effect */
const nav = document.getElementById("nav");
if(window.screen.width > 600){
    window.onscroll = () =>{
        if(window.scrollY >= 300){
            nav.classList.add('scroll-style');
        }else{
            nav.classList.remove('scroll-style');
        }
    }
}

//NAVBAR MOBILE MENU MODIFICATION
//Change the menu icon
const btnMenu = document.querySelector('.btn__menu');
const menu = document.querySelector('.menu');

btnMenu.addEventListener('click', () =>{
    btnMenu.classList.contains('btn__menu--open') ?
    btnMenu.classList.replace('btn__menu--open', 'btn__menu--close'):
    btnMenu.classList.replace('btn__menu--close', 'btn__menu--open');

    menu.classList.toggle('active');
})

//Redirect and close menu
const menu_sh = document.querySelectorAll("#menu_guide");
menu_sh.forEach( button =>{
    button.onclick = ()=>{
        setTimeout(function(){
            btnMenu.classList.replace('btn__menu--close', 'btn__menu--open');
            menu.classList.toggle('active');
        }, 500);
        
    }
});


//Go to top on click logo
const logo = document.querySelector('.logo');
logo.onclick = ()=>{
    setTimeout(function(){
        btnMenu.classList.replace('btn__menu--close', 'btn__menu--open');
        menu.classList.remove('active');
    }, 500);
    
}