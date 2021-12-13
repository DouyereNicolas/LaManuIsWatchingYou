let keyboard;
let count = 0;


document.addEventListener('keydown', function() {
    keyboard = false;
    count++;
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


setInterval(control, 36000000);

