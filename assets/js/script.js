
let count = 0;


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
    }
    count = 0;
}


setInterval(control, 10000);

