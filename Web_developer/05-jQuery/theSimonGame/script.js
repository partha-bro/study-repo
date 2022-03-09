var gameParttern = new Array();
var userClickedPattern = new Array();
var userChosenColor;
let buttonColors = [ 'green', 'red', 'yellow', 'blue'];
var level = 0;

function nextSequence(){
    let randomNumber = Math.floor(Math.random() * 4);
    let randomColorChoosen = buttonColors[randomNumber];
    gameParttern.push(randomColorChoosen);
    $('#'+randomColorChoosen).fadeOut(100).fadeIn(100).fadeOut(100).fadeIn(100);
    playMusic(randomColorChoosen);
    level += 1;
    $('#level').text('Level '+level);
}

function playMusic(a){
    const green = new Audio('sounds/green.mp3');
    const red = new Audio('sounds/red.mp3');
    const yellow = new Audio('sounds/yellow.mp3');
    const blue = new Audio('sounds/blue.mp3');
    const wrong = new Audio('sounds/wrong.mp3');

    switch (a) {
        case 'green':
            green.play();
            break;
        case 'red':
            red.play();
            break;
        case 'yellow':
            yellow.play();
            break;
        case 'blue':
            blue.play();
            break;
        default:
            wrong.play();
            break;
    }
}

function animatePress(color){
    $('#'+color)
  .addClass('pressed')
  .delay(100)
  .queue(function(next){
    $(this).removeClass('pressed');
    next();
  });
}

$('.box').click(function(){
    userChosenColor = $(this).attr('id');
    animatePress(userChosenColor);
    playMusic(userChosenColor);
    userClickedPattern.push(userChosenColor);
    if (level == userClickedPattern.length ){
        checkAnswer(level);
    }
});

function checkAnswer(currentLevel){
    if(userClickedPattern[currentLevel-1] == gameParttern[currentLevel-1] ){
        var log = 'success';
        if(userClickedPattern.length == gameParttern.length){
            userClickedPattern.splice(0);
            setTimeout(function(){
                nextSequence();
            }, 1000);
        }
    }else{
        log = 'wrong';
        playMusic('wrong');
        $('body').removeClass('bodyBackground').addClass('red').delay(200).queue(function(next){
            $(this).removeClass('red').addClass('bodyBackground');
            next();
        });
        $('#level').text('Game Over, Press Any Key to Restart');
        startOver();
    }
    console.log(log);
}

$(document).keypress(function(event){
    nextSequence();
});

function startOver(){
    level = 0;
    gameParttern.splice(0);
    userClickedPattern.splice(0);
}