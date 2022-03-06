var player1Name = prompt('Enter your name of Player 1: ');
var player2Name = prompt('Enter your name of Player 2: ');

if (player1Name && player2Name ){
    document.querySelector('#player1').textContent = player1Name.toUpperCase();
    document.querySelector('#player2').textContent = player2Name.toUpperCase();
}


function main() {

    var randomNoPlayer1 = Math.floor(Math.random() * 6 + 1);
    var randomNoPlayer2 = Math.floor(Math.random() * 6 + 1);

    // console.log(randomNoPlayer1 ,randomNoPlayer2);

    function player1(num){
        let imgHref = "images/dice"+num+".png";
        document.querySelector('#imgOfPlayer1').setAttribute('src',imgHref);
    }

    function player2(num){
        let imgHref = "images/dice"+num+".png";
        document.querySelector('#imgOfPlayer2').setAttribute('src',imgHref);
    }

    function winPlayer( p1, p2 ){
        if( p1>p2 ){
            document.querySelector('#btnStart').textContent = 'play';
            document.querySelector('#player1').classList.add('yellowText');
            document.querySelector('#player2').classList.remove('yellowText');
            document.querySelector('#headTitle').innerHTML = "<span class='redColor'>🚩</span> Player 1 Wins!";
        }else if( p1<p2){
            document.querySelector('#btnStart').textContent = 'play';
            document.querySelector('#player2').classList.add('yellowText');
            document.querySelector('#player1').classList.remove('yellowText');
            document.querySelector('#headTitle').innerHTML = "Player 2 Wins! <span class='redColor'>🚩</span>";
        }else{
            document.querySelector('#headTitle').innerHTML = 'Draw!';
            document.querySelector('#btnStart').textContent = 'Replay';
        }    
            
    }

    player1(randomNoPlayer1);
    player2(randomNoPlayer2);
    winPlayer( randomNoPlayer1, randomNoPlayer2);
}


