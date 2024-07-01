

let stars = document.getElementById('stars');
let moon = document.getElementById('moon');
let mountains1 = document.getElementById('mountains1');
let mountains2 = document.getElementById('mountains2');
let river = document.getElementById('river');
let boat = document.getElementById('boat');
let nouvil = document.querySelector('.nouvil');
let header = document.querySelector('header')

window.onscroll = function(){
    let value = scrollY;
    stars.style.left = value +'px' 
    moon.style.top = value *3 +'px'
    mountains1.style.top = value * 2 +'px'
    mountains2.style.top = value *1.5 +'px'
    river.style.top = value +'px' 
    boat.style.top = value +'px'
    boat.style.left = value *3 +'px'
    nouvil.style.fontSize = value +'px'
    if(scrollY >= 71){
        nouvil.style.fontSize = 71 +'px'
        nouvil.style.position = 'fixed'
        if(scrollY >= 420){
            nouvil.style.display = 'none'
        }else{
            nouvil.style.display = 'block'
        }
        if(scrollY >= 120){
            document.querySelector('.tes').classList.add("bc")
        }
    }
    
}

