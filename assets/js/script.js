let message = [["Pas de travail, pas de dîplome. Pas de dipôme, pas de boulot. Pas de boulot... pas de boulot.", "no"], ["Bah alors, qu'est-ce qu'on fait ?", "innocent"],["Bosse feignasse", "panda"], ["C'est trop calme... j'aime pas trop beaucoup ça", "numerobis"]];

function pickMessage(list) {
    return list[Math.floor(Math.random() * list.length)];
}


function displayMsg(){
    let test = pickMessage(message);
     document.getElementById('sentence').textContent = test[0];
     document.getElementById('gif').innerHTML = `<img class="imgGif" src="assets/img/${test[1]}.gif" alt="gif ${test[1]}">`;
    console.log(test) 
    }



let count = 0;
let modal = document.getElementById('modal');

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
        if(!document.getElementById('exampleModal').classList.contains('show')){
            fetch("http://lamanuiswatchingyou/assets/function/setEvent.php")
        let elem = new bootstrap.Modal(document.getElementById('exampleModal')); 
         elem.show(); 
        displayMsg();
        } 
        
    }
    count = 0;
}

setInterval(control, 5000);

let btn = document.querySelector('.btn-close');

