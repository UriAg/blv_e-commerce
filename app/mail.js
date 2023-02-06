//MAIL FIELD FUNCTIONS
//Habilita mail
const overlay = document.querySelector('.mail__overlay');
const SendBtn = document.querySelector('.submit__mail');

if(localStorage.getItem('email')!=null){
    overlay.style.display = "none";
}else{
    overlay.style.display = "flex";
    SendBtn.disabled = "true";
    SendBtn.style.opacity = "0.5";
    SendBtn.style.backgroundColor = "#646464";
}

/* Contact placeholder effect */
const inputs = document.querySelectorAll('input');
const textarea = document.querySelector('textarea');

textarea.onfocus = () =>{
    textarea.nextElementSibling.classList.add('letter-focus-ta');
    textarea.parentNode.classList.add('focus');
}
textarea.onblur = ()=>{
    textarea.parentNode.classList.remove('focus');
    textarea.nextElementSibling.classList.remove('letter-focus-ta');
}

inputs.forEach(input =>{
    input.onfocus = ()=>{
        input.nextElementSibling.classList.add('letter-focus');
        input.parentNode.classList.add('focus');
    }
    input.onblur = ()=>{
        input.parentNode.classList.remove('focus');
        input.nextElementSibling.classList.remove('letter-focus');
    }
});