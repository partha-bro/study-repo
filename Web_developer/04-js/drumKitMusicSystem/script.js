var buttonNumber = document.querySelectorAll('button').length;

// For button press
for (let index = 0; index < buttonNumber; index++) {
    document.querySelectorAll('button')[index].addEventListener('click',function (){
        
        var buttonInnerHtml = this.innerHTML;

        buttonAnimation(buttonInnerHtml);
        makeSound(buttonInnerHtml);
        
        
    });  
}

//for keyboard press
document.addEventListener('keypress', function(event){
    buttonAnimation(event.key);
    makeSound(event.key);
});

function makeSound(key) {
    switch (key) {
        case "w":
            var tom1 = new Audio('sounds/tom-1.mp3');
            tom1.play();
            break;
        case "a":
            var tom2 = new Audio('sounds/tom-2.mp3');
            tom2.play();
            break;
        case "s":
            var tom3 = new Audio('sounds/tom-3.mp3');
            tom3.play();
            break;
        case "d":
            var tom4 = new Audio('sounds/tom-4.mp3');
            tom4.play();
            break;
        case "j":
            var snare = new Audio('sounds/snare.mp3');
            snare.play();
            break;
        case "k":
            var crash = new Audio('sounds/crash.mp3');
            crash.play();
            break;
        case "l":
            var kick_bass = new Audio('sounds/kick-bass.mp3');
            kick_bass.play();
            break;
        default: 
            console.log(buttonLetter);
            break;
    }
}

function buttonAnimation(buttonClicked) {
    
    document.querySelector('.'+buttonClicked).classList.add('pressed');

    setTimeout(function (){
        document.querySelector('.'+buttonClicked).classList.remove('pressed');
    }, 500);
}