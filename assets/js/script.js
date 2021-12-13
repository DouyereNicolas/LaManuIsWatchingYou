
let count = 0;
let modal = document.querySelector('#modal');

document.addEventListener('keydown', function() {
    count = 1;
})

document.addEventListener('mousemove', function() {
    count = 1;
})

document.addEventListener('click', function() {
    count = 1;
})

const control = () => {
    if ( count > 0 ) {
        console.log("c'est bien continue")
    }
    else {
        console.log("travaille"); 
        modal.setAttribute("class", "modal active");    
    }
    count = 0;
}

setInterval(control, 10000);

<<<<<<< HEAD
let btn = document.querySelector('.btn-close');

btn.addEventListener('click', function() {
    
    modal.setAttribute("class", "modal disabled");
})
